<?php /** @noinspection ALL */

namespace App\Models;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Livewire\Redirector;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'username',
        'password',
        'data'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'data' => 'array',
    ];

    public function teacher(): HasOne
    {
        return $this->hasOne(Teacher::class);
    }

    public function parent(): HasOne
    {
        return $this->hasOne(Parent::class);
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    /**
     * Gets the user's dashboard based on their role. If they are not logged in,
     * they are redirected to the login page.
     * @param  $user
     * @return RedirectResponse|Redirector
     */
    public static function getDashboard($user): Redirector|RedirectResponse
    {
        if ($user->hasRole('admin')) {
            return redirect(RouteServiceProvider::ADMINISTRATION);
        } elseif ($user->hasRole('tutor')) {
            return redirect(RouteServiceProvider::TUTOR);
        } elseif ($user->hasRole('parent')) {
            return redirect(RouteServiceProvider::PARENT);
        } elseif ($user->hasRole('student')) {
            return redirect(RouteServiceProvider::STUDENT);
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * @param $UserData
     * @param $user
     * @return void
     */
    public static function assignRoles($UserData, $user): void
    {
        if ($UserData->data['account_type'] == 'student') {
            $user->assignRole('student');
        } else if ($UserData->data['account_type'] == 'parent') {
            $user->assignRole('parent');
        } else if ($UserData->data['account_type'] == 'teacher') {
            $user->assignRole('teacher');
        } else if ($UserData->data['account_type'] == 'admin') {
            $user->assignRole('admin');
        } else if ($UserData->data['account_type'] == 'accountant') {
            $user->assignRole('accountant');
        }
    }

    /**
     * Gets the user's dashboard constant based on their role.
     * @return string
     */
    public static function getUserDashboardRouteConstant(): string
    {
        if (Auth::check()) {
            $user = Auth::user();
            if($user->hasRole('parent')){
                return RouteServiceProvider::PARENT;
            }
            else if ($user->hasRole('student')) {
                return RouteServiceProvider::STUDENT;
            }
            else if ($user->hasRole('teacher')) {
                return RouteServiceProvider::TUTOR;
            }
            else if ($user->hasRole('admin')) {
                return RouteServiceProvider::ADMINISTRATION;
            }
            else if ($user->hasRole('accountant')) {
                return RouteServiceProvider::ACCOUNTANT;
            }

        }
        return RouteServiceProvider::HOME;
    }
}
