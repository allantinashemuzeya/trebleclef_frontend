<?php /** @noinspection PhpUndefinedFieldInspection */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->default('default');
            $table->string('email')->unique();
            $table->string('avatar')->default('');
            $table->string('messenger_color')->default('');
            $table->unsignedBigInteger('dark_mode')->default(0);
            $table->unsignedBigInteger('userType')->default(0);
            $table->unsignedBigInteger('role_id')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->json('data')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
