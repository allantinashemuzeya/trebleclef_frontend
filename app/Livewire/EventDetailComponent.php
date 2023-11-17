<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class EventDetailComponent extends Component
{
    public mixed $event;
    public function render()
    {
        $events = Event::all();
        return view('livewire.event-detail-component', ['events'=> $events]);
    }
}
