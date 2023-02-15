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
        $registrations = [];

        foreach ($structures as $structure) {
            if ($structure['type'] === 'app_registration_fee') {
                $registrations[] = $structure;
            }
        }

        return view('auth.subscription', ['pay_plan' => $registrations[0]]);
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $user->hasSubscription = 1;
        $user->save();

        $subscription = new UserSubscriptions();
        $subscription->user_id = $user->id;
        $subscription->planId = $request->payplan;

        $subscription->save();

        if ( $user->save() && $subscription->save()) {
            return true;
        } else {
            return false;
        }
    }
}
