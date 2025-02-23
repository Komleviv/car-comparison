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
        Schema::create('car_marks', function (Blueprint $table) {
            $table->id();
            $table->string('mark_id', 50)->unique();
            $table->string('mark_name', 50);
            $table->string('mark_cyrillic_name', 100);
            $table->tinyInteger('mark_popular')->nullable();
            $table->string('mark_concern')->nullable();
            $table->string('mark_class', 50)->nullable();
            $table->string('mark_country', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_marks');
    }
};
