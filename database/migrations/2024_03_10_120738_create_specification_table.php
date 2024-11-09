<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new
class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_specification', function (Blueprint $table) {
            $table->id();
            $table->string('complectation_id', 50)->unique();
            $table->string('front-brake', 100)->nullable();
            $table->string('back-brake', 100)->nullable();
            $table->string('feeding', 100)->nullable();
            $table->string('volume-litres', 100)->nullable();
            $table->string('horse-power', 100)->nullable();
            $table->string('kvt-power', 100)->nullable();
            $table->string('rpm-power', 100)->nullable();
            $table->string('engine-type', 100)->nullable();
            $table->string('transmission', 100)->nullable();
            $table->string('drive', 100)->nullable();
            $table->string('volume', 100)->nullable();
            $table->string('time-to-100', 100)->nullable();
            $table->string('cylinders-order', 100)->nullable();
            $table->string('max-speed', 100)->nullable();
            $table->string('compression', 100)->nullable();
            $table->string('cylinders-value', 100)->nullable();
            $table->string('diametr', 100)->nullable();
            $table->string('piston-stroke', 100)->nullable();
            $table->string('engine-feeding', 100)->nullable();
            $table->string('engine-order', 100)->nullable();
            $table->string('gear-value', 100)->nullable();
            $table->string('moment', 100)->nullable();
            $table->string('petrol-type', 100)->nullable();
            $table->string('fuel-tank-capacity', 100)->nullable();
            $table->string('emission-euro-class', 100)->nullable();
            $table->string('valves', 100)->nullable();
            $table->string('weight', 100)->nullable();
            $table->string('wheel-size', 100)->nullable();
            $table->string('wheel-base', 100)->nullable();
            $table->string('front-wheel-base', 100)->nullable();
            $table->string('back-wheel-base', 100)->nullable();
            $table->string('front-suspension', 100)->nullable();
            $table->string('back-suspension', 100)->nullable();
            $table->string('height', 100)->nullable();
            $table->string('width', 100)->nullable();
            $table->string('length', 100)->nullable();
            $table->string('seats', 100)->nullable();
            $table->string('doors-count', 100)->nullable();
            $table->string('consumption-mixed', 100)->nullable();
            $table->string('clearance', 100)->nullable();
            $table->string('trunks-min-capacity', 100)->nullable();
            $table->string('trunks-max-capacity', 100)->nullable();
            $table->string('consumption-hiway', 100)->nullable();
            $table->string('consumption-city', 100)->nullable();
            $table->string('moment-rpm', 100)->nullable();
            $table->string('full-weight', 100)->nullable();
            $table->string('range-distance', 100)->nullable();
            $table->string('battery-capacity', 100)->nullable();
            $table->string('battery-type', 100)->nullable();
            $table->string('fuel-emission', 100)->nullable();
            $table->string('electric-range', 100)->nullable();
            $table->string('charge-time', 100)->nullable();
            $table->string('safety-rating', 100)->nullable();
            $table->string('safety-grade', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_specification');
    }
};
