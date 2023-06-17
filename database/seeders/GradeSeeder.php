<?php

namespace Database\Seeders;

use App\Models\Grade;
use Database\Factories\GradeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $grades = [
            [
                'name' => 'Pre-School',
            ],
            [
                'name' => '1st Grade',
            ],
            [
                'name' => '2nd Grade',
            ],
            [
                'name' => '3rd Grade',
            ],
            [
                'name' => '4th Grade',
            ],
            [
                'name' => '5th Grade',
            ],
            [
                'name' => '6th Grade',
            ],
            [
                'name' => '7th Grade',
            ],
            [
                'name' => '8th Grade',
            ],
            [
                'name' => '9th Grade',
            ],
            [
                'name' => '10th Grade',
            ],
            [
                'name' => '11th Grade',
            ],
            [
                'name' => '12th Grade',
            ],
            [
                'name' => 'Adult Education',
            ]
        ];
        foreach ($grades as $grade) {
            Grade::create($grade);
        }
           
    }
}
