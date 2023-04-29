<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id');
            $table->unsignedBigInteger('user_id');
            $table->uuid('invoice_uuid');
            $table->uuid('receipt_uuid');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('payment_reference')->default('School Fees');
            $table->date('payment_date');
            $table->time('payment_time');
            $table->string('note');
            $table->string('amount');
            $table->string('currency');
            $table->string('type');
            $table->string('channel')->default('online');
            $table->string('gateway')->default('yoko');
            $table->json('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
