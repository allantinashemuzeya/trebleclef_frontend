<?php

namespace App\Http\Controllers;

use App\Http\Helpers\HelperMethods;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $title = 'Calendar';
        return HelperMethods::getGenericNavMenu($title);
    }
}
