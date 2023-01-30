<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use App\Models\InvoicesModel;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class InvoicingController extends Controller
{
    //
    public function generateInvoice(array $data):string
    {

        $result = InvoicesModel::create([
            "UserId" => $data['user']->id,
            "InvoiceNumber" => $this->generateInvoiceNumber(),
            "PayPlan" => $data['payPlan']['id']
        ]);


//        exit;
        if($result){
            $data['invoiceNumber'] = $result['InvoiceNumber'];
            // convert response to a usable object
            if (!empty(Auth::user()->email)) {
                if (Mail::to(Auth::user()->email)->send(new InvoiceMail($data))) {
                    return 'Invoice Sent Successfully';
                }
                return 'Something went wrong Generating!';
            }
        };


        return 0;
    }

    public function previewInvoice(InvoicesModel $invoice): Factory|View|Application
    {
        return view('ShowInvoice.index', ['data' => $invoice]);
    }

    public function generateInvoiceNumber(): string
    {
        $number = rand(10,10000);
        return '#'.$number;
    }
}
