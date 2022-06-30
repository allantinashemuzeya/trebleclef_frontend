<?php

namespace App\Http\Controllers;

use App\Http\Services\Events\Events;
use App\Models\Student;
use App\Models\Tutors;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    //
    public function index(): Factory|View|Application
    {

        if (Auth::user()->userType === 1) {
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        } else if (Auth::user()->userType === 2) {
            $currentUser = Tutors::where('userId', Auth::user()->id)->first();
        } else {
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }

        $events = $this->getEvents();


        return view('events.index', ['events' => $events, 'currentUser' => $currentUser

        ]);
    }


    //Section Communication
    public function event($id): Factory|View|Application
    {

        if (Auth::user()->userType === 1) {
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        } else if (Auth::user()->userType === 2) {
            $currentUser = Tutors::where('userId', Auth::user()->id)->first();
        } else {
            $currentUser = Student::where('user_id', Auth::user()->id)->first();
        }

        $event = (new Events())->getSingleEvent($id);
        $events = $this->getEvents();


        return view('events.event-detail',
            ['event' => $event, 'events' => $events,
                'currentUser' => $currentUser
            ]);
    }

    /**
     * @return array
     */
    public function getEvents(): array
    {
        return (new Events())->getAll();
    }

}
