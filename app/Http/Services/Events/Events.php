<?php /** @noinspection LaravelFunctionsInspection */

namespace App\Http\Services\Events;

use Illuminate\Support\Facades\Http;

 class  Events implements EventInterface
{

    public function getAll()
    {
        // TODO: Implement getAll() method.

        $response = Http::get(env('BACKEND_API').'events?include=field_event_banner,field_event_document');

        $data = json_decode($response);
        $events = [];

//        dd($data);


        foreach($data->data as $event){
            $events[] = $this->getSingleEvent($event->id);
        }

        return $events;
    }


    public function getSingleEvent($eventId): array
    {
        $response = Http::get(env('BACKEND_API').'events/'.$eventId.'?include=field_event_banner,field_event_document,field_media.field_media_video_file,field_media.field_media_image');

        $data = json_decode($response);
        $event = $data->data;

        $event_media = [];

        $event_banner = '';

        foreach ($data->included as $include){
            if($include->id === $event->relationships->field_event_banner->data->id ){
                $event_banner = env('BACKEND_APP_ASSETS_URL') . $include->attributes->uri->url;
            }else{
                if($include->type === 'file--file'){
                    $event_media[] = ['file' => env('BACKEND_APP_ASSETS_URL') . $include->attributes->uri->url, 'type'=>$include->attributes->filemime];
                }
            }

        }

        return [

            'id' =>$event->id,
            'title' => $event->attributes->title,
            'sub_title' => $event->attributes->field_sub_title,
            'start_date' => $event->attributes->field_start_date,
            'end_date' => $event->attributes->field_end_date,
            'event_description' => $event->attributes->body->value,
            'event_banner' => $event_banner,
            'venue' => $event->attributes->field_venue,
            'venue_address' => $event->attributes->field_venue_address,
            'media'=> $event_media

        ];

    }

    public function getEventBanner()
    {
        // TODO: Implement getEventBanner() method.
    }
}
