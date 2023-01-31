<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DrupalRestFeederController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://cms.trebleclefapp.co.za/',
        ]);
    }

  public function index(){

        $token = $this->getAuthToken();

        print $this->getSerializedContent();

        $serialized_content = $this->getSerializedContent();


  }

  public function getAuthToken(){
      $response = $this->client->request('POST', 'session/token?_format=hal_json', [
          'headers' => [
              'Accept' => 'application/hal+json',
              'Content-Type' => 'application/hal+json',
          ],

      ]);
      return $response->getBody()->getContents();
  }

  public function getSerializedContent($data, $content_type){

        return [
                "_links" => [
                    "type" => [
                        "href" => config('trebleclef.cms_base_url')."type/node/".$content_type
                    ]
                ],
                "type" => [
                    [
                        "target_id" => "student",
                        "target_type" => "node_type",
                        "target_uuid" => "12122993-cdac-44e9-9787-7b8a7bdae767"
                    ]
                ],
                "status" => [
                    [
                        "value" => true
                    ]
                ],
                "title" => [
                    [
                        "value" => "Allan T Muzeya"
                    ]
                ],
                "field_first_name" => [
                    [
                        "value" => "Allan Learning "
                    ]
                ],
                "field_gender" => [
                    [
                        "value" => "male"
                    ]
                ],
                "field_last_name" => [
                    [
                        "value" => "Muzeya"
                    ]
                ],
                "field_network_profile_picture" => [
                ],
                "field_next_of_kin_contact" => [
                ],
                "field_next_of_kin_full_name" => [
                ],
                "field_postal_address" => [
                ],
                "field_residential_address" => [
                    [
                        "value" => "211 Marie Curie Avenue"
                    ]
                ],
                "field_school" => [
                    [
                        "target_id" => 23,
                        "target_type" => "node",
                        "target_uuid" => "1b1b6045-a9d2-4339-b561-4249d727098e",
                        "url" => "/node/23"
                    ]
                ],
                "field_student_bio" => [
                    [
                        "value" => "I love my music and writing code"
                    ]
                ],
                "field_user_id" => [
                    [
                        "value" => 1
                    ]
                ]
            ];


  }
}
