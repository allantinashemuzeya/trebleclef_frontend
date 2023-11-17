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
        ['auth'])->name('chat');
});

Route::controller(CommunicationController::class)->group(
    function(){
    Route::get('/communications', 'index')->middleware(
        ['auth'])->name('communications');

    Route::get('/communications/{type}', 'communicationByType')
        ->middleware(['auth'])->name(
            'communication-by-type');

    Route::get('/communication/{id}', 'communication')->middleware(
        ['auth', 'hasSubscription'])->name('communication');

    Route::get('/student-of-the-week/', 'studentOfTheWeek')->middleware(
        ['auth'])->name('student-of-the-week');

    Route::get('/foundations', 'foundations')->middleware(
        ['auth'])->name('foundations');
});

Route::controller(ClassroomController::class)->group(
    function(){
    Route::get('/classroom/', 'index')->name('classroom')->middleware(['auth']);
    Route::get('/classroom/{studentLevel}/subjects', 'subjects')->middleware(['auth'])->name('subjects');
    Route::get('/classroom/subject/{subject}', 'subject')->middleware(['auth'])->name('subject');
    Route::get('/classroom/{subject}/lessons', 'lessons')->middleware(['auth'])->name('lessons');
    Route::get('/classroom/lesson/{lesson}/', 'lesson')->middleware(['auth'])->name('lesson');
});

Route::controller(ProfileController::class)->group(function(){
    Route::get('/profile', 'index')->middleware(
        ['auth'])->name('profile');
    Route::post('/profile-update', 'updateProfile')->middleware(
        ['auth'])->name('updateProfile');
});

Route::controller(EventsController::class)->group(
    function(){
    Route::get('/events/', [EventsController::class, 'index'])
        ->middleware(['auth'])->name('events');

    Route::get('/event/{event}', [EventsController::class, 'event'])
        ->middleware(['auth'])->name('event');
});

Route::controller(SitePagesController::class)->group(
    function(){
    Route::get('/networks',  'networks')->middleware(
        ['auth'])->name('networks');

    Route::get('/gallery', 'gallery')->middleware(
        ['auth'])->name('gallery');

    Route::get('/office', 'office')->middleware(
        ['auth'])->name('office');

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
    });

Route::controller(TrebleclefTVController::class)->group(function(){
    Route::get('/tca_tv', 'index')->name('tca.tv');
});

Route::controller(TutorController::class)->group(function () {
        Route::get('/tutor/dashboard', 'index')->middleware(
            ['auth'])->name('tutor-dashboard');
    });

Route::get('/help', function(){
 return redirect(route('dashboard'));
})->name('help');

Route::get('/support', function(){
    return redirect(route('dashboard'));
})->name('support');

Route::get('/calendar', [CalendarController::class, 'index'])->middleware(['auth'])->name('calendar');

Route::get('/logout', function(){
    Auth::logout();
    return to_route('dashboard');
})->name('logout');

Route::get('/drupal', [DrupalRestFeederController::class, 'index']);

require __DIR__.'/auth.php';

