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
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id_room');
            $table->unsignedInteger('id_store')->nullable(false);
            $table->unsignedInteger('id')->nullable(false);
            $table->string('name', 100)->nullable(false);
            $table->timestamps();

            $table->foreign('id')->references('id')->on('users');
            $table->foreign('id_store')->references('id_store')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};