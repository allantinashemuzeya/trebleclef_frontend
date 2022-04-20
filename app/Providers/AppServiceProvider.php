<?php

namespace App\Providers;

use App\Http\Services\Schools\School;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use App\Http\Services\StudentLevels\StudentLevels;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $viewShare['studentLevels'] = (new StudentLevels())->getAll();
        $viewShare['schools'] = (new School())->getAll();

        view()->share($viewShare);
    }
}
