<?php

namespace App\Livewire;

use Illuminate\Http\RedirectResponse;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.header');
    }

    //method to sign out
    public function signOut()
    {
        auth()->logout();
        return redirect()->route('login');
    }

}
