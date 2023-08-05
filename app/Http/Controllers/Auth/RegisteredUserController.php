<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Services\DrupalRestFeederService\StudentFeeder;
use App\Http\UtilsHelper;
use App\Models\Activity;
use App\Models\Country;
use App\Models\Grade;
use App\Models\Province;
use App\Models\School;
use App\Mail\AdminNotifierMail;
use App\Models\Student;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
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

/**
 * Class RegisteredUserController
 * @package App\Http\Controllers\Auth
 */

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @param $UserData
     * @return array
     */
    public function store($UserData): array
    {
        $user = User::create([
            'username' => $UserData->name,
            'name' => $UserData->data['first_name'] . ' '. $UserData->data['last_name'],
            'email' => $UserData->email,
            'password' => Hash::make($UserData?->password),
            'data' => $UserData->data,
        ]);

        Auth::login($user);

        //event(new Registered($user));

        User::assignRoles($UserData, $user);

        $this->notifyAdmin($user);

        return [
            'status' => 'success',
            'message' => 'User created successfully',
            'data' => $user,
        ];
    }

    /**
     * Display the registration view.
     *
     * @return View
     */
    public function create(): View
    {
        return view('auth.v2.register', ['page' =>
            self::getPageLevelData()]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param $data
     * @return bool
     */
    public function notifyAdmin($data): bool
    {
        if (Mail::to('admin@trebleclefapp.co.za')->send(
            new AdminNotifierMail($data))) {
            return true;
        }
        return false;
    }

    /**
     * Get page level Data
     * @return array
     */
    private static function getPageLevelData(): array
    {
        $resources = [
            'js' => [
                '/WebApplication/assets/js/pages-auth-multisteps.js',
            ],
            'css' => [
                '/WebApplication/assets/vendor/css/pages/page-auth.css',
            ],
        ];

        $country = Country::where('code', config('app.current_country_code'))->first();
        $provinces = Province::where('country_id', $country->id)->get();

        return [
            'title' => 'Register',
            'resources' => UtilsHelper::handlePageLevelResources($resources),
            'meta' => [
                'description' => 'Register Page',
                'keywords' => 'Register',
                'canonical_url' => url()->current(),
                'robots' => 'noindex, nofollow'
            ],
            'schools' => School::all(),
            'grades' => Grade::all(),
            'activities' => Activity::all(),
            'provinces' => $provinces,
            'country' => $country
        ];
    }


    public function filterCountries(Request $request): JsonResponse
    {
        return Country::where('code', 'ZA')->get();
    }
}

