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
        Schema::create('follows', function (Blueprint $table) {
            $table->increments('id_follow');
            $table->unsignedInteger('id_store')->nullable(false);
            $table->unsignedInteger('id')->nullable(false);
            $table->tinyInteger('is_follow')->nullable(false)->default(0); //0 không follow, 1 follow, default 0
            $table->timestamps();

            $table->foreign('id_store')->references('id_store')->on('stores');
            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follows');
    }
};