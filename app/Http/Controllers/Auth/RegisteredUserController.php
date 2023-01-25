<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Services\Schools\School;
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

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return View
     */
    public function create()
    {
        $data['schools'] = app(School::class)->getAll();
        return view('auth.register', $data);
    }

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request?->name . ' ' . $request?->last_name,
            'email' => $request?->email,
            'password' => Hash::make($request?->password),
        ]);

        if ($user) {

            $userModel = DB::table('users')->latest()->first();

            $studentModel = new Student();

            $studentModel->user_id = $userModel->id;
            $studentModel->gender = $request->gender;
            $studentModel->cellphoneNumber = $request->cellphoneNumber;
            $studentModel->school = $request->school;
            $studentModel->date_of_birth = $request->dob;

            $date = Carbon::now()->isoFormat('DD.MMM.YYYY.HH:MM:SSS');

            if ($request->file('profilePicture') !== null) {
                $path = $request->file('profilePicture')->storeAs('public/profilePictures/' . $user->id . '/' . $date, $request->file('profilePicture')->getClientOriginalName());
                if ($path) {
                    $studentModel->profile_picture = $user->id . '/' . $date . '/' . $request->file('profilePicture')->getClientOriginalName();
                }
            }

            $studentModel->save();
        }

        if (event(new Registered($user))) {
            $this->notifyAdmin($user);
            (new \App\Http\Services\Students\Student)->createStudent($user);
        }

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function notifyAdmin($data): bool
    {
        if (Mail::to('admin@trebleclefapp.co.za')->send(new AdminNotifierMail($data))) {
            return true;
        }
        return false;
    }
}

