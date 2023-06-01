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
        Schema::create('schools', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('drupal_uuid')->nullable();
            $table->string('name');
            $table->string('banner')->default('https://cms.trebleclefapp.co.za/sites/default/files/2022-12/Nova%20Logo.jpg');
            $table->string('city')->nullable();
            $table->foreignUuid('country')->nullable();
            $table->foreignUuid('province')->nullable();
            $table->string('postal_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
