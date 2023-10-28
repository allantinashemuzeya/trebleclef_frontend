<?php

/** @noinspection PhpUndefinedNamespaceInspection */
/** @noinspection SpellCheckingInspection */
/** @noinspection PhpMultipleClassDeclarationsInspection */

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ChatApplication;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FeesProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoicingController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SitePagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrebleclefTVController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\TutorInvitesController;
use App\Http\Controllers\UserSubscriptionsController;
use App\Http\Controllers\DrupalRestFeederController;
use App\Models\User;
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
    return Auth::check() ? redirect('/dashboard') : redirect('/login');
});

Route::get('/home', function () {
    return Auth::check() ? redirect('/dashboard') : view('welcome');
})->name('home');


Route::get('/dashboard/',function (){
   return User::getDashboard(Auth::user());
})->middleware(['auth'])->name('dashboard');


Route::controller(ChatController::class)->group(function(){
    Route::get('/chat', 'index')->middleware(
        ['auth', 'hasSubscription'])->name('chat');
});


Route::controller(CommunicationController::class)->group(
    function(){
    Route::get('/communications', 'index')->middleware(
        ['auth', 'hasSubscription'])->name('communications');

    Route::get('/communications/{type}', 'communicationByType')
        ->middleware(['auth', 'hasSubscription'])->name(
            'communication-by-type');

    Route::get('/communication/{id}', 'communication')->middleware(
        ['auth', 'hasSubscription'])->name('communication');

    Route::get('/student-of-the-week/', 'studentOfTheWeek')->middleware(
        ['auth', 'hasSubscription'])->name('student-of-the-week');

    Route::get('/foundations', 'foundations')->middleware(
        ['auth', 'hasSubscription'])->name('foundations');
});
Route::controller(ClassroomController::class)->group(
    function(){
    Route::get('/classroom/', 'index')->name('classroom')
        ->middleware(['auth', 'hasSubscription']);

    Route::get('/classroom/{studentLevel}/subjects', 'subjects')
        ->middleware(['auth', 'hasSubscription'])->name('subjects');
    Route::get('/classroom/subject/{subject}', 'subject')

        ->middleware(['auth', 'hasSubscription'])->name('subject');
    Route::get('/classroom/{subject}/lessons', 'lessons')

        ->middleware(['auth', 'hasSubscription'])->name('lessons');
    Route::get('/classroom/lesson/{lesson}/{subject}', 'lesson')

        ->middleware(['auth', 'hasSubscription'])->name('lesson');
});
Route::controller(ProfileController::class)->group(function(){
    Route::get('/profile', 'index')->middleware(
        ['auth', 'hasSubscription'])->name('profile');
    Route::post('/profile-update', 'updateProfile')->middleware(
        ['auth', 'hasSubscription'])->name('updateProfile');
});
Route::controller(EventsController::class)->group(
    function(){
    Route::get('/events/', [EventsController::class, 'index'])
        ->middleware(['auth', 'hasSubscription'])->name('events');

    Route::get('/event/{id}', [EventsController::class, 'event'])
        ->middleware(['auth', 'hasSubscription'])->name('event');
});
Route::controller(SitePagesController::class)->group(
    function(){
    Route::get('/networks', 'networks')->middleware(
        ['auth', 'hasSubscription'])->name('networks');

    Route::get('/gallery', 'gallery')->middleware(
        ['auth', 'hasSubscription'])->name('gallery');

    Route::get('/office', 'office')->middleware(
        ['auth', 'hasSubscription'])->name('office');

});
Route::controller(FeesProductsController::class)->group(
    function(){
    Route::get('/payfees', 'fees')->middleware(['auth'])
        ->name('office-fees');

    Route::get('/payfees/{productId}', 'pay')->middleware(
        ['auth'])->name('pay-fees');

    Route::post('/payfees/process-payment', 'chargeCard')->name(
        'processPayment');
});
Route::controller(ChatApplication::class)->group(
    function(){
    Route::post('/', 'chatTutor')->middleware(
        ['auth'])->name('chat-tutor');
});
Route::controller(TutorInvitesController::class)->group(
    function(){
    Route::get('/tutor_invite/{email_address}', 'index')->middleware(
        ['auth']);

    Route::post('/tutor_invite/create', 'createTutor')->middleware(
        ['auth'])->name('createTutor');
});
Route::controller(InvoicingController::class)->group(
    function(){
    Route::post('/generateInvoice', 'generateInvoice')->middleware(
        ['auth']);

    Route::get('/previewInvoice/{invoice}', 'previewInvoice')->middleware(
        ['auth']);
});
Route::controller(UserSubscriptionsController::class)->group(
    function(){
	Route::get('/subscription', 'index')->middleware(
        ['auth'])->name('subscription');

    Route::post('/add-subscription', 'store')->middleware(
        ['auth'])->name('attach_subscription_to_user');
});
Route::controller(StudentController::class)->group(
    function(){
        Route::get('/student/dashboard', 'index')->middleware(
            ['auth'])->name('student-dashboard');
    }
);
Route::controller(ParentController::class)->group(function(){
    Route::get('/parents/dashboard', 'index')->middleware(
        ['auth'])->name('parent-dashboard');

    Route::get('/parents/profile', 'profile')->middleware(
        ['auth'])->name('parent-profile');

    Route::get('/school-calendar', \App\Livewire\Calendar::class);

    Route::get('/parents/student-manager', 'profile')->middleware(
        ['auth'])->name('student-manager');

    Route::get('/parents/invoice-manager', 'profile')->middleware(
        ['auth'])->name('parent-invoice-manager');

    Route::get('/parents/account-settings', 'profile')->middleware(
        ['auth'])->name('account-settings');
    }
);

Route::controller(TrebleclefTVController::class)->group(function(){
    Route::get('/tca_tv', 'index')->name('tca.tv');
});

Route::controller(TutorController::class)->group(
    function () {
        Route::get('/tutor/dashboard', 'index')->middleware(
            ['auth'])->name('tutor-dashboard');
    }
);

Route::get('/help', function(){
    return view('welcome');
})->name('help');

Route::get('/support', function(){
    return view('welcome');
})->name('support');

Route::get('/calendar', [CalendarController::class, 'index'])
    ->middleware(['auth', 'hasSubscription'])->name('calendar');

Route::get('/logout', function(){
    Auth::logout();
    return to_route('dashboard');
})->name('logout');

Route::get('/drupal', [DrupalRestFeederController::class, 'index']);
require __DIR__.'/auth.php';

