<?php /** @noinspection LaravelFunctionsInspection */

namespace App\Http\Services\Communication;

use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class Communication implements communicationInterface {

    //SECTION  GET COMM
    public function get($communicationId) {
        $includes = 'include=field_media.field_media_image';
        $response = Http::get(env('BACKEND_API') . 'communication/'.$communicationId.'?' . $includes);
        if ($response->status() === 200) {
            $data = json_decode($response);
            return $data;
        }
        else {
            return ['error' => $response->status()];
        }
    }

    //SECTION GET COMMS
    public function getAll(): array {
        // TODO: Implement getAll() method.

        $includes = 'include=field_media.field_media_image,field_communication_banner';
        $response = Http::get(env('BACKEND_API') . 'communication?' . $includes);

        if ($response->status() === 200) {
            $data = json_decode($response);
            $communications = [];

            foreach ($data->data as $item){

                array_push($communications, $this->processCommunication($item));
            }


            return $communications;
        }
        else {
            return ['error' => $response->status()];
        }
    }


    public function processCommunication($data) {

       $id = $data->id;
       $raw_communication = $this->get($id);

        return [
                 'id'=>$raw_communication->data->id,
                 'title'=>$raw_communication->data->attributes->title,
                 'banner'=>$this->getCommunicationBanner($id),
                 'url_alias'=>$raw_communication->data->attributes->path->alias,
                 'type'=>$raw_communication->data->attributes->field_communication_type,
                 'date'=>Carbon::parse($raw_communication->data->attributes->created)->isoFormat('MMM DD YYYY'),
                 'body'=>$this->sanitizeBodyField($raw_communication->data->attributes->body->value),
                 'media'=>property_exists($raw_communication, 'included') ? $this->getMedia($raw_communication->included) : []
        ];
    }

    public function sanitizeImages($data): array|string {
        $img = $data;
        $img_withUrl = str_replace('/sites/default/files', env('BACKEND_APP_ASSETS_URL').'/sites/default/files',$img);
        return str_replace('img', 'img style="min-height:600px; max-width:100%"',$img_withUrl);
    }

    public function sanitizeBodyField($data): array|string {

        $body_withClass = str_replace('<p', '<p class="card-text mb-2"', $data);
        $body_withH4Class =  str_replace('<h4', '<h4 class="mb-75"', $body_withClass);
        $body_withH3Class =  str_replace('<h3', '<h3 class="mb-75"', $body_withH4Class);
        $body_withH2Class =  str_replace('<h2', '<h2 class="mb-75"', $body_withH3Class);
        $body_withSanitizedMedia = $this->sanitizeImages($body_withH2Class);
        $body_withUlClass =  str_replace('<ul', '<ul class="p-0 mb-2"', $body_withSanitizedMedia);
        $body_withLiClass =  str_replace('<li', '<li class="d-block"', $body_withUlClass);
        $body_withSpanClass =  str_replace('<span>-</span>', '<span class="me-25">-</span>', $body_withLiClass);

        return str_replace('<h1', '<h1 class="mb-75"', $body_withSpanClass);
    }


    public function getMedia($data): array {
        $media = [];
        foreach ($data as $item){
            if($item->type === 'file--file'){
                $media[] = [
                    'file' => env('BACKEND_APP_ASSETS_URL') . $item->attributes->uri->url,
                    'type' => $item->attributes->filemime];
            }
        }

        return $media;
    }

    public function getCommunicationBanner($communicationId): array|string|null {

        $includes = 'include=field_communication_banner.field_media_image';
        $response = Http::get(env('BACKEND_API') . 'communication/'.$communicationId.'?' . $includes);

        if ($response->status() === 200) {
            $data =  json_decode($response);
            return isset($data->included) ? $this->processCommunicationBanner($data->included ) :  null ;
        }
        else {
            return ['error' => $response->status()];
        }
    }

    public function processCommunicationBanner($data): string {
        $banner = '';
        foreach ($data as $item){
            if($item->type === 'file--file'){
                $banner = env('BACKEND_APP_ASSETS_URL').$item->attributes->uri->url;
            }
        }

        return $banner;
    }

    public function getSingleCommunication($id): array
    {
//        $cid = $this->getCid($url_alias);

        $includes = 'include=field_media.field_media_image';
        $response = Http::get(env('BACKEND_API') . 'communication/'.$id.'?' . $includes);
        if ($response->status() === 200) {
            $data = json_decode($response);

            return $this->processCommunication($data->data);
        }
        else {
            return ['error' => $response->status()];
        }
    }

    public function getCid($url_alias) {
        $response = Http::get(env('BACKEND_APP_ASSETS_URL').'/router/translate-path?path=/communication'.$url_alias);

        dd($response);
        $data = json_decode($response);

        return $data;



    }
}
