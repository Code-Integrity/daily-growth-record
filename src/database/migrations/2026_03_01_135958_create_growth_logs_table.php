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
        Schema::create('growth_logs', function (Blueprint $table) {
            $table->id();
            $table->string('subject');       // 📝 学習テーマ（例：Laravel 12 インフラ構築）
            $table->text('insight');         // 💡 得られた気づきや核心
            $table->integer('energy_level'); // 🔥 完了時のエナジー（1〜100）
            $table->string('tech_stack');    // 🛠️ 使用技術（PHP 8.4, Docker...）
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('growth_logs');
    }
};
