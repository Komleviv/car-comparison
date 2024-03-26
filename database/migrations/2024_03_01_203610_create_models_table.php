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
        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->string('model_id', 50);
            $table->string('model_name', 50);
            $table->string('model_cyrillic_name', 100);
            $table->string('model_class', 5);
            $table->smallInteger('model_year_from');
            $table->smallInteger('model_year_to');
            $table->string('mark_id', 50);
            $table->timestamps();

            $table->foreign('mark_id')
                ->references('mark_id')
                ->on('marks')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('models');
    }
};
