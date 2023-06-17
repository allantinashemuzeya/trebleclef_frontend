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
<<<<<<<< HEAD:database/migrations/2023_03_19_205154_create_student_levels_table.php
        Schema::create('student_levels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->json('data')->nullable();
========
        Schema::create('cities', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->foreignUuid('province_id');
>>>>>>>> v2:database/migrations/2023_04_30_133735_create_cities_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2023_03_19_205154_create_student_levels_table.php
        Schema::dropIfExists('student_levels');
========
        Schema::dropIfExists('cities');
>>>>>>>> v2:database/migrations/2023_04_30_133735_create_cities_table.php
    }
};
