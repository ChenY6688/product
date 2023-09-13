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
        Schema::table('product_orders', function (Blueprint $table) {
            $table->dropColumn('product_id');
            $table->string('name')->nullable()->default('')->comment('訂單商品名稱');
            $table->string('image')->nullable()->default('')->comment('訂單商品圖片');
            $table->text('desc')->nullable()->comment('訂單商品描述');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_orders', function (Blueprint $table) {
            //
        });
    }
};
