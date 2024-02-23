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
        Schema::create('likes', function (Blueprint $table) {
            $table->increments('id_like');
            $table->unsignedInteger('id_product')->nullable(false);
            $table->unsignedInteger('id')->nullable(false);
            $table->tinyInteger('is_like')->nullable(false)->default(0); //0 không like, 1 like
            $table->timestamps();

            $table->foreign('id_product')->references('id_product')->on('products');
            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};