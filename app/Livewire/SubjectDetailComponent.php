<?php

namespace App\Livewire;

use App\Models\Lesson;
use Livewire\Component;

class SubjectDetailComponent extends Component
{
    public mixed $subject;
    public function render()
    {
        $lessons = Lesson::where('subject', $this->subject->drupal_uuid)->get();
        return view('livewire.subject-detail-component', [
            'lessons' => $lessons]);
    }
}
