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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('user_name', 100)->nullable(false);
            $table->string('full_name', 100)->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->string('phone', 13)->nullable(false);
            $table->string('password', 100)->nullable(false);
            $table->tinyInteger('very_email')->nullable(false)->default(0); //1 xác nhận, 0 chưa xác nhận
            $table->tinyInteger('rank')->nullable(false)->default(0); //0 đồng, 1 bạc, 2 vàng, 3 kim cương
            $table->tinyInteger('status')->nullable(false)->default(1); //0 ẩn, 1 hiện
            $table->tinyInteger('role')->nullable(false)->default(1); //0 admin, 1 user, 2 store
            $table->text('image')->nullable();
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