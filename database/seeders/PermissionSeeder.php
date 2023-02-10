<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array of permissions
        $permissions = [
            [
                'name' => 'create',
                'status' => 1,
            ],
            [
                'name' => 'read',
                'status' => 1,
            ],
            [
                'name' => 'update',
                'status' => 1,
            ],
            [
                'name' => 'delete',
                'status' => 1,
            ],
            [
                'name' => 'restore',
                'status' => 1,
            ],
            [
                'name' => 'force delete',
                'status' => 1,
            ],
            [
                'name' => 'view',
                'status' => 1,
            ],
            [
                'name' => 'view any',
                'status' => 1,
            ],
            [
                'name' => 'view own',
                'status' => 1,
            ],
            [
                'name' => 'create own',
                'status' => 1,
            ],
            [
                'name' => 'update own',
                'status' => 1,
            ],
            [
                'name' => 'delete own',
                'status' => 1,
            ],
            [
                'name' => 'restore own',
                'status' => 1,
            ],
            [
                'name' => 'force delete own',
                'status' => 1,
            ],
            [
                'name' => 'view own',
                'status' => 1,
            ],
            [
                'name' => 'view any',
                'status' => 1,
            ],
            [
                'name' => 'view own',
                'status' => 1,
            ],
            [
                'name' => 'create own',
                'status' => 1,
            ],
            [
                'name' => 'update own',
                'status' => 1,
            ],
            [
                'name' => 'delete own',
                'status' => 1,
            ],
            [
                'name' => 'restore own',
                'status' => 1,
            ],
            [
                'name' => 'force delete own',
                'status' => 1,
            ],
            [
                'name' => 'view own',
                'status' => 1,
            ],
            [
                'name' => 'view any',
                'status' => 1,
            ],
            // Invoice permissions
            [
                'name' => 'view invoice',
                'status' => 1,
            ],
            [
                'name' => 'view any invoice',
                'status' => 1,
            ],
            [
                'name' => 'view own invoice',
                'status' => 1,
            ],
            [
                'name' => 'create invoice',
                'status' => 1,
            ],
            [
                'name' => 'create own invoice',
                'status' => 1,
            ],
            [
                'name' => 'update invoice',
                'status' => 1,
            ],
            [
                'name' => 'update own invoice',
                'status' => 1,
            ],
            [
                'name' => 'delete invoice',
                'status' => 1,
            ],
            [
                'name' => 'delete own invoice',
                'status' => 1,
            ],
            [
                'name' => 'restore invoice',
                'status' => 1,
            ],
            [
                'name' => 'restore own invoice',
                'status' => 1,
            ],
            [
                'name' => 'force delete invoice',
                'status' => 1,
            ],
            [
                'name' => 'force delete own invoice',
                'status' => 1,
            ],
            // Student management permissions
            [
                'name' => 'view student',
                'status' => 1,
            ],
            [
                'name' => 'view any student',
                'status' => 1,
            ],
            [
                'name' => 'view own student',
                'status' => 1,
            ],
            [
                'name' => 'create student',
                'status' => 1,
            ],
            [
                'name' => 'create own student',
                'status' => 1,
            ],
            [
                'name' => 'update student',
                'status' => 1,
            ],
            [
                'name' => 'update own student',
                'status' => 1,
            ],
            [
                'name' => 'delete student',
                'status' => 1,
            ],
            [
                'name' => 'delete own student',
                'status' => 1,
            ],
            [
                'name' => 'restore student',
                'status' => 1,
            ],
            [
                'name' => 'restore own student',
                'status' => 1,
            ],
            [
                'name' => 'force delete student',
                'status' => 1,
            ],
            [
                'name' => 'force delete own student',
                'status' => 1,
            ],
        ];

        // Loop through permissions array and create each permission
        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
