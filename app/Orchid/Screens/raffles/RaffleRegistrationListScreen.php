<?php

namespace App\Orchid\Screens\raffles;

use App\Models\Ruffle;
use App\Orchid\Layouts\raffles\RaffleRegistrationListLayout;
use Orchid\Screen\Layout;
use Orchid\Screen\Screen;

class RaffleRegistrationListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $registrations = Ruffle::filters()->defaultSort('created_at')->paginate();
        return [
            'registrations' => $registrations
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'TCA Raffle Registrations';
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
            RaffleRegistrationListLayout::class
        ];
    }
}
