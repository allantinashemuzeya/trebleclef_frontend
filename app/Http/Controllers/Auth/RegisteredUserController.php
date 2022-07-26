<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\AdminNotifierMail;
use App\Models\Student;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param Request $request
     * @return RedirectResponse
     *
     * @throws ValidationException
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

            $studentModel->save();


        }

        if (event(new Registered($user))) {
            $this->notifyAdmin($user);
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

