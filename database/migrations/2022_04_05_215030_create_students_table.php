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
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('cover_image')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('bio')->nullable();
            $table->string('gender')->nullable();
            $table->string('school_id')->nullable();
            $table->string('residential_address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('postal_address')->nullable();
            $table->string('grade')->nullable();
            $table->string('instrument')->nullable();
            $table->json('activities')->nullable()->after('grade');
            $table->string('cellphoneNumber')->nullable();
            $table->string('next_of_kin_fullName')->nullable();
            $table->string('next_of_kin_cellphoneNumber')->nullable();
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
        Schema::dropIfExists('students');
    }
};
