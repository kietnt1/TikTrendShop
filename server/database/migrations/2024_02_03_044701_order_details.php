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
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id_order_detail');
            $table->unsignedInteger('id_product_variation')->nullable(false);
            $table->unsignedInteger('id_order')->nullable(false);
            $table->integer('quantity')->nullable(false);
            $table->float('price')->nullable(false);

            $table->timestamps();

            $table->foreign('id_product_variation')->references('id_product_variation')->on('product_variations');
            $table->foreign('id_order')->references('id_order')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};