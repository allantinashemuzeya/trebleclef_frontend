<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class EventsComponent extends Component
{
    public function render()
    {
        $events = Event::all();
        return view('livewire.events-component', ['events' => $events]);
    }
}
