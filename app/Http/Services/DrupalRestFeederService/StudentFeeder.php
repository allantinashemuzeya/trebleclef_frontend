<?php

namespace App\Http\Services\DrupalRestFeederService;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use App\Models\User;
use App\Models\School;

class StudentFeeder {

    public $student;
    public $user;
    public $client;
    public $school;

    public function __construct(User $user)
    {
        $this->client = new Client([
            'base_uri' => config('trebleclef.cms_base_url'),
            'timeout'  => 2.0,
        ]);
        $this->user = $user;
        $this->student = $user->student;
        $this->student->name = $user->name;
        $this->school = School::where('uuid',$this->student->school)->first();

    }

    public function createStudent()
    {
        $serializedStudent = $this->serializeStudent();
        $response = $this->client->request('POST', '/node?_format=hal_json', [
                'json' => $serializedStudent,
                'headers' => [
                    'Content-Type' => 'application/hal+json',
                    'Accept' => 'application/hal+json',
                    'X-CSRF-Token' => $this->getCsrfToken(),
                ],
                'auth' => [
                    'allan',
                    'Kungfucool24'
                ]
            ]);
        return ($response->getBody()->getContents());
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
    public function serializeStudent(): array{

        $data = $this->student;
        return [
            "_links" => [
                "type" => [
                    "href" => config('trebleclef.cms_base_url')."/rest/type/node/student"
                ],
                config('trebleclef.cms_base_url') . "" => [
                    "href" => config('trebleclef.cms_base_url')."/node?_format=hal_json"
                ]
            ],
            "type" => [
                [
                    "target_id" => "student",
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
                    "value" => "Student Registration"
                ]
            ],
            "field_full_name" => [
                [
                    "value" => $data->name
                ]
            ],
            "field_gender" => [
                [
                    "value" => $data->gender
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
                    "value" => $data->user_id
                ]
            ],
            "field_date_of_birth" => [
                [
                    "value" => $data->date_of_birth
                ]
            ]
        ];
    }
}
