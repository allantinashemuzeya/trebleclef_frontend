<?php

namespace App\Http\Controllers;

use App\Http\Services\Calendar\Calendar;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    //

    public function index() {

        return view('calendar.index', ['calendar'=>(new Calendar())->getCalendar(),          'currentStudent'=> Student::where('user_id', Auth::user()->id)->first()
        ]);

    }
}
