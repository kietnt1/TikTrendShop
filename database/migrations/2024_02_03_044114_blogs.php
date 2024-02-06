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
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id_blog');
            $table->unsignedInteger('id_store')->nullable(false);
            $table->unsignedInteger('id_categories_blog')->nullable(false);
            $table->string('title', 255)->nullable(false);
            $table->text('content')->nullable(false);
            $table->tinyInteger('status')->default(1)->nullable(false); //0: ẩn, 1 hiện
            $table->text('image_arr')->nullable();
            $table->timestamps();

            $table->foreign('id_store')->references('id_store')->on('stores');
            $table->foreign('id_categories_blog')->references('id_categories_blog')->on('categories_blog');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};