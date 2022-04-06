<?php

namespace App\Http\Services\Schools;

use Illuminate\Support\Facades\Http;

class School implements SchoolsInferface
{

    public function getAll()
    {
        // TODO: Implement getAll() method.

        $response = Http::get(env('BACKEND_API').'schools');
        $data = json_decode($response);

        $schools = [];

        foreach($data->data as $item){
            array_push($schools, [ 'id'=>$item?->id, 'name'=> $item?->attributes?->field_name ] );
        }

        return $schools;

    }
}
