<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Tutors;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatApplication extends Controller
{
    //
    public function chatTutor(Request $request)
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

        $tutor = Tutors::where('userId', (int)$request->tutor)->first();
        $tutor_details  = User::where('id', (int)$request->tutor)->first();
        return view('email.app-email', ['tutor'=> $tutor, 'tutorDetails' => $tutor_details, 'currentUser'=>$currentUser]);
    }

    public function chat($email){

    }
}
