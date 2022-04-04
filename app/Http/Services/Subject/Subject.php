<?php

namespace App\Http\Services\Subject;

use App\Http\Services\StudentLevels\StudentLevels;
use Illuminate\Support\Facades\Http;

class Subject implements subjectInterface {

    public function get($subjectId) {

        $includes = '?include=field_banner,field_subject_cover_media.field_media_video_file,field_subject_cover_media.field_media_image,field_student_level';
        $response = Http::get(env('BACKEND_API') . 'subject/' . $subjectId . $includes);

        return json_decode($response);

    }

    public function getWithCoverBanner($subjectId) {

        $includes = '?include=field_banner';
        $response = Http::get(env('BACKEND_API') . 'subject/' . $subjectId . $includes);

        return json_decode($response);

    }

    public function getAll() {
        // TODO: Implement getAll() method.
        $includes = '?include=field_banner,field_subject_cover_media.field_media_video_file,field_subject_cover_media.field_media_image';
        $response = Http::get(env('BACKEND_API') . 'subject' . $includes);
        $data = json_decode($response);

        $subjects = [];

        foreach ($data->data as $item) {
            array_push($subjects, $this->processSubject($item));
        }

        return $subjects;

    }

    public function processSubject($data) {

        // TODO: Implement getAll() method.
        $subjects = [];

        $rawItem = $this->get($data->id);

        return [
            'id' => $rawItem->data->id,
            'name' => $rawItem->data->attributes->field_name,
            'overview' => $rawItem->data->attributes->field_overview->value,
            'banner' => $this->getCover($rawItem->data->id),
            'sub_intro'=> $this->getSubjectIntro($rawItem->data->id),
            'student_levels'=>$this->getStudentLevel($rawItem->included)
        ];

    }

    public function getSubjectIntro($subjectId){

        $rawItem = $this->getWithSubjectIntro($subjectId);

        if(property_exists($rawItem, 'included')){
            foreach ($rawItem->included as $item){
                if($item->type === 'file--file'){
                    return env('BACKEND_APP_ASSETS_URL') . $item->attributes->uri->url;
                }
            }
        }
    }

    public function getWithSubjectIntro($subjectId) {

        $includes = '?include=field_subject_cover_media.field_media_video_file,field_subject_cover_media.field_media_image';
        $response = Http::get(env('BACKEND_API') . 'subject/' . $subjectId . $includes);

        return json_decode($response);

    }

    public function getStudentLevel($data){

        $studentLevels  = [];
        foreach ($data as $item){
            if($item->type === 'node--student_level'){
                 array_push($studentLevels, (new StudentLevels())->getSingleStudentLevel($item->id));
            }
        }

        return $studentLevels;
    }

    public function getCover($subjectId) {

        $rawItem = $this->getWithCoverBanner($subjectId);

        if(property_exists($rawItem, 'included')){
            foreach ($rawItem->included as $item){
                if($item->type === 'file--file'){
                    return env('BACKEND_APP_ASSETS_URL') . $item->attributes->uri->url;
                }
            }
        }

    }

    public function getSingleSubject($subjectId){

        $subject = $this->get($subjectId);

        $rawItem = $this->get($subjectId);

        return [
            'id' => $subject->data->id,
            'name' => $subject->data->attributes->field_name,
            'overview' => $subject->data->attributes->field_overview->value,
            'banner' => $this->getCover($rawItem->data->id),
            'sub_intro'=> $this->getSubjectIntro($rawItem->data->id),
            'student_level'=>$this->getStudentLevel($rawItem->included)

        ];



    }



}
