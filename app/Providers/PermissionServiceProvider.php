<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;

class PermissionServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Dashboard $dashboard): void
    {
        //
        $permissions = ItemPermission::group('transactions')
            ->addPermission('platform.transactions', 'Transactions');
        $dashboard->registerPermissions($permissions);
    }
}
