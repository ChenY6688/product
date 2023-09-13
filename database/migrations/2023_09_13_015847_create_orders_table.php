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
            $table->id();
            $table->timestamps();
            $table->string('order_id')->nullable()->default(null);
            $table->bigInteger('user_id')->nullable()->comment('用戶id')->comment('備註');
            $table->date('date')->nullable()->default(null)->comment('訂單編號');
            $table->string('phone')->nullable()->default(null)->comment('連絡電話');
            $table->string('menu')->nullable()->default(null)->comment('備註');
            $table->string('name')->nullable()->default('')->comment('姓名');
            $table->string('address')->nullable()->default('')->comment('地址');
            $table->integer('total')->nullable()->default()->comment('總金額');
            $table->integer('pay')->nullable()->default()->comment('匯款');
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
