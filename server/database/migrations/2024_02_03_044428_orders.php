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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_order');
            $table->unsignedInteger('id_pay')->nullable(false);
            $table->unsignedInteger('id_user')->nullable(false);
            $table->unsignedInteger('id_store')->nullable(false);
            $table->string('payment_method', 100)->nullable(false);
            $table->date('date')->nullable(false);
            $table->string('note', 255)->nullable();
            $table->string('code', 255)->nullable(false);
            $table->tinyInteger('status')->nullable(false)->default(0); //0 ẩn, 1 hiện
            $table->string('email', 100)->nullable(false);
            $table->string('phone', 13)->nullable(false);
            $table->string('full_name', 100)->nullable(false);
            $table->timestamps();

            $table->foreign('id_pay')->references('id_pay')->on('pays');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_store')->references('id_store')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};