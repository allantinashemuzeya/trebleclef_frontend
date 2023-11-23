<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\School;
use App\Models\EventRegistration;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EventDetailComponent extends Component
{
    public mixed $event;
    public $fullNameSurname = "Full Name";
    public $school = 'School';
    public $grade = "Grade";
    public $price_type = "student";
    public $numberOfTickets = 1;  
    public function render()
    {
        $events = Event::all();
        $schools = School::all();
        $data = [
            'events' => $events,
            'schools' => $schools
        ]; 

        return view('livewire.event-detail-component', $data);
    }
    
    public function registerForEvent(){
        $event_registration = new EventRegistration();
        $event_registration->user_id = Auth::user()->id; 
        $event_registration->full_name_surname = $this->fullNameSurname;
        $event_registration->event_id = $this->event->id;
        $event_registration->school_id = $this->school;
        $event_registration->grade = $this->grade;
        $event_registration->price_type = $this->price_type;
        $event_registration->number_of_tickets = $this->numberOfTickets;
        $event_registration->save();
    }
}
