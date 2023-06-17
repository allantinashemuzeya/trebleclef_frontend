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
        Schema::create('meetings', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('description');
            $table->string('location')->default('online');
            $table->string('type')->default('meeting');
            $table->string('status')->default('scheduled');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('timezone');
            $table->string('password')->nullable();
            $table->string('join_url')->nullable();
            $table->uuid('user_uuid');
            $table->string('host_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meetings');
    }
};
