<?php

namespace App\Http\Controllers;

use App\Http\Services\Events\Events;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    //
    public function index()
    {
        $events = (new Events())->getAll();

        return view('events.index', ['events'=>$events,'currentStudent'=> Student::where('user_id', Auth::user()->id)->first()
        ]);
    }
}
