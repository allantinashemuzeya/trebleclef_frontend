<?php

namespace App\Http\Services\Students;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\MultipartStream;
use Illuminate\Support\Facades\Storage;


class Student implements StudentsInterface
{

    public function getStudents(): array
    {
        // TODO: Implement getStudents() method.

    }

    public function getStudent(string $studentId): array
    {
        // TODO: Implement getStudent() method.
    }

    /**
     * @throws GuzzleException
     */
    public function createStudent(array $studentData): array
    {
        // TODO: Implement createStudent() method.

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => env('CMS_BASE_URL'),
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);


        $path = Storage::disk('public')->path('/profilePictures/'.$studentData->profile_picture);
        $file = fopen($path, 'r');

        $multipart = [
            [
                'name'     => 'data',
                'contents' => json_encode([
                    'type' => 'node--content_type',
                    'attributes' => [
                        'langcode' => 'en',
                        'status' => true,
                        'title' => $studentData->name,
                        'field_cellphone_number' => $studentData->cellphoneNumber,
                        'field_date_of_birth' => $studentData->date_of_birth,
                        'field_first_name' => $studentData->name,
                        'field_gender' => $studentData->gender,
                        'field_last_name' => $studentData->last_name,
                        'field_user_id' => $studentData->user_id,
                    ],
                    'relationships' => [
                        'field_profile_picture' => [
                            'data' => [
                                'type' => 'file--file',
                                'alt' => 'Profile Picture',
                                'title' => 'Cover Image',
                            ]
                        ]
                    ],
                ]),
            ],

            [
                'name'     => 'files[field_profile_picture]',
                'contents' => fopen($file, 'r'),
                'filename' => $studentData->profile_picture,
            ],
        ];

        $response = $client->request('POST', 'jsonapi/node/student', [
            'headers' => [
                'Content-Type' => 'multipart/form-data',
            ],
            'multipart' => $multipart,
            'auth' => ['username', 'password'],
        ]);

        dd($response);
    }

    public function updateStudent(string $studentId, array $studentData): array
    {
        // TODO: Implement updateStudent() method.
    }

    public function deleteStudent(string $studentId): array
    {
        // TODO: Implement deleteStudent() method.
    }
}
