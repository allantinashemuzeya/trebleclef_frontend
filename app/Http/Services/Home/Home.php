<?php /** @noinspection LaravelFunctionsInspection */

namespace App\Http\Services\Home;

use Illuminate\Support\Facades\Http;
use JetBrains\PhpStorm\ArrayShape;

class Home implements homeInterface {

    public function getMusicQuote() {
        // TODO: Implement getMusicQuote() method.
        $response = Http::get('https://cms.ddev.site/jsonapi/node/school_fees_structure');

    }

    //Section Draggable Slider
    public function draggableSlider(): array {
        $includes = 'include=field_draggable_slider.field_media.field_media_image,field_draggable_slider.field_media.field_media_video_file';
        $response = Http::get(env('BACKEND_API') . 'home_page?' . $includes);

        if ($response->status() === 200) {

            $data = json_decode($response);
            return $this->processDraggableSlider($data->included);

        }
        else {
            return ['error' => $response->status()];
        }
    }

    //Section Treble Clef Tv
    public function trebleClefTv(): array {

        $includes = 'include=field_treble_clef_tv.field_tv_content.field_media_video_file,field_treble_clef_tv.field_tv_content.field_media_image';
        $response = Http::get(env('BACKEND_API') . 'home_page?' . $includes);

        if ($response->status() === 200) {


            $data = json_decode($response);

            return $this->processTrebleClefTv($data->included);

        }
        else {
            return ['error' => $response->status()];
        }
    }

    #[ArrayShape([
        'sliderType' => "string",
        'content' => "array",
    ])] public function processDraggableSlider($data): array {

        $slider = ['sliderTitle' => '', 'sliderType' => '', 'content' => []];
        foreach ($data as $item) {
            switch ($item->type) {
                case 'file--file':
                    $slider['content'][] = [
                        'type' => $item->attributes->filemime,
                        'file' => env('BACKEND_APP_ASSETS_URL') . $item->attributes->uri->url,
                    ];
                    break;
                case 'paragraph--draggable_slider':
                    $slider['sliderType'] = $item->attributes->field_slider_type;
                    $slider['sliderTitle'] = $item->attributes->field_title !== NULL ? $item->attributes->field_title : '';
                    break;
            }
        }
        return $slider;

    }

    #[ArrayShape(['content' => "array"])] public function processTrebleClefTv($data): array {
        $slider = ['tvTitle' => '', 'content' => []];

        foreach ($data as $item) {
            switch ($item->type) {
                case 'file--file':
                    $slider['content'][] = [
                        'type' => $item->attributes->filemime,
                        'file' => env('BACKEND_APP_ASSETS_URL') . $item->attributes->uri->url,
                    ];
                    break;

                case 'media--remote_video':
                    $slider['content'][] = [
                        'type' => 'remote_video',
                        'file' =>  str_replace('https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/', $item->attributes->field_media_oembed_video),
                    ];
                    break;


                case 'paragraph--treble_clef_tv':
                    $slider['tvTitle'] = $item->attributes->field_title !== NULL ? $item->attributes->field_title : '';
                    break;

            }
        }

        return $slider;

    }

    //Section Navigation
    public function navigationCards(): array {
        $includes = 'include=field_home_navigation';
        $response = Http::get(env('BACKEND_API') . 'home_page?' . $includes);

        $nav_cards = [];
        if ($response->status() === 200) {
            $data = json_decode($response);

            if(property_exists($data,'included')){
                foreach ($data->included as $item){
                    $nav_cards[] = $this->processNavigationCard($item);
                }
            }
        }
        return $nav_cards;
    }

    public function getSingleNavCard($id): array {

        $includes = 'include=field_background_image.field_media_image';
        $response = Http::get(env('BACKEND_API_PARAGRAPHS') . 'card/'.$id.'?' . $includes);


        if ($response->status() === 200) {
            $data = json_decode($response);

            return property_exists($data ,'included') ?  $data->included : [];
        }
        else {
            return ['error' => $response->status()];
        }}


    #[ArrayShape([
        'cardTitle' => "mixed|string",
        'background' => "string"
    ])] public function processNavigationCard($card): array {
        $data = $this->getSingleNavCard($card->id);

        $background = '';
        $title = '';
        $type = '';
        foreach ($data as $item){
            if($item->type === 'file--file'){
                $background = env('BACKEND_APP_ASSETS_URL').$item->attributes->uri->url;
                $title = $card->attributes->field_title;
                $type = $card->attributes->field_type;
            }
        }
        $card = ['cardTitle' => '', 'background' => ''];
        $card['cardTitle'] = $title;
        $card['cardType'] = $title;
        $card['background'] = $background;
        $card['type'] = $type;

        return $card;
    }
    public function get() {
        // TODO: Implement get() method.
    }

}
