<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('user_types')->insert([
            'name' => 'student',
        ]);

        DB::table('user_types')->insert([
            'name' => 'tutor',
        ]);

        DB::table('user_types')->insert([
            'name' => 'super_admin',
        ]);

        DB::table('user_types')->insert([
            'name' => 'office',
        ]);
    }
}
