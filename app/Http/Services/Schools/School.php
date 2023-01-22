<?php

namespace App\Http\Services\Schools;

use Illuminate\Support\Facades\Http;
use JetBrains\PhpStorm\ArrayShape;

class School implements SchoolsInferface
{

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
