<?php

namespace App\Http\Services\MusicQuotes;



use Http;

class MusicQuotes implements MusicQuotesInterface
{

    //Section GET ALL
    public function getAll(){

        $response = Http::get(env('BACKEND_API').'music_quotes');
        $data = json_decode($response);

        $musicQuotes = [];


        foreach ($data->data as $item){
            array_push($musicQuotes, [
                'id'=>$item->id,
                'text'=>$item->attributes->field_text_version,
                'by'=>'Treble Clef Academy',
            ]);
        }

        return $musicQuotes;
    }

}
