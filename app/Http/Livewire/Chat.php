<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Chat extends Component
{
    public $messageText;
    public $tutor;
    public $tutorDetails;
    public $currentUser;

    public function mount($tutor, $tutorDetails)
    {
        $this->tutor = $tutor;
        $this->tutorDetails = $tutorDetails;

    }


    public function render()
    {


        $messages = Message::all()->sortBy('id');

        return view('livewire.chat',compact('messages'));
    }

    public function sendMessage(){

        $message = new Message();
        $message->user_id = auth()->user()->id;
        $message->message_text = $this->messageText;
        $message->receiverId= $this->tutorDetails->id;

        $message->save();

        $this->reset('messageText');
    }
}
