<?php

namespace App\Console\Commands;

use App\Http\Services\Events\Events;
use App\Models\Event;
use Illuminate\Console\Command;

class updateEvents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdateEvents';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the system events';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $events = (new Events())->getAll();

        foreach ($events as $event) {
            Event::updateOrCreate(
                ['drupal_uuid' => $event['id']],
                [
                    'title' => $event['title'],
                    'sub_title' => $event['sub_title'],
                    'start_date' => $event['start_date'],
                    'end_date' => $event['end_date'],
                    'event_description' => $event['event_description'],
                    'event_banner' => $event['event_banner'],
                    'venue' => $event['venue'],
                    'venue_address' => $event['venue_address'],
                    'media' => $event['media'],
                    'event_payment' => $event['event_payment'],
                ]
            );
        }

        return Command::SUCCESS;

    }
}
