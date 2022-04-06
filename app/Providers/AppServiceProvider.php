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
<<<<<<< HEAD
    {  
        $viewShare['studentLevels'] = (new StudentLevels())->getAll();    
=======
    {
        $viewShare['studentLevels'] = (new StudentLevels())->getAll();

>>>>>>> 1009b2033192c9a3ab8bb660c3c7bb681972b651
        view()->share($viewShare);
    }
}
