<?php

namespace App\Models;

use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Orchid\Platform\Models\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'permissions',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'permissions',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'permissions'          => 'array',
        'email_verified_at'    => 'datetime',
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'name',
        'email',
        'username',
        'permissions',
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'name',
        'email',
        'updated_at',
        'created_at',
    ];


    public function student(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    /**
     * Gets the user's dashboard based on their role. If they are not logged in,
     * they are redirected to the login page.
     * @param  $user
     * @return Application|Redirector|RedirectResponse
     */
    public static function getDashboard($user)
    {
        return redirect(RouteServiceProvider::PARENT);
    }

    public function raffleRegistrations(): HasMany
    {
        return $this->hasMany(Ruffle::class);
    }

    public function raffleTickets(): HasMany
    {
        return $this->hasMany(RaffleTicket::class);
    }
}
