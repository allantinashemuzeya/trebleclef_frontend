<?php

namespace App\Http\Controllers;

use App\Http\Services\SchoolFees\SchoolFees;
use Illuminate\Http\Request;

class UserSubscriptionsController extends Controller
{
    //

    public function index()
    {
        $structures = (new SchoolFees())->getAll();

        return view('auth.subscription', ['pay_plans' => $structures]);
    }
}
