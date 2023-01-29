<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *  "target_id": 23,
     *  "target_type": "node",
     *  "target_uuid": "1b1b6045-a9d2-4339-b561-4249d727098e",
     *  "url": "/node/23"
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('target_id');
            $table->string('target_type');
            $table->string('target_uuid');
            $table->string('url');
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
        Schema::dropIfExists('schools');
    }
};
