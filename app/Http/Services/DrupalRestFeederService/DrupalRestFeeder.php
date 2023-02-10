<?php

namespace App\Http\Services\DrupalRestFeederService;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class DrupalRestFeeder{

    public Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('trebleclef.cms_base_url'),
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function getCsrfToken(): string
    {
        $response = $this->client->request('POST', 'session/token?_format=hal_json', [
            'headers' => [
                'Accept' => 'application/hal+json',
                'Content-Type' => 'application/hal+json',
            ],

        ]);
        return $response->getBody()->getContents();
    }
}
