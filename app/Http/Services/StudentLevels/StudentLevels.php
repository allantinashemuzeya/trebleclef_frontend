<?php /** @noinspection LaravelFunctionsInspection */

namespace App\Http\Services\StudentLevels;

use Illuminate\Support\Facades\Http;

class StudentLevels implements studentLevelsInterface {


    public function get($studentLevelId) {
        $includes = 'include=field_banner';
        $response = Http::get(config('trebleclef.backend_api') . 'student_level/' . $studentLevelId . '?' . $includes);
        if ($response->status() === 200) {
            $data = json_decode($response);
            return $data;
        } else {
            return ['error' => $response->status()];
        }
    }

    //SECTION GET STUDENT LEVELS
    public function getAll(): array
    {
        // TODO: Implement getAll() method.
        $includes = 'include=field_banner';

        $response = Http::get(config('trebleclef.backend_api') . 'student_level/?include=field_banner');

        $studentLevels = [];

        if ($response->status() === 200) {
            $data = json_decode($response);

            foreach ($data->data as $item) {
                array_push($studentLevels, $this->processStudentLevel($item));
            }

            return $studentLevels;
        }
        else {
            return ['error' => $response->status()];
        }
    }

    public function processStudentLevel($data) {

        $id = $data->id;
        $raw_studentLevel = $this->get($id);

        return [
            'id'=>$raw_studentLevel->data->id,
            'title'=>$raw_studentLevel->data->attributes->title,
            'banner'=>$this->getStudentLevelBanner($id),
        ];
    }

    public function getStudentLevelBanner($studentLevelId): array|string|null {

        $includes = 'include=field_banner';
        $response = Http::get(config('trebleclef.backend_api') . 'student_level/' . $studentLevelId . '?' . $includes);

        if ($response->status() === 200) {
            $data =  json_decode($response);
            return isset($data->included) ? $this->processStudentLevelBanner($data->included ) :  null ;
        }
        else {
            return ['error' => $response->status()];
        }
    }


    public function processStudentLevelBanner($data): string {
        $banner = '';
        foreach ($data as $item){
            if($item->type === 'file--file'){
                $banner = env('BACKEND_APP_ASSETS_URL').$item->attributes->uri->url;
            }
        }

        return $banner;
    }


    public function getSingleStudentLevel($id){
        //        $cid = $this->getCid($url_alias);

        $includes = 'include=field_banner';
        $response = Http::get(config('trebleclef.backend_api') . 'student_level/' . $id . '?' . $includes);
        if ($response->status() === 200) {
            $data = json_decode($response);

            return $this->processStudentLevel($data->data);
        }
        else {
            return ['error' => $response->status()];
        }
    }


}
