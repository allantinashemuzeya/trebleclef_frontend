<?php

namespace App\Http\Controllers;

use App\Http\Services\Gallery\Gallery;
use App\Http\Services\SchoolFees\SchoolFees;
use App\Models\School;
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

        $schools =School::all();
        $data = [
            'currentUser'=>$currentStudent,
            'pageTitle' => 'Treble Clef Networks',
            'schools' => $schools
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
        else{
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }

        $tutors_ = [];

        return view('office',  [ 'pageTitle' => '','currentUser'=>$currentUser,'tutors'=>$tutors_]);
    }

    public function chat()
    {

        if(Auth::user()->userType === 1){
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }
        else if(Auth::user()->userType === 2){
            $currentUser = Tutors::where('userId', Auth::user()->id)->first();
        }
        else{
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }

        return view('chatify.index',  [ 'pageTitle' => '','currentUser'=>$currentUser,]);

    }

}
