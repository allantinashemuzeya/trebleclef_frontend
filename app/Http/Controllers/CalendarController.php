<?php

namespace App\Http\Controllers;

use App\Http\Services\Calendar\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    //

    public function index() {

        return view('calendar.index', ['calendar'=>(new Calendar())->getCalendar()]);

    }
}
