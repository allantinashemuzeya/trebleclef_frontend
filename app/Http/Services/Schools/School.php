<?php

namespace App\Http\Services\Schools;

use Illuminate\Support\Facades\Http;

class School implements SchoolsInferface
{

    public function getAll()
    {
        // TODO: Implement getAll() method.

        $response = Http::get(env('BACKEND_API').'schools?include=field_location');
        $data = json_decode($response);

        $schools = [];

        foreach($data->data as $item){

            $location = '';
            foreach ($data->included as $include_item) {
                if($include_item->id === $item->relationships->field_location->data->id){
                    $location = $include_item->attributes->name;
                }
            }
            $schools[] = ['id' => $item?->id, 'name' => $item?->attributes?->field_name, 'location'=>$location];
        }

        return $schools;

    }
}
