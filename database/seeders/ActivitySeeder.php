<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // go through student::getInstruments() and create an activity for each instrument

        $instruments = Student::getInstruments();
        foreach ($instruments as $instrument) {
            \App\Models\Activity::create([
                'name' => $instrument->name,
                'description' => 'This is a description for the ' . $instrument->name . ' activity.',
                'data' => json_encode($instrument),
            ]);
        }
    }
}
