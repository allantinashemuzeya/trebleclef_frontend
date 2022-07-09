<?php

namespace App\Http\Controllers;

use App\Http\Services\Gallery\Gallery;
use App\Http\Services\SchoolFees\SchoolFees;
use App\Models\Student;
use App\Models\Tutors;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SitePagesController extends Controller
{
    //

    public function networks(){

        $currentStudent = Student::where('user_id', Auth::user()->id)->first();

        $data = [
            'currentStudent'=>$currentStudent,
            'pageTitle' => 'Treble Clef Networks'
        ];

        return view('networks', $data );
    }

    public  function gallery(){

        $galleries = (new Gallery())->getAll();
        return view('gallery', ['galleries' => $galleries]);
    }

    public function office(){

        if(Auth::user()->userType === 1){
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }
        else if(Auth::user()->userType === 2){
            $currentUser = Tutors::where('userId', Auth::user()->id)->first();
        }
        else{
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }

        $tutors = Tutors::all();
        $tutors_ = [];

        foreach ($tutors as $tutor){
            $tutors_[] = User::where('id', $tutor->userId)->first();
        }

        return view('office',  [ 'pageTitle' => '','currentUser'=>$currentUser,'tutors'=>$tutors_]);
    }

}
