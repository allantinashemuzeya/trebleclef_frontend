<?php

namespace App\Livewire;

use Livewire\Component;

class LessonComponent extends Component
{
    public mixed $lesson;
    public function render()
    { 
        $other_lessons = \App\Models\Lesson::where('subject', $this->lesson->subject)->get();
        return view('livewire.lesson-component', [
            'other_lessons' => $other_lessons,]);
    }
}
