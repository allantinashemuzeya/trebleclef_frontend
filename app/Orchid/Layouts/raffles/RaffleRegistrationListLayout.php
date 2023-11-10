<?php

namespace App\Orchid\Layouts\raffles;

use App\Models\Ruffle;
use App\Models\Transaction;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class RaffleRegistrationListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'registrations';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('user name')->render(function (Ruffle $registration) {
                $user = $registration->user;
                if(!isset($user)){
                    return 'User data lost';
                }
                return new Persona($user->presenter());
            })->sort(),
            TD::make('full_name_surname', 'Full Name')->filter(TD::FILTER_TEXT)->sort(),
            TD::make('school')->filter()->sort(),
            TD::make('number_of_tickets', 'Number of Tickets')->sort(),
            TD::make('grade')->filter()->sort(),
            TD::make('created_at', 'Created')->render(function (Ruffle $ruffle) {
                return $ruffle->created_at->toDateTimeString();
            })->filter()->sort(),
        ];
    }
}
