<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
        return view('gallery');
    }

    public function office(){
        return view('office');
    }



}
