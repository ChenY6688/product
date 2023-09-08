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
        Schema::create('reply_to_messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('replay_message')->nullable()->comment('回覆訊息');
            $table->bigInteger('message_id')->nullable()->comment('訊息id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reply_to_messages');
    }
};
