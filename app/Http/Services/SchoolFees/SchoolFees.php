<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

namespace App\Http\Services\SchoolFees;

use Illuminate\Support\Facades\Http;
use JetBrains\PhpStorm\ArrayShape;

class SchoolFees implements SchoolFeesInterface
{

    #[ArrayShape(['id' => "mixed", 'title' => "mixed", 'description' => "mixed", 'price' => "mixed", 'payment_link' => "mixed"])] public function get($productId)
    {
        // TODO: Implement get() method.
        $response = Http::get(env('BACKEND_API').'pricing_plans/'.$productId);
        $pay_plan = json_decode($response)->data;

        dd($pay_plan);
        return [
            'id'=> $pay_plan->id,
            'title'=> $pay_plan->attributes->title,
            'description'=> $pay_plan->attributes->field_description,
            'price'=> $pay_plan->attributes->field_price,
            'price_for_parent'=> $pay_plan->attributes->field_price_for_parents,
            'price_for_sibling'=> $pay_plan->attributes->field_price_for_students,
            'price_for_other'=> $pay_plan->attributes->field_price_for_other,
            //  'payment_link' =>  $pay_plan->attributes->field_payment_link->uri,
            'type' => $pay_plan->attributes?->field_type
        ];
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
                'price'=> $pay_plan->attributes->field_price ?? 0,
                'price_for_parent'=> $pay_plan->attributes->field_price_for_parents ?? 0,
                'price_for_sibling'=> $pay_plan->attributes->field_price_for_sibling ?? 0,
                'price_for_other'=> $pay_plan->attributes->field_price_for_other ?? 0,
                'type' => $pay_plan->attributes->field_type
            ];
        }

        return $pay_plans;
    }
}
