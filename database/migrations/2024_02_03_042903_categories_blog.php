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
        Schema::create('categories_blog', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_store')->nullable(false);
            $table->string('name', 100)->nullable(false);
            $table->string('description', 255)->nullable();
            $table->tinyInteger('status')->nullable(false)->default(1); //0 ẩn, 1 hiện, 2 xóa
            $table->timestamps();

            $table->foreign('id_store')->references('id')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories_blog');
    }
};
