<?php

namespace App\Http\Controllers;

use App\Http\Services\SchoolFees\SchoolFees;
use App\Http\Services\YocoApi\YocoChargeApi;
use App\Mail\SendRuffleTickets;
use App\Models\Product;
use App\Models\Ruffle;
use App\Models\Transactions;
use App\Models\RaffleTicket;
use App\Models\EventRegistration;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FeesProductsController extends Controller
{
    public function fees(): Factory|View|Application
    {
        $structures = (new SchoolFees())->getAll();
        return view('fees', ['pay_plans' => $structures]);
    }

    public function pay($productId): Factory|View|Application
    {
        $pay_plan = Product::where('drupal_uuid', $productId)->first();
        $structures = Product::all(); 
        return view('fees-product', ['pay_plan' => $pay_plan, 'structures' => $structures]);
    }

    /**
     * @throws GuzzleException
     */
    public function chargeCard(Request $request): Response|int|Application|ResponseFactory
    {
        $pay_plan = Product::where('drupal_uuid', $request->pay_plan_id)->first();
        
        $data = [
            'token' => $request->cardToken, // Your token for this transaction here
            'amountInCents' => $pay_plan->price * 100, // payment in cents amount here
            'currency' => 'ZAR' // currency here
        ];

        $result = YocoChargeApi::processCharge($data);

        $invoiceDetails = [
            'user' => Auth::user(),
            'payPlan' => $pay_plan, 
            'result' => $result, 
            'request' => $request
        ];
        
        $status = json_decode($result)->status;
        if ($status === 'successful') {
            $this->runSuccessOperations($invoiceDetails, json_decode($result), $request);

            return response(json_decode($result)->status, 200)
                ->header('Content-Type', 'application/json');
        }
        return response(json_decode($result)->status, 500)
            ->header('Content-Type', 'application/json');
    }

    /**
     * @param array $invoiceDetails
     * @param bool|string $result
     * @param Request $request
     * @return void
     * @throws GuzzleException
     */
    private function runSuccessOperations(array $invoiceDetails, mixed $result): void
    {
        switch($invoiceDetails['payPlan']->type) {
            case 'raffles':
                $this->runRaffleOperations($invoiceDetails);
                break;
            case 'events':
                $this->runEventRegistrationOperations($invoiceDetails, $result);
                break;
            default:
                $this->runDefaultOperations($invoiceDetails, $result);
                break;
        }
    }
    
    /**
     * @param array $invoiceDetails
     * @param bool|string $result
     * @return void
     * @throws GuzzleException
     */
    public function runDefaultOperations($invoiceDetails, $result){
        $invoice = (new InvoicingController)->generateInvoice($invoiceDetails);
        $this->recordTransaction($result, $invoiceDetails['payPlan'], $invoice);
        //$this->updateUser();
    }
    
    /**
     * @param array $invoiceDetails
     * @param bool|string $result
     * @return void
     * @throws GuzzleException
     */
    private function runEventRegistrationOperations(array $invoiceDetails, mixed $result): void
    {
        $this->runDefaultOperations($invoiceDetails, $result);
        $this->createEventRegistrationRecord($invoiceDetails);
    }
    
    /**
     * @param array $payplan
     * @return void
     */
    public function createEventRegistrationRecord(array $invoiceDetails): void
    {
        $payplan = $invoiceDetails['payPlan'];
        $eventId = $invoiceDetails['request']->event_id;
        $eventRegistration = new EventRegistration();
        $eventRegistration->user_id = Auth::user()->id;
        $eventRegistration->event_id = $eventId; 
        $transaction = Transactions::where('user_id', Auth::user()->id)->latest()->first();
        $eventRegistration->transaction_id = $transaction->id;
        $eventRegistration->status = 'paid';
        $eventRegistration->save();
    }

    /**
     * @throws GuzzleException
     * @throws GuzzleException
     */
    private function recordTransaction($chargeObject, mixed $payplan, string $invoiceId): void
    {
        //convert $result to object
        if(is_string($chargeObject)){
            $chargeObject = json_decode($chargeObject);
        }
        Transactions::create([
            'name' => $payplan->title,
            'user_id' => Auth::user()->id,
            'payplan_id' => $payplan->id,
            'amount_in_cents' => $chargeObject->amountInCents,
            'invoice_id' => $invoiceId,
            'currency' => 'ZAR',
            'status' => $chargeObject->status,
            'yoco_charge_id' => (string)$chargeObject->id,
            'yoco_payment_id' => (string)$chargeObject->source->id,
            'yoco_livemode' => 'LIVE',
            'card_brand' => (string)$chargeObject->source->brand,
            'masked_card' => (string)$chargeObject->source->maskedCard,
            'fingerprint' => (string)$chargeObject->source->fingerprint,
            'exp_month' => (string)$chargeObject->source->expiryMonth,
            'exp_year' => (string)$chargeObject->source->expiryYear,
        ]);
    }

    /**
     * Updates the raffle record
     * @param array $payplan
     * @return mixed
     */
    public function updateRaffleRecord(): mixed
    {
        $raffle = Ruffle::where('user_id', Auth::user()->id)->latest()->first();
        $raffle->status = 'paid';
        $raffle->save();
        return $raffle;
    }
    
    /**
     * @param array $payplan
     * @return void
     * @throws GuzzleException
     */
    function runRaffleOperations(array $invoiceDetails): void
    {
        $payplan = $invoiceDetails['payPlan'];
        $result  = $invoiceDetails['result'];
        $raffle   = $this->updateRaffleRecord();
        $tickets = $this->generateRaffleTickets($raffle);
        
        $invoiceDetails['payPlan']->price = $payplan->price * $raffle->number_of_tickets;
        $invoice = (new InvoicingController)->generateInvoice($invoiceDetails);
        
        $this->recordTransaction($result, $payplan, $invoice);
        $this->saveRaffleTickets($tickets);
        $this->sendRaffleTickets($tickets);
    }
    
    /**
     * Generates raffle tickets
     * @param mixed $raffle
     * @return array
     */
    public function generateRaffleTickets ($raffle){
        $tickets = [];
        for ($i = 0; $i < $raffle->number_of_tickets; $i++) {
            $ticket = (object)[
                'user_id' => Auth::user()->id,
                'name' => $raffle->full_name_surname,
                'entry_number' => substr(Auth::user()->name, 0, 2) . $raffle->id . ($i + 1),
                'email' => Auth::user()->email,
                'phone' => $raffle->phone_number,
                'raffle_id' => $raffle->id,
            ];
            $tickets[] = $ticket;
        }
        return $tickets;
    }
    
    public function saveRaffleTickets($tickets){
    
        foreach ($tickets as $ticket) {
            $raffleTicket = new RaffleTicket();
            $raffleTicket->user_id = $ticket->user_id;
            $raffleTicket->raffle_id = $ticket->raffle_id;
            $raffleTicket->ticket_number = $ticket->entry_number;
            $raffleTicket->status = 'paid';
            $raffleTicket->save();
        }
    }
    
    public function sendRaffleTickets($tickets){
        Mail::to(Auth::user()->email)
        ->send(new SendRuffleTickets($tickets));
    }

    /**
     * @return void
     */
    public function updateUser(): void
    {
        $user = Auth::user();
        $user->hasSubscription = 1;
        $user->save();
    }
}
