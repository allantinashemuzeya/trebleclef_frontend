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
        Schema::table('event_registrations', function (Blueprint $table) {
            //
            $table->uuid('school_id');
            $table->string('full_name_surname'); 
            $table->string('grade');
            $table->integer('number_of_tickets');
            $table->string('price_type')->default('parent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_registrations', function (Blueprint $table) {
            //
        });
    }
};
