<?php

/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpUndefinedNamespaceInspection */
/** @noinspection SpellCheckingInspection */
/** @noinspection PhpMultipleClassDeclarationsInspection */

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ChatApplication;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FeesProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoicingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationProcessController;
use App\Http\Controllers\SitePagesController;
use App\Http\Controllers\TutorInvitesController;
use App\Http\Controllers\UserSubscriptionsController;
use App\Http\Controllers\DrupalRestFeederController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return to_route('dashboard');
});

//create a route group with auth middleware to protect the routes

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return 'hello';
    })->name('dashboard');
    Route::get('/registration', [RegistrationProcessController::class, 'show'])->name('registration-process');
});


Route::get('/logout', function(){
    Auth::logout();
    return to_route('login');
})->name('logout');


Route::get('/drupal', [DrupalRestFeederController::class, 'index']);
require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Administration Web Routes
|--------------------------------------------------------------------------
|
| Here is where we can register web routes for the administration section of the application.
| Which is only accessible to administrators and an entire different application.
*/
Route::controller(AdministrationController::class)->group(function (){

});
