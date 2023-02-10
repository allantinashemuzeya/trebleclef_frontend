<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
            [
                'name' => 'Administrator',
                'status' => 1,
            ],
            [
                'name' => 'Student',
                'status' => 1,
            ],
            [
                'name' => 'Teacher',
                'status' => 1,
            ],
            [
                'name' => 'Parent',
                'status' => 1,
            ],
            [
                'name' => 'Guest',
                'status' => 1
            ],
            [
                'name' => 'Super Administrator',
                'status' => 1,
            ],
            [
                'name' => 'Accountant',
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
