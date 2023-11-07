<?php

namespace App\Orchid\Layouts\Transactions;

use App\Models\Transaction;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class TransactionListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'transactions';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [

            TD::make('user name')->render(function (Transaction $transaction) {
                $user = $transaction->user;
                if(!isset($user)){
                    return 'User data lost';
                }
                return new Persona($user->presenter());
            })->sort(),

            TD::make('amount')->render(function (Transaction $transaction) {
                return 'R'. ($transaction->amount_in_cents / 100).'.00';
            })->sort(),

            TD::make('status')->render(function (Transaction $transaction) {
                return $transaction->status;
            })->sort(),

            TD::make('name'),
            TD::make('created_at', 'Created')->render(function (Transaction $transaction) {
                return $transaction->created_at->toDayDateTimeString();
            })->sort(),
        ];
    }
}
