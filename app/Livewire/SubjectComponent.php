<?php

namespace App\Livewire;

use App\Models\Subject;
use Livewire\Component;

class SubjectComponent extends Component
{
    public $studentLevel;
    public $emptySubjectsMessage = 'No subjects found for this level';
    public function render()
    {

        $subjects = Subject::all();
        $filteredSubjects = [];
        foreach ($subjects as $subject) {
            foreach ($subject->student_levels as $studentLevel) {
                if ($studentLevel['id'] == $this->studentLevel) {
                    $filteredSubjects[] = $subject;
                }
            }
       }
        return view('livewire.subject-component', [
            'subjects' => $filteredSubjects,
        ]);
    }
}
