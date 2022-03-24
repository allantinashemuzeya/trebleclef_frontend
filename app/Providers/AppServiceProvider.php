<?php

namespace App\Providers;

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
        //
        $viewShare['studentLevels'] = (new StudentLevels())->getAll();
        view()->share($viewShare);

    }
}
