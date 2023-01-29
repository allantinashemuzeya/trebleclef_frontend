<?php

namespace App\Http\Services\Schools;

use Illuminate\Support\Facades\Http;
use JetBrains\PhpStorm\ArrayShape;
use GuzzleHttp\Client;

class School implements SchoolsInferface
{

    public $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('trebleclef.cms_base_url'),
            'timeout' => 2.0,
        ]);
    }

    public function getSchools(): array
    {
        $response = $this->client->request('GET', 'schools?_format=hal_json', [
            'headers' => [
                'Content-Type' => 'application/hal+json',
                'Accept' => 'application/hal+json',
                'X-CSRF-Token' => $this->getCsrfToken(),
            ],
            'auth' => [
                config('trebleclef.cms_write_username'),
                config('trebleclef.cms_write_password'),

            ]
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }


    public function getCsrfToken(){
        $response = $this->client->request('POST', 'session/token?_format=hal_json', [
            'headers' => [
                'Accept' => 'application/hal+json',
                'Content-Type' => 'application/hal+json',
            ],

        ]);
        return $response->getBody()->getContents();
    }

    public function getAll(): array
    {
        // TODO: Implement getAll() method.

        $response = Http::get(config('trebleclef.backend_api') . 'schools');
        $data = json_decode($response);
        $schools = [];

        foreach ($data->data as $item) {

            $schools[] = $this->getWithBanner($item->id);
        }

        return $schools;

    }
    #[ArrayShape(['id' => "mixed", 'name' => "mixed", 'location' => "mixed", 'banner' => "string"])] public function getWithBanner($id): array
    {
        $response = Http::get(config('trebleclef.backend_api') . 'schools/' . $id . '?include=field_location,field_banner');
        $data = json_decode($response);


        $location = '';
        $banner = '';

        foreach ($data->included as $include_item) {
            if ($include_item->id === $data->data->relationships->field_location->data->id) {
                $location = $include_item->attributes->name;
            }
            if ($include_item->type === 'file--file') {
                $banner = config('trebleclef.backend_app_assets_url') . $include_item->attributes->uri->url;
            }
        }



        return ['id' => $data->data?->id, 'name' => $data->data?->attributes?->field_name, 'location' => $location, 'banner' => $banner];
    }
}
