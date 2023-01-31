<?php

namespace App\Http\Services\Gallery;


use Http;

class Gallery implements GalleryInterface
{

    public function getAll()
    {
        // TODO: Implement getAll() method.
        $response = Http::get(env('BACKEND_API').'gallery');
        $data = json_decode($response);

        $galleries = [];

        foreach ($data->data as $gallery){

           $files =  self::get($gallery->id);
           $galleries[] = [
               'id' => $gallery->id,
               'gallery_name' => $gallery->attributes->field_gallery_category,
               'files' => $files
           ];
        }

        return $galleries;
    }

    public function get($id)
    {
        // TODO: Implement get() method.

        $response = Http::get(env('BACKEND_API').'gallery/'.$id.'?include=field_gallery.field_media_image,field_gallery.field_media_video_file');
        $data = json_decode($response);

        $files = [];

        foreach($data->included as $file){

            if($file->type === 'file--file'){
                $files[] = [
                    'id' => $file->id,
                    'name' => $file->attributes->filename,
                    'filemime' => $file->attributes->filemime,
                    'uri' => $file->attributes->uri->url
                ];
            }

        }

        return $files;
    }
}
