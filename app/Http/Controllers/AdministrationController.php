<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function login()
    {
        return view('administration.auth.login');
    }

    public function register()
    {
        return view('administration.auth.register');
    }

    public function dashboard()
    {
        $data = $this->getDashboardData();
        return view('Administration.Dashboard.dashboard', $data);
    }

   public function profile()
   {
       return view('Administration.Dashboard.profile');
   }

    private function getDashboardData()
    {
        $students = Student::all()->count();
        $users = User::all()->count();
        $newStudents = Student::where('created_at', '>=', now()->subDays(7))->get()->count();

        // get the percentage of new students in the last 7 days
        $newStudentsIncreaseInPercent = $newStudents / $students * 100;
        $studentsIncreaseInPercent = $students / $users * 100;
        return [
            'students' => $students,
            'users' => $users,
            'newStudents' => $newStudents,
            'newStudentsIncreaseInPercent' => round($newStudentsIncreaseInPercent,2),
            'studentsIncreaseInPercent' => round($studentsIncreaseInPercent,2)
        ];
    }


}
