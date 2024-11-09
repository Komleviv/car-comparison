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
        Schema::create('car_configurations', function (Blueprint $table) {
            $table->id();
            $table->string('configuration_id', 50)->unique();
            $table->tinyInteger('configuration_doors_count')->nullable();
            $table->string('configuration_body_type', 50)->nullable();
            $table->string('configuration_notice', 50)->nullable();
            $table->string('generation_id', 50)->nullable();
            $table->timestamps();

            $table->foreign('generation_id')
                ->references('generation_id')
                ->on('car_generations')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_configurations');
    }
};
