<?php

namespace App\Http\Controllers;

use App\Http\Helpers\HelperMethods;
use App\Http\Services\Events\Events;
use App\Models\Event;
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
        $title = 'Events';
        return view('events.index', HelperMethods::getGenericNavMenu(title: $title));
    }


    //Section Communication
    public function event(Event $event): Factory|View|Application
    {
        $title = $event->title . '| TCA Events';

        $data = HelperMethods::getGenericNavMenu(title: $title);
        $data['event'] = $event;

        return view('events.event-detail', $data);
    }

    /**
     * @return array
     */
    public function getEvents(): array
    {
        return (new Events())->getAll();
    }

}
