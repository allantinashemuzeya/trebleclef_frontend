<?php

namespace App\Livewire;

use App\Models\StudentLevel;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ClassroomComponent extends Component
{
    public function render()
    {
        $studentLevels = StudentLevel::all();
        return view('livewire.classroom-component', [
            'studentLevels' => $studentLevels,
        ]);
    }
}
