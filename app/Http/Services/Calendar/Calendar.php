<?php /** @noinspection LaravelFunctionsInspection */

namespace App\Http\Services\Calendar;

use Http;

class Calendar implements CalendarInterface {

    public function getCalendar() {
        // TODO: Implement getCalendar() method.

        $response = Http::get(env('BACKEND_API').'calendar?include=field_calendar_pdf');

        $data = json_decode($response);
        return property_exists($data, 'included') ?  $this->processCalendar($data->included) : null;
    }

    public function processCalendar($data){

        foreach($data as $item){
            if($item->type === 'file--file'){
                return env('BACKEND_APP_ASSETS_URL') . $item->attributes->uri->url;
            }
        }
    }

}
