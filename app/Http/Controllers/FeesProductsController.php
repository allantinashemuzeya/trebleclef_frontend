<?php

namespace App\Http\Controllers;

use App\Http\Services\DrupalRestFeederService\ReceiptFeeder;
use App\Http\Services\DrupalRestFeederService\RuffleFeeder;
use App\Http\Services\SchoolFees\SchoolFees;
use App\Models\Ruffle;
use App\Models\Student;
use App\Models\Transactions;
use App\Models\Tutors;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class FeesProductsController extends Controller
{
    public function fees(): Factory|View|Application
    {
        $structures = (new SchoolFees())->getAll();
        return view('fees', ['pay_plans' => $structures]);
    }

    public function pay($productId): Factory|View|Application
    {
        $pay_plan = (new SchoolFees())->get($productId);
        $structures = (new SchoolFees())->getAll();
        return view('fees-product', ['pay_plan' => $pay_plan, 'structures' => $structures]);
    }

    /**
     * @throws GuzzleException
     */
    public function chargeCard(Request $request): Response|int|Application|ResponseFactory
    {
        $data = [
            'token' => $request->cardToken, // Your token for this transaction here
            'amountInCents' => $request->payplan['price'] * 100, // payment in cents amount here
            'currency' => 'ZAR' // currency here
        ];

        $result = $this->processCharge($data);

        $invoiceDetails = ['user' => Auth::user(), 'payPlan' => $request->payplan];
        if(json_decode($result)->status === 'successful'){
            $this->runSuccessOperations($invoiceDetails, json_decode($result), $request);
            return response(json_decode($result)->status, 200)
                   ->header('Content-Type', 'application/json');
        }
        return response(json_decode($result)->status, 500)
            ->header('Content-Type', 'application/json');
    }


    /**
     * @throws GuzzleException
     * @throws GuzzleException
     */
    private function recordTransaction($chargeObject, mixed $payplan, string $invoiceId): void
    {
        //convert $result to object
        Transactions::create([
            'name' => $payplan['title'],
            'user_id' => Auth::user()->id,
            'payplan_id' => $payplan['id'],
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
     * @return mixed
     */
    public function getCurrentUser(): mixed
    {
        if (Auth::user()->userType === 1) {
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        } else if (Auth::user()->userType === 2) {
            $currentUser = Tutors::where('userId', Auth::user()->id)->first();
        } else {
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }
        return $currentUser;
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

    /**
     * Updates the raffle record
     * @param array $payplan
     * @return void
     */
    public function updateRaffleRecord(array $payplan): mixed{
        $raffle = Ruffle::where('user_id', Auth::user()->id)->first();
        $raffle->status = 'paid';
        $raffle->save();
        return $raffle;
    }

    /**
     * @param array $invoiceDetails
     * @param bool|string $result
     * @param Request $request
     * @return void
     * @throws GuzzleException
     */
    private function runSuccessOperations(array $invoiceDetails, mixed $result, Request $request): void
    {
        $invoice = (new InvoicingController)->generateInvoice($invoiceDetails);
        $this->recordTransaction($result, $request->payplan, $invoice);
        if($request->payplan['type'] === 'raffles'){
          $this->updateRaffleRecord($request->payplan);
        }else{
            $this->updateUser();
        }
    }

    /**
     * @param array $data
     * @return bool|string
     */
    private function processCharge(array $data): string|bool
    {
        $secret_key = env('YOCO_LIVE_SECRET_KEY');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://online.yoco.com/v1/charges/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);

        // Basic Authentication method
        // Specify the secret key using the CURLOPT_USERPWD option
        curl_setopt($ch, CURLOPT_USERPWD, $secret_key . ":");

        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

        // send to yoco
        $result = curl_exec($ch);
        Log::debug(curl_getinfo($ch, CURLINFO_HTTP_CODE));

        // close the connection
        curl_close($ch);
        return $result;
    }
}
