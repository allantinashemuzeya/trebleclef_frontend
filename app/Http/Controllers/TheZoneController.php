<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Tutors;
use App\Models\User;
use DirectoryIterator;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class TheZoneController extends Controller
{
    // Home of The Zone
    public function index(): Factory|View|Application
    {
        // Identify

        return view('theZone.index', ['currentUser' => self::identify(), 'users' => self::getData()['users']]);
    }

    public function identify()
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

    public function getData(): array
    {

        $data = [];

        $users = User::all();
        $students = Student::all();

        foreach ($users as $user) {

            if($user->id !== Auth::user()->id){
                $userData = ['userPrimaryInfo' => $user];

                foreach ($students as $student) {
                    if ($user->id == $student->user_id) {
                        $userData['userMoreInfo'] = $student;
                    }
                }

                $data['users'][] = $userData;
            }
        }

        $dir = new DirectoryIterator('/Users/allan.muzeya/PhpstormProjects/trebleclef_frontend/storage');
        foreach ($dir as $fileinfo) {
            if (!$fileinfo->isDot()) {
                var_dump($fileinfo->getFilename());
            }
        }

//        dd($data);

        return $data;

    }
}
