<?php

namespace App\Http\Controllers;

use App\Http\Helpers\HelperMethods;
use App\Http\Services\Lesson\Lesson;
use App\Http\Services\StudentLevels\StudentLevels;
use App\Http\Services\Subject\Subject;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class ClassroomController extends Controller
{

    public function index(){
        $title = 'Classroom';
        return view('classroom.index', HelperMethods::getGenericNavMenu(title: $title));
    }
    //
    public function subjects($studentLevel) {
        $title = 'Subjects';
        $data = HelperMethods::getGenericNavMenu(title: $title);
        $data['studentLevel'] = $studentLevel;
        return view('subjects.index', $data);
    }

    public function subject($subject) {
        $subject = (new Subject)->getSingleSubject($subject);
        $lessons = (new Lesson())->getLessonsBySubject($subject['id']);
        return view('subjects.subject-detail', ['subject'=>$subject, 'subjects'=>[], 'lessons'=>$lessons,   'currentStudent'=> Student::where('user_id', Auth::user()->id)->first()
        ]);
    }

    public function lessons($subject) {

        $subject = (new Subject)->getSingleSubject($subject);
        $lessons = (new Lesson())->getLessonsBySubject($subject['id']);
        return 'lessons';
    }

    public function lesson($lessonId, $subject) {
        $lesson = (new Lesson())->getSingleLesson($lessonId);
        $lessons = (new Lesson())->getLessonsBySubject($subject);

        return view('lessons.lesson-detail', ['pageTitle'=>$lesson['name'],'lesson'=>$lesson, 'lessons'=>$lessons,    'currentStudent'=> Student::where('user_id', Auth::user()->id)->first()
        ]);
    }

}
