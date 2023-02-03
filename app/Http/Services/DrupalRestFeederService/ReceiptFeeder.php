<?php

namespace App\Http\Services\DrupalRestFeederService;

use App\Models\School;
use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ReceiptFeeder
{
    private static Client $client;

    public function __construct()
    {
        self::$client = new Client([
            'base_uri' => config('trebleclef.cms_base_url'),
            'timeout'  => 2.0,
        ]);
    }

    /**
     * @throws GuzzleException
     */
    public function createReceipt($data): string
    {
        $serializedStudent = self::serializeReceipt($data);
        $response = self::$client->request('POST', '/node?_format=hal_json', [
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

    public static function serializeReceipt($data): array{
        $user = $data['user'];
        $student = $data['student'];
        $school = School::where('uuid',$student->school)->first();
        $chargeObject = $data['chargeObject'];
        $payPlan = $data['payPlan'];

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
                    "value" => $user->name
                ]
            ],
            "field_school_grade" => [
                [
                    "value" => $student->grade
                ]
            ],
            "field_school" => [
                [
                    "target_id" => str_replace('/node/', '', $school->url),
                    "target_type" => "node",
                    "target_uuid" => $school->uuid,
                    "url" => $school->url,
                ]
            ],
            "field_user_id" => [
                [
                    "value" =>$user->id
                ]
            ],
            "field_email_address" => [
                [
                    "value" => $user->email
                ]
            ],
            "field_app_" => [
                [
                    "value" => $student->id
                ]
            ],
            "field_app_user_id" => [
                [
                    "value" => $user->id
                ]
            ],

            "field_charge_object"=> [
                [
                    "value"=> $chargeObject,
                ]
            ],
            "field_date"=> [
                [
                    "value"=> Carbon::now()->toDateTimeString(),
                ]
            ],
            "field_pay_plan_name"=> [
                [
                    "value"=> $payPlan['title'],
                ]
            ],
            "field_payment_amount"=> [
                [
                    "value"=> json_decode($chargeObject)->amountInCents / 100,
                ]
            ],
        ];
    }
}
