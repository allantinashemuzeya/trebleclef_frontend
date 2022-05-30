<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatApplication extends Controller
{
    //
    public function index()
    {
        return view('email.app-email');
    }

    public function chat($email){

    }
}
