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
        Schema::create('chats', function (Blueprint $table) {
            $table->increments('id_chat');
            $table->unsignedInteger('id')->nullable(false);
            $table->unsignedInteger('id_store')->nullable(false);
            $table->unsignedInteger('id_room')->nullable(false);
            $table->text('content')->nullable(false);
            $table->timestamps();

            $table->foreign('id')->references('id')->on('users');
            $table->foreign('id_store')->references('id_store')->on('stores');
            $table->foreign('id_room')->references('id_room')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};