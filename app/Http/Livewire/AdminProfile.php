<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminProfile extends Component
{
    public $profilePicture;

    public function storeProfile(){

        dd($this->profilePicture);
    }
    public function render()
    {
        return view('livewire.admin-profile');
    }
}
