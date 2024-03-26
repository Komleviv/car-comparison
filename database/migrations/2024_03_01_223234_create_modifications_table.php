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
        Schema::create('modifications', function (Blueprint $table) {
            $table->id();
            $table->string('complectation_id', 50)->unique();
            $table->integer('modification_offers_price_from')->nullable();
            $table->integer('modification_offers_price_to')->nullable();
            $table->string('modification_group_name', 100)->nullable();
            $table->string('configuration_id', 50)->nullable();
            $table->timestamps();

            $table->foreign('configuration_id')
                ->references('configuration_id')
                ->on('configurations')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modifications');
    }
};
