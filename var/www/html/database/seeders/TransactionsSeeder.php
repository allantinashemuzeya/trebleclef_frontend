<?php

namespace Database\Seeders;

use App\Http\Services\SchoolFees\SchoolFees;
use App\Models\InvoicesModel;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->getInvoices()->each(function ($invoice) {
            $pay_plan_title = $this->getPayPlanInfo($invoice->PayPlan);
            Transactions::factory()->create([
                'name' => $pay_plan_title,
                'user_id' => $invoice->UserId,
                'payplan_id' => $invoice->PayPlan,
                'amount_in_cents' => $this->getPayPlanInfo($invoice->PayPlan)['price'] * 100,
                'invoice_id' => $invoice->id,
            ]);
        });
    }

    public function getInvoices(): Collection
    {
        return InvoicesModel::all();
    }

    public function getPayPlanInfo($payplan_id){
        $pay_plans = (new SchoolFees())->getAll();
        foreach ($pay_plans as $payplan){
            if ($payplan['id'] == "29714a51-aa43-43d5-96b4-bcec054412eb"){
                 dd($payplan);
            }
        }
    }
}
