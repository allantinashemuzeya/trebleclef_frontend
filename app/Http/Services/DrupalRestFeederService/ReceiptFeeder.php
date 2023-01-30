<?php

namespace App\Http\Services\DrupalRestFeederService;

use App\Models\School;
use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ReceiptFeeder
{
    public mixed $student;
    public User $user;
    public Client $client;
    public mixed $chargeObject;
    public School $school;

    public function __construct($data)
    {
        $this->client = new Client([
            'base_uri' => config('trebleclef.cms_base_url'),
            'timeout'  => 2.0,
        ]);
        $this->user = $data->user;
        $this->student = $data->student;
        $this->student->name = $data->user->name;
        $this->school = School::where('uuid',$this->student->school)->first();
        $this->chargeObject = $data->chargeObject;
    }

    /**
     * @throws GuzzleException
     */
    public function createReceipt(): string
    {
        $serializedStudent = $this->serializeReceipt();
        $response = $this->client->request('POST', '/node?_format=hal_json', [
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
        return ($response->getBody()->getContents());
    }

    public function serializeReceipt(): array{
        return [
            "_links" => [
                "type" => [
                    "href" => config('trebleclef.cms_base_url')."/rest/type/node/receipts"
                ],
                config('trebleclef.cms_base_url') . "" => [
                    "href" => config('trebleclef.cms_base_url')."/node?_format=hal_json"
                ]
            ],
            "type" => [
                [
                    "target_id" => "receipts",
                    "target_type" => "node_type"
                ]
            ],
            "status" => [
                [
                    "value" => true
                ]
            ],
            "title" => [
                [
                    "value" => $this->user->name
                ]
            ],
            "field_school_grade" => [
                [
                    "value" => $this->student->grade
                ]
            ],
            "field_school" => [
                [
                    "target_id" => str_replace('/node/', '', $this->school->url),
                    "target_type" => "node",
                    "target_uuid" => $this->school->uuid,
                    "url" => $this->school->url,
                ]
            ],
            "field_user_id" => [
                [
                    "value" => $this->user->id
                ]
            ],
            "field_email_address" => [
                [
                    "value" => $this->user->email
                ]
            ],
            "field_app_" => [
                [
                    "value" => $this->user->id
                ]
            ],
            "field_app_user_id" => [
                [
                    "value" => $this->user->id
                ]
            ],

            "field_charge_object"=> [
                [
                    "value"=> $this->chargeObject,
                ]
            ],
            "field_date"=> [
                [
                    "value"=> Carbon::now()->toDateTimeString(),
                ]
            ],
        ];
    }
}
