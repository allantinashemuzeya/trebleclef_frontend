<?php

namespace App\Http\Livewire;

use App\Http\Services\Subject\Subject;
use Livewire\Component;

class Registration extends Component
{
    public $studentLevel = null;
    public $subjects = [];

    public function mount(){
        $this->subjects = (new Subject)->getAll();
    }

    public function render()
    {
        return view('livewire.registration');
    }

    public function change(){

        if($this->studentLevel !== null){

            $subjects = (new Subject)->getAll();

            foreach ($subjects as $subject){
                foreach($subject['student_levels'] as $student_level){
                    if($student_level['id'] === $this->studentLevel){
                        array_push($this->subjects, $subject);
                    }
                }
            }

        }

    }



}
