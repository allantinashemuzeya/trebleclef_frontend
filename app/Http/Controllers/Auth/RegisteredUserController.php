<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Services\DrupalRestFeederService\StudentFeeder;
use App\Models\School;
use App\Mail\AdminNotifierMail;
use App\Models\Student;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Orchid\Platform\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @param Request $request
     * @return RedirectResponse
     *
     * @throws ValidationException
     * @throws GuzzleException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request?->password),
        ]);

        if (event(new Registered($user)) && $request->has('context') && $request->context === 'student') {
            $studentModel = new Student();
            $studentModel->user_id = $user->id;
            $studentModel->gender = $request->gender;
            $studentModel->cellphoneNumber = $request->cellphoneNumber;
            $studentModel->school_id = $request->school;
            $studentModel->date_of_birth = $request->dob;
            $studentModel->grade = $request->grade;
            $studentModel->bio = $request->bio;
            $studentModel->activities = [$request->instrument];

            $date = Carbon::now()->isoFormat('DD.MMM.YYYY.HH:MM:SSS');

            if ($request->file('profilePicture') != null) {
                $path = $request->file('profilePicture')->storeAs('public/profilePictures/' . $user->id . '/' . $date, $request->file('profilePicture')->getClientOriginalName());
                if ($path) {
                    $studentModel->profile_picture = $user->id . '/' . $date . '/' . $request->file('profilePicture')->getClientOriginalName();
                }
            }
            $studentModel->save();

            $role = Role::where('slug', 'student')->first();
            $user->addRole($role);

            $this->notifyAdmin($user);

            (new StudentFeeder($user))->createStudent();

            Auth::login($user);
            return redirect(RouteServiceProvider::HOME);
        }
        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the registration view.
     *
     * @return View
     */
    public function create()
    {
        $data['schools'] = School::all();
        $data['grades'] = Student::getGrades();
        $data['instruments'] = Student::getInstruments();
        return view('auth.register', $data);
    }

    public function notifyAdmin($data): bool
    {
        if (Mail::to('admin@trebleclefapp.co.za')->send(new AdminNotifierMail($data))) {
            return true;
        }
        return false;
    }
}

