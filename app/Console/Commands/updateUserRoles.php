<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Orchid\Platform\Models\Role;

class updateUserRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updateUserRoles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::all();
        foreach ($users as $user){
            $role = Role::where('slug', 'student')->first();
            $user->addRole($role);
        }
        return Command::SUCCESS;
    }
}
