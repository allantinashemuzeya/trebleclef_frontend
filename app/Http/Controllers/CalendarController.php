<?php

namespace App\Http\Controllers;

use App\Http\Helpers\HelperMethods;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Help;

class CalendarController extends Controller
{

    public function index() {

        return view('Applications.calendar', self::getPageLevelData());
    }
    /**
     * Get Page Level Data
     *
     * @return array
     */
    private static function getPageLevelData(): array
    {
        $title = 'School Calendar | Treble Clef Academy';
        $activeRoute = Route::current()->getAction('as');
        return HelperMethods::getGenericNavMenu(title: $title);
    }
}
