<?php

namespace App\Http\Controllers;

use App\Http\Helpers\HelperMethods;
use App\Http\Services\Calendar\Calendar;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    //

    public function index() {
        $title = 'Calendar';
        return view('calendar.index', HelperMethods::getGenericNavMenu(title: $title));
    }
}
