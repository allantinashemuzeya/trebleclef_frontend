<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

namespace App\Http\Services\SchoolFees;

use Illuminate\Support\Facades\Http;

class SchoolFees implements SchoolFeesInterface
{

    public function get()
    {
        // TODO: Implement get() method.
    }

    public function getAll(): array
    {
        // TODO: Implement getAll() method.

        $response = Http::get(env('BACKEND_API').'pricing_plans');
        $data = json_decode($response);
        $pay_plans = [];

        foreach($data->data as $pay_plan){
            $pay_plans[] = [
                'id'=> $pay_plan->id,
                'title'=> $pay_plan->attributes->title,
                'description'=> $pay_plan->attributes->field_description,
                'price'=> $pay_plan->attributes->field_price,
                'payment_link' =>  $pay_plan->attributes->field_payment_link->uri,
            ];
        }

        return $pay_plans;
    }
}
