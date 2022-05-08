<?php

namespace App\Http\Services\SchoolFees;

use Illuminate\Support\Facades\Http;

class SchoolFees implements SchoolFeesInterface
{

    public function get()
    {
        // TODO: Implement get() method.

        $response = Http::get(env('BACKEND_API').'school_fees_structure');

        dd(json_decode($response));

    }
}
