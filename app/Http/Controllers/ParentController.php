<?php

namespace App\Http\Controllers;

use App\Http\Helpers\HelperMethods;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ParentController extends Controller
{
    /**
     * Shows the Parent Dashboard
     *
     */
    public function index(): Application|Factory|View
    {
        $title = 'Parents Dashboard | Treble Clef Academy';
        $activeRoute = Route::current()->getAction('as');
        return view('Dashboards.parent-dashboard',
            HelperMethods::getGenericNavMenu(title: $title));
    }
}
