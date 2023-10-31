<?php

namespace App\Http\Controllers;

use App\Http\Helpers\HelperMethods;
use App\Models\Lesson;
use App\Http\Services\StudentLevels\StudentLevels;
use App\Models\Subject;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class ClassroomController extends Controller
{

    public function index(){
        $title = 'Classroom';
        return view('classroom.index', HelperMethods::getGenericNavMenu(title: $title));
    }

    public function subjects($studentLevel) {
        $title = 'Subjects';
        $data = HelperMethods::getGenericNavMenu(title: $title);
        $data['studentLevel'] = $studentLevel;
        return view('subjects.index', $data);
    }

    public function subject(Subject $subject) {
        $title = $subject->name;
        $data = HelperMethods::getGenericNavMenu(title: $title);
        $data['subject'] = $subject;
        return view('subjects.subject-detail', $data);
    }
    
    public function lesson(Lesson $lesson) {
        $title = $lesson->name;
        $data = HelperMethods::getGenericNavMenu(title: $title);
        $data['lesson'] = $lesson;
        return view('lessons.lesson-detail', $data);
    }
}
