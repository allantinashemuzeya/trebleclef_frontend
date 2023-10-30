<?php

namespace App\Console\Commands;

use App\Http\Services\StudentLevels\StudentLevels;
use App\Models\StudentLevel;

use Illuminate\Console\Command;

class updateStudentLevels extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdateStudentLevels';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update student levels from Drupal to Trebleclef';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("Updating student levels...");

        $studentLevels  = (new StudentLevels())->getAll();

        foreach ($studentLevels as $studentLevel) {
            $this->info("Updating student level: " . $studentLevel['title']);

            $model = new StudentLevel();
            $studentLevel = $model->updateOrCreate(
                ['drupal_uuid' => $studentLevel['id']],
                [
                    'name' => $studentLevel['title'],
                    'background' => $studentLevel['banner'],
                ]
            );
            $studentLevel->save();
        }

        $this->info("Done!");
        return 0;
    }
}
