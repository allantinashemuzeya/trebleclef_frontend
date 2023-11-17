<?php

namespace App\Console\Commands;

use App\Http\Services\Home\Home;
use App\Http\Services\MusicQuotes\MusicQuotes;
use App\Models\DashboardNavigationCards;
use App\Models\TrebleclefTv;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class UpdateTvContent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdateTvContent';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the TV content';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $trebleClefTv = (new Home())->trebleClefTv();
        foreach ($trebleClefTv['content'] as $item){
            TrebleclefTv::updateOrCreate(
                ['item' => $item['file']],[
                'type' =>  $item['type'],
            ]);
        }
        return CommandAlias::SUCCESS;
    }
}
