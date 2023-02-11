<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class updateTransactions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:updateTransactions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run this command to update the transactions table with the latest data from the CMS API';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $invoices = \App\Models\InvoicesModel::all();
        $this->info('Invoices streaming in...');
        $transactions = \App\Models\Transactions::all();
        $this->info('Transactions streaming in...');
        $this->info('Transactions updating...');
        //go through transaction and the invoice and update the transation created_at to the invoice created_at
        foreach ($transactions as $transaction) {
            foreach ($invoices as $invoice) {
                if ($transaction->invoice_id == $invoice->id) {
                    $transaction->created_at = $invoice->created_at;
                    $transaction->save();
                    $this->info('transaction updated');
                }
            }
        }
        return CommandAlias::SUCCESS;
    }
}
