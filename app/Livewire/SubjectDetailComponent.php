<?php

namespace App\Livewire;

use Livewire\Component;

class SubjectDetailComponent extends Component
{
    public mixed $subject;
    public function render()
    {
        $lessons = \App\Models\Lesson::where('subject', $this->subject->drupal_uuid)->get();
        return view('livewire.subject-detail-component', [
            'lessons' => $lessons]);
    }
}
