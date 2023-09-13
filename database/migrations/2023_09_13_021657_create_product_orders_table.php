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
        Schema::create('product_orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('form_id')->nullable()->comment('訂單id');
            $table->bigInteger('product_id')->nullable()->comment('產品編號');
            $table->integer('qty')->nullable()->default()->comment('數量');
            $table->integer('price')->nullable()->default()->comment('金額');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_orders');
    }
};
