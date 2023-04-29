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
            $table->string('name');
            $table->string('banner')->default('https://cms.trebleclefapp.co.za/sites/default/files/2022-12/Nova%20Logo.jpg');
            $table->string('city')->default('Johannesburg');
            $table->string('country')->default('South Africa');
            $table->string('province')->default('Gauteng');
            $table->string('postal_code')->default('0000');
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
