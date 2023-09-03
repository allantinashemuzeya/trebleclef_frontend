<?php

namespace App\Livewire;

use App\Http\Services\Home\Home;
use Livewire\Attributes\Layout;
use Livewire\Component;

class TrebleclefTV extends Component
{
    public function render()
    {
        $tvc = \App\Models\TrebleclefTv::all();
        return view('livewire.trebleclef-t-v', ['tvc' => $tvc]);
    }
}
