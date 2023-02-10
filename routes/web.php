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

Route::controller(HomeController::class)->group(function(){
    Route::get('/dashboard/','index')->middleware(['auth', 'hasSubscription'])->name('dashboard');
});

Route::controller(CommunicationController::class)->group(function(){
    Route::get('/communications', 'index')->middleware(['auth', 'hasSubscription'])->name('communications');
    Route::get('/communications/{type}', 'communicationByType')->middleware(['auth', 'hasSubscription'])->name('communication-by-type');
    Route::get('/communication/{id}', 'communication')->middleware(['auth', 'hasSubscription'])->name('communication');
    Route::get('/student-of-the-week/', 'studentOfTheWeek')->middleware(['auth', 'hasSubscription'])->name('student-of-the-week');
    Route::get('/foundations', 'foundations')->middleware(['auth', 'hasSubscription'])->name('foundations');
});

Route::controller(ClassroomController::class)->group(function(){
    Route::get('/classroom/', 'index')->name('classroom')->middleware(['auth', 'hasSubscription']);
    Route::get('/classroom/{studentLevel}/subjects', 'subjects')->middleware(['auth', 'hasSubscription'])->name('subjects');
    Route::get('/classroom/subject/{subject}', 'subject')->middleware(['auth', 'hasSubscription'])->name('subject');
    Route::get('/classroom/{subject}/lessons', 'lessons')->middleware(['auth', 'hasSubscription'])->name('lessons');
    Route::get('/classroom/lesson/{lesson}/{subject}', 'lesson')->middleware(['auth', 'hasSubscription'])->name('lesson');
});

Route::get('/calendar', [CalendarController::class, 'index'])->middleware(['auth', 'hasSubscription'])->name('calendar');

Route::controller(ProfileController::class)->group(function(){
    Route::get('/profile', 'index')->middleware(['auth', 'hasSubscription'])->name('profile');
    Route::post('/profile-update', 'updateProfile')->middleware(['auth', 'hasSubscription'])->name('updateProfile');
});


Route::controller(EventsController::class)->group(function(){
    Route::get('/events/', [EventsController::class, 'index'])->middleware(['auth', 'hasSubscription'])->name('events');
    Route::get('/event/{id}', [EventsController::class, 'event'])->middleware(['auth', 'hasSubscription'])->name('event');
});

Route::controller(SitePagesController::class)->group(function(){
    Route::get('/networks', 'networks')->middleware(['auth', 'hasSubscription'])->name('networks');
    Route::get('/gallery', 'gallery')->middleware(['auth', 'hasSubscription'])->name('gallery');
    Route::get('/office', 'office')->middleware(['auth', 'hasSubscription'])->name('office');
    Route::get('/chat', 'chat')->middleware(['auth', 'hasSubscription'])->name('chat');
});

Route::controller(FeesProductsController::class)->group(function(){
    Route::get('/payfees', 'fees')->middleware(['auth'])->name('office-fees');
    Route::get('/payfees/{productId}', 'pay')->middleware(['auth'])->name('pay-fees');
    Route::post('/payfees/process-payment', 'chargeCard')->name('processPayment');
});

Route::controller(ChatApplication::class)->group(function(){
    Route::post('chat/', 'chatTutor')->middleware(['auth'])->name('chat-tutor');
});

Route::controller(TutorInvitesController::class)->group(function(){
    Route::get('/tutor_invite/{email_address}', 'index')->middleware(['auth']);
    Route::post('/tutor_invite/create', 'createTutor')->middleware(['auth'])->name('createTutor');
});

Route::controller(InvoicingController::class)->group(function(){
    Route::post('/generateInvoice', 'generateInvoice')->middleware(['auth']);
    Route::get('/previewInvoice/{invoice}', 'previewInvoice')->middleware(['auth']);
});

Route::controller(App\Http\Controllers\UserSubscriptionsController::class)->group(function(){
	Route::get('/subscription', 'index')->middleware(['auth'])->name('subscription');
    Route::post('/add-subscription', 'store')->middleware(['auth'])->name('attach_subscription_to_user');
});

Route::get('/logout', function(){
    Auth::logout();
    return to_route('dashboard');
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
    Route::get('/admin/login', 'login')->name('admin_login');
    Route::get('/admin/register', 'register')->name('admin_register');
    Route::get('/admin/dashboard', 'dashboard')->middleware(['auth','isAdmin'])->name('admin_dashboard');
    Route::get('/admin/profile', 'profile')->middleware(['auth','isAdmin'])->name('admin_profile');
});
