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
        Schema::create('generations', function (Blueprint $table) {
            $table->id();
            $table->string('generation_id', 50)->unique();
            $table->string('generation_name', 50)->nullable();
            $table->smallInteger('generation_year_start')->nullable();
            $table->smallInteger('generation_year_stop')->nullable();
            $table->tinyInteger('generation_is_restyle')->nullable();
            $table->bigInteger('model_id')->nullable();
            $table->timestamps();

            $table->foreign('model_id')
                ->references('id')
                ->on('models')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generations');
    }
};
