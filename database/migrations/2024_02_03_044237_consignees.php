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
        Schema::create('consignees', function (Blueprint $table) {
            $table->increments('id_consignees');
            $table->unsignedInteger('id_user')->nullable(false);
            $table->string('name', 50)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('phone', 13)->nullable();
            $table->tinyInteger('is_default')->nullable(false)->default(0); //0 là không mặc định, 1 là mặc định
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consignees');
    }
};