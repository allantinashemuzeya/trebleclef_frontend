<?php

namespace App\Orchid\Screens\raffles;

use Orchid\Screen\Screen;
use App\Models\RaffleTicket;
use App\Orchid\Layouts\raffles\RaffleTicketsListLayout;
use Orchid\Support\Facades\Layout;

class RaffleTicketsListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $tickets = RaffleTicket::filters()->defaultSort('created_at')->paginate();
        $winner = RaffleTicket::where('status', 'paid')->inRandomOrder()->first();
        return [
            'tickets' => $tickets,
            'winner' => $winner
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        // lets do a small lottery on the raffle tickets and show the winner just display the ticket number give it a winner look and feel
        return 'Raffle Tickets';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::view('components/v2/app-concept/raffle-winner', ['winner' => $this->query()['winner']]),
            RaffleTicketsListLayout::class,
        ];
    }
}
