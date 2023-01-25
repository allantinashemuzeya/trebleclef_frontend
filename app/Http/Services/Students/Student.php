<?php

namespace App\Http\Services\Students;

use App\Models\User;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Storage;
use JetBrains\PhpStorm\NoReturn;


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
    #[NoReturn] public function createStudent(User $user)
    {
        // TODO: Implement createStudent() method.

        $studentData = $user->student()->first();

        $path = Storage::disk('public')->path('/profilePictures/' . $studentData->profile_picture);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'cms.trebleclefapp.co.za/jsonapi/node/student',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
    "data": {
        "type": "node--student",
        "attributes": {
            "langcode": "en",
            "status": true,
            "title": "Allan T Muzeya",
            "field_cellphone_number": "748454087",
            "field_date_of_birth": "2023-01-23",
            "field_first_name": "Allan",
            "field_gender": "male",
            "field_last_name": "Muzeya",
            "field_next_of_kin_contact": "748454087",
            "field_next_of_kin_full_name": "Martha Makro",
            "field_postal_address": "1322",
            "field_residential_address": "1322 Cameroon Street",
            "field_student_bio": "i love you so much",
            "field_user_id": 1,
            "field_network_profile_picture": null
        },
        "relationships": {
            "field_school": {
                "data": {
                    "type": "node--schools",
                    "id": "1b1b6045-a9d2-4339-b561-4249d727098e"
                }
            }
        }
    }
}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/vnd.api+json',
                'Authorization: Basic YWxsYW46S3VuZ2Z1Y29vbDI0'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
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
