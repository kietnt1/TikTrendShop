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
        Schema::create('discounts', function (Blueprint $table) {
            $table->increments('id_discount');
            $table->string('name', 100)->nullable(false);
            $table->integer('quantity')->nullable(false);
            $table->string('code', 100)->nullable(false);
            $table->float('discount_value')->nullable(false);
            $table->tinyInteger('is_percent')->nullable(false); //0 là giảm theo %, 1 giảm theo số tiền
            $table->date('start_date')->nullable(false);
            $table->date('end_date')->nullable(false);
            $table->text('appplicable_products')->nullable(false);
            $table->text('appplicable_categories')->nullable(false);
            $table->float('min_order_value')->nullable(false);
            $table->float('maximum_distance')->nullable(false);
            $table->tinyInteger('user_rank')->nullable(false); //0 đồng, 1 bạc, 2 vàng, 3 kim cương, 4 toàn bộ
            $table->text('other_conditions')->nullable();
            $table->tinyInteger('status')->nullable(false)->default(1); //0 ẩn, 1 hiện
            $table->tinyInteger('is_stores')->nullable(false); //0 là mã của admin, 1 là mã của store
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};