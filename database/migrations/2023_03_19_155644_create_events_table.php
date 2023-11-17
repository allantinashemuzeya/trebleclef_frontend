<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('drupal_uuid');
            $table->string('title');
            $table->string('sub_title');
            $table->text('event_description');
            $table->string('venue');
            $table->string('event_banner');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('venue_address')->nullable();
            $table->json('media')->nullable();
            $table->json('event_payment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
