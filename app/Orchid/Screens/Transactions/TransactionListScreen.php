<?php

namespace App\Orchid\Screens\Transactions;

use App\Models\Transaction;
use App\Orchid\Layouts\Transactions\TransactionListLayout;
use Orchid\Screen\Screen;

class TransactionListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        $transactions = Transaction::filters()->defaultSort('created_at')->paginate();

        return [
            'transactions' => $transactions,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Transactions';
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
            TransactionListLayout::class
        ];
    }
}
