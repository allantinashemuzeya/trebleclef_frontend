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
<<<<<<<< HEAD:database/migrations/2023_03_19_155549_create_activities_table.php
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->constrained();
            $table->string('name');
            $table->string('description');
            $table->json('data')->nullable();
========
        Schema::create('provinces', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->foreignUuid('country_id');
>>>>>>>> v2:database/migrations/2023_04_30_133244_create_provinces_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2023_03_19_155549_create_activities_table.php
        Schema::dropIfExists('activities');
========
        Schema::dropIfExists('provinces');
>>>>>>>> v2:database/migrations/2023_04_30_133244_create_provinces_table.php
    }
};
