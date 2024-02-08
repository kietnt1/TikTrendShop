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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id_category');
            $table->unsignedInteger('id_parent')->nullable(false);
            $table->string('name', 100)->nullable(false);
            $table->string('description', 255)->nullable();
            $table->tinyInteger('status')->nullable(false)->default(1); //0 ẩn, 1 hiện
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};