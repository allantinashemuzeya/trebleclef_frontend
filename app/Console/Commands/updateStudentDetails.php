<?php

namespace App\Console\Commands;

use App\Models\School;
use App\Models\Student;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class updateStudentDetails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updateStudentDetails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run this command to update the students table with the latest data from the CMS API';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $schools = School::all();
        $students = Student::all();
        // loop through the data and update the students table school column with the school id from the schools table if the uuid matches

        $this->info('Schools streaming in...');

        foreach ($students as $student) {
            $this->info($student->name);
            foreach ($schools as $school) {
                $this->info($school->name);
                if ($student->school == $school->uuid) {
                    $this->info('-------------------------------Y--A--Y-------------------------------------------');
                    $this->info($student->name . ' saved');
                    $student->school_id = $student->school;
                    $student->save();
                    $this->info($student->name . ' saved');
                }
            }
        }
        return CommandAlias::SUCCESS;
    }
}
