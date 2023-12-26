<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_tokens', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->references('id')->on('users')->cascadeOnDelete()->comment('ユーザID');
            $table->string('access_token', 64)->comment('アクセストークン');
            $table->dateTime('access_token_expired')->nullable()->comment('アクセストークン期限');
            $table->string('refresh_token', 64)->nullable()->comment('リフレッリフレッシュトークン期限');
            $table->dateTime('refresh_token_expired')->nullable()->comment('アクセストークン期限');
        });
        DB::statement("ALTER TABLE `user_tokens` COMMENT 'ユーザ トークン'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_token');
    }
};
