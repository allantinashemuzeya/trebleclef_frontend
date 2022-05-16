<?php

namespace App\Http\Services\Foundations;

use Carbon\Carbon;
use Http;
use JetBrains\PhpStorm\ArrayShape;

class Foundation implements FoundationInterface
{

    //SECTION  GET COMM
    public function get($foundationId) {
        $includes = 'include=field_media.field_media_image,field_media.field_media_video_file,field_media.field_media_document';
        $response = Http::get(env('BACKEND_API') . 'foundation/'.$foundationId.'?' . $includes);

        // dd($response);
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

        $includes = 'include=field_media.field_media_image,field_foundation_banner';
        $response = Http::get(env('BACKEND_API') . 'foundation?' . $includes);

        if ($response->status() === 200) {
            $data = json_decode($response);
            $foundations = [];

            foreach ($data->data as $item){
                try{
                    $foundations[] = $this->processFoundation($item);

                }catch(\Exception $e){

                }
            }


            return $foundations;
        }
        else {
            return ['error' => $response->status()];
        }
    }


    public function processFoundation($data) {

        $id = $data->id;
        $raw_foundation = $this->get($id);


        return [
            'id'=>$raw_foundation->data->id,
            'title'=>$raw_foundation->data->attributes->title,
            'banner'=>$this->getFoundationBanner($id),
            'url_alias'=>$raw_foundation->data->attributes->path->alias,
            'type'=>$raw_foundation->data->attributes->field_foundation_type,
            'date'=>Carbon::parse($raw_foundation->data->attributes->created)->isoFormat('MMM DD YYYY'),
            'body'=>$this->sanitizeBodyField($raw_foundation->data->attributes->body->value),
            'media'=>property_exists($raw_foundation, 'included') ? $this->getMedia($raw_foundation->included) : []
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
                    'type' => $item->attributes->filemime,
                    'name' => $item->attributes->filename
                ];
            }
        }

        return $media;
    }

    public function getFoundationBanner($foundationId): array|string|null {

        $includes = 'include=field_foundation_banner.field_media_image,field_foundation_banner.field_media_video_file';
        $response = Http::get(env('BACKEND_API') . 'foundation/'.$foundationId.'?' . $includes);


        if ($response->status() === 200) {

            $data =  json_decode($response);

            return isset($data->included) ? $this->processFoundationBanner($data->included ) :  null ;
        }
        else {
            return ['error' => $response->status()];
        }
    }

    #[ArrayShape(['file' => "string", 'type' => "mixed|string"])] public function processFoundationBanner($data): array {

        $banner = ['file'=>'', 'type'=>''];

        foreach ($data as $item){

            if($item->type === 'file--file'){
                $banner['file'] =  env('BACKEND_APP_ASSETS_URL').$item->attributes->uri->url;
                $banner['type'] =  $item->attributes->filemime;
            }
        }

        return $banner;
    }

    public function getSinglefoundation($id): array
    {
//        $cid = $this->getCid($url_alias);

        $includes = 'include=field_media.field_media_image';
        $response = Http::get(env('BACKEND_API') . 'foundation/'.$id.'?' . $includes);
        if ($response->status() === 200) {
            $data = json_decode($response);

            return $this->processfoundation($data->data);
        }
        else {
            return ['error' => $response->status()];
        }
    }

}
