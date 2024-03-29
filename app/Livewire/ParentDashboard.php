<?php

namespace App\Livewire;

use App\Http\Services\DrupalRestFeederService\RuffleFeeder;
use App\Http\Services\Home\Home;
use App\Http\Services\MusicQuotes\MusicQuotes;
use App\Http\Services\SchoolFees\SchoolFees;
use App\Models\DashboardNavigationCards;
use App\Models\Ruffle;
use App\Models\Product;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class ParentDashboard extends Component
{
    public string $fullNameSurname = '';
    public string $phoneNumber = '';

    public string $school = '';

    public string $grade = '';

    public mixed $raffle = ['title' => 'TCA Ruffle'];

    public int $defaultPrice = 40;

    public int $numberOfTickets = 1;

    
    public function render(): Factory|View|Application
    {
        return view('livewire.parent-dashboard',
            [
                'navigationCards' => DashboardNavigationCards::all(),
                'payPlan' => $this->getRuffle(),
            ]);
    }


    public function joinRuffle(): void
    {
        Ruffle::create([
            'user_id' => Auth::user()->id,
            'full_name_surname' => $this->fullNameSurname,
            'phone_number' => $this->phoneNumber,
            'school' => $this->school,
            'grade' => $this->grade,
            'status' => 'pending',
            'number_of_tickets' => $this->numberOfTickets,
        ]);

        $this->reset();
    }


    /**
     */
  public function getRuffle(): Product
  {
     return Product::where('type', 'raffles')->first();
    }
}
