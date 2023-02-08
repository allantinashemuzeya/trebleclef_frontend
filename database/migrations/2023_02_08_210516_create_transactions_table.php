<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('student_id');
            $table->unsignedBigInteger('payplan_id');
            $table->unsignedBigInteger('payment_id');
            $table->float('amount_in_cents');
            $table->string('currency')->default('ZAR');
            $table->string('status')->default('successful');
            $table->string('yoco_charge_id')->nullable();
            $table->string('yoco_payment_id')->nullable();
            $table->string('invoice_id');
            $table->string('yoco_livemode')->default('false');
            $table->string('card_brand')->nullable();
            $table->string('masked_card')->nullable();
            $table->string('fingerprint');
            $table->string('exp_month');
            $table->string('exp_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
