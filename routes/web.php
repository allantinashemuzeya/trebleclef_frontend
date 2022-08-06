<?php /** @noinspection SpellCheckingInspection */

/** @noinspection PhpMultipleClassDeclarationsInspection */

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
use App\Http\Controllers\TheZoneController;
use App\Http\Controllers\TutorInvitesController;
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
    Route::get('/dashboard/','index')->middleware(['auth'])->name('dashboard');
});

Route::controller(CommunicationController::class)->group(function(){
    Route::get('/communications', 'index')->middleware(['auth'])->name('communications');
    Route::get('/communications/{type}', 'communicationByType')->middleware(['auth'])->name('communication-by-type');
    Route::get('/communication/{id}', 'communication')->middleware(['auth'])->name('communication');
    Route::get('/student-of-the-week/', 'studentOfTheWeek')->middleware(['auth'])->name('student-of-the-week');
    Route::get('/foundations', 'foundations')->middleware(['auth'])->name('foundations');
});

Route::controller(ClassroomController::class)->group(function(){
    Route::get('/classroom/', 'index')->name('classroom')->middleware(['auth']);
    Route::get('/classroom/{studentLevel}/subjects', 'subjects')->middleware(['auth'])->name('subjects');
    Route::get('/classroom/subject/{subject}', 'subject')->middleware(['auth'])->name('subject');
    Route::get('/classroom/{subject}/lessons', 'lessons')->middleware(['auth'])->name('lessons');
    Route::get('/classroom/lesson/{lesson}/{subject}', 'lesson')->middleware(['auth'])->name('lesson');
});

Route::get('/calendar', [CalendarController::class, 'index'])->middleware(['auth'])->name('calendar');

Route::controller(ProfileController::class)->group(function(){
    Route::get('/profile', 'index')->middleware(['auth'])->name('profile');
    Route::post('/profile-update', 'updateProfile')->middleware(['auth'])->name('updateProfile');
});


Route::controller(EventsController::class)->group(function(){
    Route::get('/events/', [EventsController::class, 'index'])->middleware(['auth'])->name('events');
    Route::get('/event/{id}', [EventsController::class, 'event'])->middleware(['auth'])->name('event');
});

Route::controller(SitePagesController::class)->group(function(){
    Route::get('/networks', 'networks')->middleware(['auth'])->name('networks');
    Route::get('/gallery', 'gallery')->middleware(['auth'])->name('gallery');
    Route::get('/office', 'office')->middleware(['auth'])->name('office');
    Route::get('/chat', 'chat')->middleware(['auth'])->name('chat');
});

Route::controller(FeesProductsController::class)->group(function(){
    Route::get('/payfees', 'fees')->middleware(['auth'])->name('office-fees');
    Route::get('/payfees/{productId}', 'pay')->middleware(['auth'])->name('pay-fees');
    Route::post('/payfees/process-payment', 'chargeCard')->name('processPayment');
});

Route::controller(ChatApplication::class)->group(function(){
    Route::post('chat/', 'chatTutor')->name('chat-tutor');
});


Route::controller(TutorInvitesController::class)->group(function(){
    Route::get('/tutor_invite/{email_address}', 'index');
    Route::post('/tutor_invite/create', 'createTutor')->name('createTutor');
});

Route::controller(InvoicingController::class)->group(function(){
    Route::post('/generateInvoice', 'generateInvoice');
    Route::get('/previewInvoice/{invoice}', 'previewInvoice');
});


//The Zone

Route::controller(TheZoneController::class)->group(function () {
    Route::get('/thezone', 'index')->name('thezone');
});


Route::get('/logout', function(){
    Auth::logout();
    return to_route('dashboard');
})->name('logout');

require __DIR__.'/auth.php';
