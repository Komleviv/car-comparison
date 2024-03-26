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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('short_text', 255)->nullable();
            $table->text('text');
            $table->string('img_link', 255)->nullable();
            $table->string('author', 100)->nullable();
            $table->integer('author_id')->nullable();
            $table->string('hashtags', 255)->nullable();
            $table->integer('likes')->nullable();
            $table->integer('views')->nullable();
            $table->boolean('is_active')->nullable()->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
