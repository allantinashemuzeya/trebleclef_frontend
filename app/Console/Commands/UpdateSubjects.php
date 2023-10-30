<?php

namespace App\Console\Commands;

use App\Http\Services\Subject\Subject;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class UpdateSubjects extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdateSubjects';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update subjects from Drupal to Trebleclef';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $subjects = (new Subject)->getAll();

        foreach ($subjects as $subject) {
            $this->info("Updating subject: " . $subject['name']);

            $model = new \App\Models\Subject();
            $model->updateOrCreate(
                ['drupal_uuid' => $subject['id']],
                [
                    'name' => $subject['name'],
                    'sub_intro' => $subject['sub_intro'],
                    'banner' => $subject['banner'],
                    'slug' => str_replace(' ','-', $subject['name']),
                    'overview' => $subject['overview'],
                    'student_levels' => $subject['student_levels'],
                ]
            );
            $model->save();
        }
        $this->info("Done!");
        return Command::SUCCESS;
    }
}
