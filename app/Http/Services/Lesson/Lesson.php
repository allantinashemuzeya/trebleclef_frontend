<?php /** @noinspection LaravelFunctionsInspection */

namespace App\Http\Services\Lesson;

use App\Http\Services\Subject\Subject;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class Lesson implements LessonInterface {

    public function get($lessonId, $includes = '') {
        // TODO: Implement get() method.

        $response = Http::get(env('BACKEND_API') . 'lesson/'.$lessonId.'?include='.$includes);
        return json_decode($response);

    }


    public function getAll() {
        // TODO: Implement getAll() method.
    }

    public function getSingleLesson($lessonId): array {

        // TODO: Implement getSingleLesson() method.

        $rawLesson = $this->get($lessonId, 'field_tutorial.field_media_video_file');

        $lesson = $this->processLesson($rawLesson->data, $rawLesson->data->relationships->field_subject->data->id);

        $skills_covered  = [];

        foreach($rawLesson->data->relationships->field_skills_covered->data as $item){
           array_push($skills_covered, $this->getSkillsCovered($item->id));
        }

        $lesson['skillsCovered'] = $skills_covered;

        $lesson['author'] = $rawLesson->data->relationships->field_author->data !== null ?  $this->getLessonAuthor($rawLesson->data->relationships->field_author->data->id) : null;

        if(property_exists($rawLesson, 'included')){
            foreach($rawLesson->included as $item){

                if($item->type === 'file--file'){
                    $lesson['tutorial']  = env('BACKEND_APP_ASSETS_URL') . $item->attributes->uri->url;
                }

            }
        }

        return $lesson;
    }


    public function getSkillsCovered($taxonomyId){

        // TODO: Implement getSkillsCovered() method.

        $response = Http::get(env('BACKEND_API_TAXONOMIES') . 'skills/'.$taxonomyId);
        return json_decode($response)->data->attributes->name;
    }

    public function getLessonAuthor($authorId): array|string {

        $response = Http::get(env('BACKEND_API') . 'tutor/'.$authorId.'?include=field_profile_picture');

        $author = '';

        if($response->status() === 200){
            $data = json_decode($response)->data->attributes;
            $includedData =  json_decode($response)->included;

            $author = [
                'name'=> $data->field_name,
                'bio'=> $data->field_bio->value,
                'quote'=> $data->field_quote->value,
            ];

            foreach ($includedData as $item) {
                if($item->type === 'file--file'){
                    $author['profilePicture'] = env('BACKEND_APP_ASSETS_URL') . $item->attributes->uri->url;
                }
            }

        }

        return $author;
    }

    public function getLessonsBySubject($subjectId) {
        // TODO: Implement getLessonBySubject() method.

        $response = Http::get(env('BACKEND_API') . 'lesson?include=field_subject,field_tutorial.field_media_video_file');
        $data = json_decode($response);
        $lessons = [];
        foreach ($data->data as $item) {
            if($this->processLesson($item, $subjectId)  !== null){
                array_push($lessons, $this->processLesson($item, $subjectId));
            }
        }


        return $lessons;
    }



    public function processLesson($lesson, $subjectId) {
        // TODO: Implement processLesson() method.

        $raw_lesson = $this->get($lesson->id, 'field_subject');

        $supportingDocuments = $this->getLessonSupportingDocuments($lesson->id);

        if(property_exists($raw_lesson, 'included')){
            foreach($raw_lesson->included as $item){
                if($item->type === 'node--subject'){
                    if($item->id === $subjectId){
                        return [
                            'id' => $lesson->id,
                            'name' => $raw_lesson->data->attributes->field_name,
                            'learningObjectives' => $raw_lesson->data->attributes->field_learning_objectives->value,
                            'overview' => $raw_lesson->data->attributes->field_overview->value,
                            'banner' => $this->getBanner($raw_lesson->data->id),
                            'subject' => $this->getSubject($raw_lesson->included),
                            'tutorial' => $this->getLessonTutorial($raw_lesson->included),
                            'date' =>  Carbon::parse($raw_lesson->data->attributes->created)->isoFormat('MMM DD YYYY'),
                            'supportingDocuments' => $supportingDocuments,
                        ];
                    }
                    else{
                        return null;
                    }
                }
            }
        }

        return null;
    }

    public function getLessonSupportingDocuments($lessonId) {

        // TODO: Implement getLessonBySubject() method.

        $response = Http::get(env('BACKEND_API') . 'lesson/'.$lessonId.'?include=field_supporting_documents');
        $data = json_decode($response);

        $documents = [];

        if(property_exists($data, 'included')){
            foreach($data->included as $item){
                if($item->attributes->filemime === 'application/pdf'){
                    array_push($documents, ['name'=>$item->attributes->filename, 'url'=> env('BACKEND_APP_ASSETS_URL') . $item->attributes->uri->url]);
                }
            }
        }

        return $documents;
    }

    public function getBanner($lessonId) {
        $rawItem = $this->getWithBanner($lessonId);

        if(property_exists($rawItem, 'included')){
            foreach ($rawItem->included as $item){
                if($item->type === 'file--file'){
                    return env('BACKEND_APP_ASSETS_URL') . $item->attributes->uri->url;
                }
            }
        }
    }

    public function getWithBanner($lessonId){
        $includes = '?include=field_banner';
        $response = Http::get(env('BACKEND_API') . 'lesson/' . $lessonId . $includes);

        return json_decode($response);
    }

    public function getSubject($data) {
        foreach ($data as $item){
            if($item->type === 'node--subject'){
               return (new Subject())->getSingleSubject($item->id);
            }
        }
    }

    public function getLessonTutorial($data) {

        foreach ($data as $item){
            if($item->type === 'node--subject'){
                return (new Subject())->getSingleSubject($item->id);
            }
        }
    }

}
