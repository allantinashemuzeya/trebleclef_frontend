<?php

namespace App\Console\Commands;

use App\Http\Services\Home\Home;
use App\Models\DashboardNavigationCards;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class UpdateDashboardNavigationCards extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdateDashboardNavigationCards';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the Dashboard navigation cards.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $navigationCards = (new Home())->navigationCards();

        foreach ($navigationCards as $card){
            DashboardNavigationCards::updateOrCreate(
                ['type' => $card['type']],[
               'cardTitle' => $card['cardTitle'],
               'cardType' => $card['cardType'],
               'background' => $card['background'],
            ]);
        }
        return CommandAlias::SUCCESS;
    }
}
