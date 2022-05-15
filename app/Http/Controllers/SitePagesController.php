<?php

namespace App\Http\Controllers;

use App\Http\Services\Gallery\Gallery;
use App\Http\Services\SchoolFees\SchoolFees;
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

        $galleries = (new Gallery())->getAll();
        return view('gallery', ['galleries' => $galleries]);
    }

    public function office(){
        $currentStudent = Student::where('user_id', Auth::user()->id)->first();

        return view('office',  [ 'pageTitle' => '','currentStudent'=>$currentStudent,
        ]);
    }


    //Section Mike is coding
    public function fees(){
        $structures = (new SchoolFees())->getAll();

        $currentStudent = Student::where('user_id', Auth::user()->id)->first();

        return view('fees', ['pay_plans' => $structures, 'pageTitle' => '',  'currentStudent'=>$currentStudent,
        ]);
    }



}
