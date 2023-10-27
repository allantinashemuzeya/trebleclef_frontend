<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function login()
    {
        return view('Administration.Auth.login');
    }

    public function register()
    {
        return view('Administration.Auth.register');
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

    private function getDashboardData(): array
    {
        $users = User::all()->count();
        $students = User::role('student')->count();
        //check how many users have the role student
        $newStudents = User::role('student')->where('created_at', '>=', now()->subDays(7))->count();
        $transactions = Transactions::all()->sortByDesc('created_at');

        //go through transactions and get total amount
        $totalAmount = 0;
        foreach ($transactions as $transaction) {
            $totalAmount += round($transaction->amount_in_cents / 100, 2);
        }

        $data = [
            'students' => $students,
            'users' => $users,
            'newStudents' => $newStudents,
            'newStudentsIncreaseInPercent' => 0,
            'studentsIncreaseInPercent' => 0,
            'transactions' => $transactions,
            'totalAmount' => $totalAmount,
        ];

        // get the percentage of new students in the last 7 days
        if($students > 0 && $newStudents > 0 ){
            $newStudentsIncreaseInPercent = $newStudents / $students * 100;
            $studentsIncreaseInPercent = $students / $users * 100;
            $data['newStudentsIncreaseInPercent'] = $newStudentsIncreaseInPercent;
            $data['studentsIncreaseInPercent'] = $studentsIncreaseInPercent;
        }

        return $data;
    }


}
