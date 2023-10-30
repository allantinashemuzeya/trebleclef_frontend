<?php

namespace App\Console\Commands;

use App\Http\Services\Lesson\Lesson;
use App\Http\Services\Subject\Subject;
use \App\Models\Lesson as LessonModel;
use Illuminate\Console\Command;
class UpdateLessons extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdateLessons';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update lessons from Drupal';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $subjects = \App\Models\Subject::all();
        foreach($subjects as $subject) {
            $api_lessons = (new Lesson())->getLessonsBySubject($subject->drupal_uuid);
            foreach($api_lessons as $api_lesson){
                $new_lesson = LessonModel::updateOrCreate(
                    ['drupal_uuid' => $api_lesson['id']],
                    [
                        'name' => $api_lesson['name'],
                        'drupal_uuid' => $api_lesson['id'],
                        'learningObjectives' => $api_lesson['learningObjectives'],
                        'overview' => $api_lesson['overview'],
                        'banner' => $api_lesson['banner'],
                        'subject' => $api_lesson['subject']['id'],
                        'tutorial' => $api_lesson['tutorial'],
                        'date' => $api_lesson['date'],
                        'supportingDocuments' => $api_lesson['supportingDocuments'],
                    ]
                );
                $new_lesson->save();
            }
        }        
        return Command::SUCCESS;
    }
}
