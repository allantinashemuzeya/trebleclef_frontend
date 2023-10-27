<?php

namespace App\Http\Services\DrupalRestFeederService;

use App\Models\School;
use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\NoReturn;

class RuffleFeeder
{
    public mixed $student;
    public User $user;
    public Client $client;
    public mixed $chargeObject;
    public School $school;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => config('trebleclef.cms_base_url'),
            'timeout'  => 2.0,
        ]);
    }

    /**
     * @throws GuzzleException
     */
    #[NoReturn] public function createRuffle($data): string
    {
        $serializedStudent = $this->serializeRuffle($data);
        $response = $this->client->request('POST', '/node/ruffle_registrations?_format=hal_json', [
            'json' => $serializedStudent,
            'headers' => [
                'Content-Type' => 'application/hal+json',
                'Accept' => 'application/hal+json',
                'X-CSRF-Token' => (new DrupalRestFeeder())->getCsrfToken(),
            ],
            'auth' => [
                config('trebleclef.cms_write_username'),
                config('trebleclef.cms_write_password')
            ]
        ]);

        dd($response->getBody());
        return ($response->getBody()->getContents());
    }


    public function serializeRuffle($data): array{

        return [
            "_links" => [
                "type" => [
                    "href" => config('trebleclef.cms_base_url')."/rest/type/node/ruffle_registrations"
                ],
                config('trebleclef.cms_base_url') . "" => [

                    "href" => config('trebleclef.cms_base_url')."/node?_format=hal_json"
                ]
            ],
            "type" => [
                [
                    "target_id" => "ruffle_registrations",
                    "target_type" => "node_type"
                ]
            ],
            "status" => [
                [
                    "value" => true
                ]
            ],
            "title" => [
                array(
                    "value" => $data->payPlan['title'].' - '. $data->full_name_surname
                ),
            ],
            "field_grade" => [
                [
                    "value" => $data->grade
                ]
            ],
            "field_name_and_surname" => [
                [
                    "value" => $data->full_name_surname
                ]
            ],
            "field_email_address" => [
                [
                    "value" => Auth::user()->email
                ]
            ],
            "field_student_school_tmp" => [
                [
                    "value" => $data->school
                ]
            ]
        ];
    }
}
