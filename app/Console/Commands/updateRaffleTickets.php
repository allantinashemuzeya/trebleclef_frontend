<?php

namespace App\Console\Commands;

use App\Http\Controllers\FeesProductsController;
use App\Models\Ruffle;

use Illuminate\Console\Command;

class updateRaffleTickets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updateRaffleTickets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the raffle tickets';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $rafleRegistrations = Ruffle::all(); 

        foreach ($rafleRegistrations as $raffleRegistration) {
            $tickets = (new FeesProductsController)->generateRaffleTickets($raffleRegistration);
            (new FeesProductsController)->saveRaffleTickets($tickets);
        }
        return Command::SUCCESS;
    }
}
