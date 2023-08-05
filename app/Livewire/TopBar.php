<?php

namespace App\Livewire;

use Livewire\Component;

class TopBar extends Component
{
    public $menu;

    public function mount($menu = null)
    {
        $this->menu = $menu;
    }

    public function render()
    {
        return view('livewire.top-bar');
    }
}
