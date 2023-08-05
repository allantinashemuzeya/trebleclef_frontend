<?php

namespace App\Livewire;

use App\Http\Services\Home\Home;
use App\Http\Services\MusicQuotes\MusicQuotes;
use App\Models\DashboardNavigationCards;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ParentDashboard extends Component
{
    public function render(): Factory|View|Application
    {
        return view('livewire.parent-dashboard',
            ['navigationCards' => DashboardNavigationCards::all()]);
    }
}
