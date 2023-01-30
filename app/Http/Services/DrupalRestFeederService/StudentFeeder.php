<?php /** @noinspection DuplicatedCode */

namespace App\Http\Services\DrupalRestFeederService;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use App\Models\User;
use App\Models\School;

class StudentFeeder {

    public mixed $student;
    public User $user;
    public Client $client;
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

    public function createStudent(): string
    {
        $serializedStudent = $this->serializeStudent();
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
                    "value" => $this->user->name
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
            "field_instrument" => [
                [
                    "value" => $data->instrument
                ]
            ],
            "field_school_grade" => [
                [
                    "value" => $data->grade
                ]
            ],
            "field_cellphone_number" => [
                [
                    "value" => $data->cellphoneNumber
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
            ],
            "field_email_address" => [
                [
                    "value" => $this->user->email
                ]
            ]
        ];
    }
}
