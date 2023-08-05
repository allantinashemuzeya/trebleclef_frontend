<?php

namespace App\Livewire;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class TopBar extends Component
{
    public $menu;

    public function mount($menu = null): void
    {
        $this->menu = $menu;
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.top-bar');
    }
}
