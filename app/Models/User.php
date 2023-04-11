<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\Controllers\CrmAdminController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
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
    ];

    /**
     * Get the registration process record associated with the user.
     */
    public function registrationProcess(): HasOne
    {
        return $this->hasOne(RegistrationProcess::class);
    }

    /**
     * Get the tutor record associated with the user.
     */
    public function tutor(): HasOne
    {
        return $this->hasOne(Tutor::class);
    }

    /**
     * Get the student record associated with the user.
     */
    public function student(): HasOne
    {
        return $this->hasOne(Student::class);
    }

    /**
     * Get the parent record associated with the user.
     */
    public function parent(): HasOne
    {
        return $this->hasOne(Parent::class);
    }

    /**
     * Get the admin record associated with the user.
     */
    public function admin(): HasOne
    {
        return $this->hasOne(CrmAdminController::class);
    }

    /**
     * Get the super admin record associated with the user.
     */
    public function superAdmin(): HasOne
    {
        return $this->hasOne(SuperAdmin::class);
    }

    /**
     * Get the user's activities
     */
    public function activities(): HasOne
    {
        return $this->hasOne(UserActivity::class);
    }

    /**
     * Get the user's registration process status
     */
    public function registrationStatus(): HasOne
    {
        return $this->hasOne(RegistrationProcess::class);
    }
}
