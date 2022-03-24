<?php

namespace App\Http\Controllers;

use App\Http\Services\Lesson\Lesson;
use App\Http\Services\StudentLevels\StudentLevels;
use App\Http\Services\Subject\Subject;

class ClassroomController extends Controller
{

    public function index(){
        $studentLevels = (new StudentLevels())->getAll();

        return view('classroom.index', ['pageTitle'=>'Choose a Student Level', 'studentLevels'=>$studentLevels]);
    }
    //
    public function subjects($studentLevel) {

        $subjects = (new Subject)->getAll();
        $filtered_subjects = [];

        foreach ($subjects as $subject){
            foreach($subject['student_levels'] as $student_level){
                if($student_level['id'] === $studentLevel){
                    array_push($filtered_subjects, $subject);
                }
            }

        }

        return view('subjects.index', ['subjects'=>$filtered_subjects]);
    }

    public function subject($subject) {
        $subject = (new Subject)->getSingleSubject($subject);
        $lessons = (new Lesson())->getLessonsBySubject($subject['id']);

        return view('subjects.subject-detail', ['subject'=>$subject, 'subjects'=>[], 'lessons'=>$lessons]);
    }

    public function lessons($subject) {
       return 'lessons';
    }

    public function lesson($lessonId, $subject) {
        $lesson = (new Lesson())->getSingleLesson($lessonId);
        $lessons = (new Lesson())->getLessonsBySubject($subject);

        return view('lessons.lesson-detail', ['pageTitle'=>$lesson['name'],'lesson'=>$lesson, 'lessons'=>$lessons]);
    }

}
