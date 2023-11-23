<?php

namespace App\Console\Commands;

use App\Http\Services\SchoolFees\SchoolFees;
use App\Models\Product;
use Illuminate\Console\Command;

class UpdatePayPlans extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdatePayPlans';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Pay Plans or products from Drupal to Laravel';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $payPlans = (new SchoolFees())->getAll();
        $this->info('Updating Pay Plans');
        // updateOrCreate
        foreach($payPlans as $payPlan){
            $this->info('Updating Pay Plan: '.$payPlan['title']);
            Product::updateOrCreate(
                ['drupal_uuid' => $payPlan['id']],
                [
                    'title'             => $payPlan['title'],
                    'price'             => $payPlan['price'],
                    'price_for_parent'  =>  $payPlan['price_for_parent'], 
                    'price_for_sibling' => $payPlan['price_for_sibling'], 
                    'price_for_other'   => $payPlan['price_for_other'], 
                    'description'       => $payPlan['description'],
                    'type'              => $payPlan['type']
                ]
            );
        }
        return Command::SUCCESS;
    }
}
