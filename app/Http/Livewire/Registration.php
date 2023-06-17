<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\Country;
use App\Models\Province;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class Registration extends Component
{
    public string $username = 'allanrono';
    public string $email = 'allanrano@gmail.com';
    public string $password = 'Kungfucool24';
    public string $passwordConfirmation = 'Kungfucool24';
    public string $accountType = 'parent';
    public string $firstName = 'Allan';
    public string $lastName = 'Rono';
    public string $phoneNumber = '254712345678';
    public string $address = '123 Main Street';
    public string $city = '';
    public string $province = '991a625d-a434-4544-89b3-35049517fe5f';
    public string $postalCode;
    public string $country = '991a625d-63ef-4774-909c-ec4110184a52';
    public string $grade = '';
    public string $school = '';
    public array $activities = [];
    public array $page;
    public int $currentStep = 1;
    public string $nextButtonClasses;
    public string $nextButtonText;

    public string $previousButtonClasses;

    public string $message = 'Your account has been created successfully.';

    public function render(): Factory|View|Application
    {
        return view('livewire.registration');
    }

    public function getProvinces(): void
    {
        $this->page['provinces'] = Province::where('country_id', $this->country)
            ->get();
    }

    /**
     * Submit the registration form.
     * @throws ValidationException
     */
    public function submit()
    {
        $userData = new \stdClass();
        $userData->name = $this->username;
        $userData->email = $this->email;
        $userData->password = $this->password;
        $userData->password_confirmation = $this->passwordConfirmation;
        $userData->account_type = $this->accountType;
        $userData->data = [
            'account_type' => $this->accountType,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'phone_number' => $this->phoneNumber,
            'address' => $this->address,
            'city' => $this->city,
            'province' => Province::where('id', $this->province)->first()->name,
            'postal_code' => $this->postalCode,
            'country' => Country::where('id', $this->country)->first()->name,
        ];

        $response = ((new RegisteredUserController)->store($userData));
        $this->message = $response['message'];

        if ($response['status'] === 'success' && Auth::check()) {
            User::getDashboard(Auth::user(          ));
        } else {
            return redirect()->back()->with('message', $response['message']);
        }
    }
}
