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
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id_comment');
            $table->unsignedInteger('id_product')->nullable(false);
            $table->unsignedInteger('id')->nullable(false);
            $table->text('content')->nullable(false);
            $table->tinyInteger('status')->nullable(false)->default(1); //0 ẩn, 1 hiện
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
        Schema::dropIfExists('comments');
    }
};