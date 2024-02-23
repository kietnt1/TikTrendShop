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
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_user')->nullable(false);
            $table->string('name', 100)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->tinyInteger('status')->nullable(false)->default(1); //0 ẩn, 1 hiện
            $table->integer('follows')->nullable(false);
            $table->string('description', 255)->nullable();
            $table->text('image_arr')->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
