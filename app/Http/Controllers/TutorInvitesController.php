<?php

namespace App\Http\Controllers;

use App\Models\Tutors;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TutorInvitesController extends Controller
{
    //
    public function index($email_address){
        return view('inviteTutor.landing', ['email', $email_address]);
    }

    public function createTutor(Request $request){
        $tutorModel = new Tutors();

        $user = new User();

        $user->firstname = $request->first_name;
        $user->lastname = $request->last_name;
        $user->email= $request->email;
        $user->password = Hash::make($request->password);
        $user->userType = 2;

        if($user->save()) {

            $tutorModel->userId = $user->id;
            $tutorModel->userType = 2;
            $tutorModel->save();


            return to_route('login');
        }

    }
}

