<?php

namespace App\Orchid\Layouts\raffles;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Screen\Layouts\Persona;
use App\Models\RaffleTicket;

class RaffleTicketsListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'tickets';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('user name')->render(function (RaffleTicket $ticket) {
                $user = $ticket->user;
                if(!isset($user)){
                    return 'User data lost';
                }
                return new Persona($user->presenter());
            })->sort(),
            
            TD::make('ticket_number', 'Ticket Number')->render(function (RaffleTicket $ticket) {
                $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                return "<span style='font-size:3em; color: $color; font-weight: bold;'>$ticket->ticket_number</span>";
            })->filter(TD::FILTER_TEXT)->sort(),
            
          // lets show the status with a nice badge instead of the number
            TD::make('status', 'Status')->render(function (RaffleTicket $ticket) {
                $status = $ticket->status;
                $color = 'primary';
                if($status == 'pending'){
                    $color = 'warning';
                } else if($status == 'paid'){
                    $color = 'success';
                } else if($status == 'cancelled'){
                    $color = 'danger';
                }
                return "<span class='badge badge-$color'>$status</span>";
            })->filter()->sort()->align(TD::ALIGN_LEFT),
    
            TD::make('created_at', 'Created')->render(function (RaffleTicket $ticket) {
                return $ticket->created_at->toDateTimeString();
            })->filter()->sort()->align(TD::ALIGN_LEFT),
        ];
    }
}
