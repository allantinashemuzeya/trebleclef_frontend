<?php

namespace App\Http;

use App\Models\Student;
use App\Models\Tutors;
use Illuminate\Support\Facades\Auth;

class Helper
{
    public static function getCurrentUser()
    {
        if (Auth::user()->userType === 1) {
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        } else if (Auth::user()->userType === 2) {
            $currentUser = Tutors::where('userId', Auth::user()->id)->first();
        } else {
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }
        return $currentUser;
    }

}
