<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Calendar extends Component
{

    public $calendar;
    public $title = 'Calendar';

    public function mount(){
        $this->calendar = (new \App\Http\Services\Calendar\Calendar())->getCalendar();
    }
    public function render(){
        return view('livewire.calendar');
    }
}
