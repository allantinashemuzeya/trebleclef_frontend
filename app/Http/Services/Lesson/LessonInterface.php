<?php

namespace App\Http\Services\Lesson;

interface LessonInterface {

    public function get($lessonId);
    public function getAll();
    public function getSingleLesson($lessonId);
    public function getLessonsBySubject($subjectId);
    public function processLesson($lesson, $subjectId);
}

