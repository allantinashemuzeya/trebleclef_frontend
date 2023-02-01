<?php

namespace App\Http\Controllers;

use App\Http\Services\DrupalRestFeederService\ReceiptFeeder;
use App\Http\Services\SchoolFees\SchoolFees;
use App\Models\Student;
use App\Models\Tutors;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class FeesProductsController extends Controller
{

    //

    public function pay($productId)
    {
        if (Auth::user()->userType === 1) {
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        } else if (Auth::user()->userType === 2) {
            $currentUser = Tutors::where('userId', Auth::user()->id)->first();
        } else {
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }

        $pay_plan = (new SchoolFees())->get($productId);

        $structures = (new SchoolFees())->getAll();

        return view('fees-product', ['currentUser' => $currentUser, 'pay_plan' => $pay_plan, 'structures' => $structures]);
    }

    /**
     * @throws GuzzleException
     */
    public function chargeCard(Request $request)
    {

        // values extracted from request
        $data = [
            'token' => $request->cardToken, // Your token for this transaction here
            'amountInCents' => $request->payplan['price'] * 100, // payment in cents amount here
            'currency' => 'ZAR' // currency here
        ];

    // Anonymous test key. Replace with your key.
        $secret_key = env('YOCO_LIVE_SECRET_KEY');

    // Initialise the curl handle
        $ch = curl_init();

    // Setup curl
        curl_setopt($ch, CURLOPT_URL,"https://online.yoco.com/v1/charges/");
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

        $invoiceDetails = ['user' => Auth::user(), 'payPlan' => $request->payplan];

        if(json_decode($result)->status === 'successful'){

            $user = Auth::user();
            $user->hasSubscription = 1;
            $user->save();

           if( (new InvoicingController)->generateInvoice($invoiceDetails)){
                $this->sendReceipt($result, $request->payplan);
               return response(json_decode($result)->status, 200)
                   ->header('Content-Type', 'application/json');
           }
        }
        return 0;
    }

    /**
     * @throws GuzzleException
     * @throws GuzzleException
     */
    private function sendReceipt(bool|string $result, mixed $payplan)
    {
        $data = [
            'user' => Auth::user(),
            'payPlan' => $payplan,
            'student' => Auth::user()->student,
            'chargeObject' => $result,
        ];

        (new ReceiptFeeder())->createReceipt($data);
    }
}
