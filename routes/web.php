<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return to_route('dashboard');
});


Route::controller(HomeController::class)->group(function(){
    Route::get('/dashboard','index')->middleware(['auth'])->name('dashboard');
});

Route::controller(CommunicationController::class)->group(function(){
    Route::get('/communications', 'index')->middleware(['auth'])->name('communications');
    Route::get('/communication/{id}', 'communication')->middleware(['auth'])->name('communication');
    Route::get('/student-of-the-week/', 'studentOfTheWeek')->middleware(['auth'])->name('student-of-the-week');
    Route::get('/events/', 'events')->middleware(['auth'])->name('events');
});

Route::controller(ClassroomController::class)->group(function(){
    Route::get('/classroom/', 'index')->name('classroom');
    Route::get('/classroom/{studentLevel}/subjects', 'subjects')->middleware(['auth'])->name('subjects');
    Route::get('/classroom/subject/{subject}', 'subject')->middleware(['auth'])->name('subject');
    Route::get('/classroom/{subject}/lessons', 'lessons')->middleware(['auth'])->name('lessons');
    Route::get('/classroom/lesson/{lesson}/{subject}', 'lesson')->middleware(['auth'])->name('lesson');
});

Route::get('/calendar', [CalendarController::class, 'index'])->middleware(['auth'])->name('calendar');


require __DIR__.'/auth.php';
