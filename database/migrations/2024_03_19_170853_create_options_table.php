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
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->string('complectation_id', 50)->unique();
            $table->string('alcantara', 100)->nullable();
            $table->string('black-roof', 100)->nullable();
            $table->string('combo-interior', 100)->nullable();
            $table->string('decorative-interior-lighting', 100)->nullable();
            $table->string('door-sill-panel', 100)->nullable();
            $table->string('driver-seat-electric', 100)->nullable();
            $table->string('driver-seat-memory', 100)->nullable();
            $table->string('driver-seat-support', 100)->nullable();
            $table->string('driver-seat-updown', 100)->nullable();
            $table->string('eco-leather', 100)->nullable();
            $table->string('electro-rear-seat', 100)->nullable();
            $table->string('fabric-seats', 100)->nullable();
            $table->string('folding-front-passenger-seat', 100)->nullable();
            $table->string('folding-tables-rear', 100)->nullable();
            $table->string('front-centre-armrest', 100)->nullable();
            $table->string('front-seat-support', 100)->nullable();
            $table->string('front-seats-heat', 100)->nullable();
            $table->string('front-seats-heat-vent', 100)->nullable();
            $table->string('hatch', 100)->nullable();
            $table->string('leather', 100)->nullable();
            $table->string('leather-gear-stick', 100)->nullable();
            $table->string('massage-seats', 100)->nullable();
            $table->string('panorama-roof', 100)->nullable();
            $table->string('passenger-seat-electric', 100)->nullable();
            $table->string('passenger-seat-updown', 100)->nullable();
            $table->string('rear-seat-heat-vent', 100)->nullable();
            $table->string('rear-seat-memory', 100)->nullable();
            $table->string('rear-seats-heat', 100)->nullable();
            $table->string('roller-blind-for-rear-window', 100)->nullable();
            $table->string('roller-blinds-for-rear-side-windows', 100)->nullable();
            $table->string('seat-memory', 100)->nullable();
            $table->string('seat-transformation', 100)->nullable();
            $table->string('sport-pedals', 100)->nullable();
            $table->string('sport-seats', 100)->nullable();
            $table->string('third-rear-headrest', 100)->nullable();
            $table->string('third-row-seats', 100)->nullable();
            $table->string('tinted-glass', 100)->nullable();
            $table->string('wheel-heat', 100)->nullable();
            $table->string('wheel-leather', 100)->nullable();
            $table->string('360-camera', 100)->nullable();
            $table->string('adj-pedals', 100)->nullable();
            $table->string('ashtray-and-cigarette-lighter', 100)->nullable();
            $table->string('auto-mirrors', 100)->nullable();
            $table->string('auto-park', 100)->nullable();
            $table->string('climate-control-1', 100)->nullable();
            $table->string('climate-control-2', 100)->nullable();
            $table->string('computer', 100)->nullable();
            $table->string('condition', 100)->nullable();
            $table->string('cooling-box', 100)->nullable();
            $table->string('cruise-control', 100)->nullable();
            $table->string('drive-mode-sys', 100)->nullable();
            $table->string('e-adjustment-wheel', 100)->nullable();
            $table->string('easy-trunk-opening', 100)->nullable();
            $table->string('electro-mirrors', 100)->nullable();
            $table->string('electro-trunk', 100)->nullable();
            $table->string('electro-window-back', 100)->nullable();
            $table->string('electro-window-front', 100)->nullable();
            $table->string('electronic-gage-panel', 100)->nullable();
            $table->string('front-camera', 100)->nullable();
            $table->string('keyless-entry', 100)->nullable();
            $table->string('multi-wheel', 100)->nullable();
            $table->string('multizone-climate-control', 100)->nullable();
            $table->string('park-assist-f', 100)->nullable();
            $table->string('park-assist-r', 100)->nullable();
            $table->string('power-latching-doors', 100)->nullable();
            $table->string('programmed-block-heater', 100)->nullable();
            $table->string('projection-display', 100)->nullable();
            $table->string('rear-camera', 100)->nullable();
            $table->string('remote-engine-start', 100)->nullable();
            $table->string('servo', 100)->nullable();
            $table->string('start-button', 100)->nullable();
            $table->string('start-stop-function', 100)->nullable();
            $table->string('steering-wheel-gear-shift-paddles', 100)->nullable();
            $table->string('wheel-configuration1', 100)->nullable();
            $table->string('wheel-configuration2', 100)->nullable();
            $table->string('wheel-memory', 100)->nullable();
            $table->string('wheel-power', 100)->nullable();
            $table->string('adaptive-light', 100)->nullable();
            $table->string('automatic-lighting-control', 100)->nullable();
            $table->string('drl', 100)->nullable();
            $table->string('heated-wash-system', 100)->nullable();
            $table->string('high-beam-assist', 100)->nullable();
            $table->string('laser-lights', 100)->nullable();
            $table->string('led-lights', 100)->nullable();
            $table->string('light-cleaner', 100)->nullable();
            $table->string('light-sensor', 100)->nullable();
            $table->string('mirrors-heat', 100)->nullable();
            $table->string('ptf', 100)->nullable();
            $table->string('rain-sensor', 100)->nullable();
            $table->string('windcleaner-heat', 100)->nullable();
            $table->string('windscreen-heat', 100)->nullable();
            $table->string('xenon', 100)->nullable();
            $table->string('abs', 100)->nullable();
            $table->string('airbag-curtain', 100)->nullable();
            $table->string('airbag-driver', 100)->nullable();
            $table->string('airbag-passenger', 100)->nullable();
            $table->string('airbag-rear-side', 100)->nullable();
            $table->string('airbag-side', 100)->nullable();
            $table->string('asr', 100)->nullable();
            $table->string('bas', 100)->nullable();
            $table->string('blind-spot', 100)->nullable();
            $table->string('collision-prevention-assist', 100)->nullable();
            $table->string('dha', 100)->nullable();
            $table->string('drowsy-driver-alert-system', 100)->nullable();
            $table->string('esp', 100)->nullable();
            $table->string('feedback-alarm', 100)->nullable();
            $table->string('glonass', 100)->nullable();
            $table->string('hcc', 100)->nullable();
            $table->string('isofix', 100)->nullable();
            $table->string('isofix-front', 100)->nullable();
            $table->string('knee-airbag', 100)->nullable();
            $table->string('laminated-safety-glass', 100)->nullable();
            $table->string('lane-keeping-assist', 100)->nullable();
            $table->string('night-vision', 100)->nullable();
            $table->string('power-child-locks-rear-doors', 100)->nullable();
            $table->string('traffic-sign-recognition', 100)->nullable();
            $table->string('tyre-pressure', 100)->nullable();
            $table->string('vsm', 100)->nullable();
            $table->string('alarm', 100)->nullable();
            $table->string('immo', 100)->nullable();
            $table->string('lock', 100)->nullable();
            $table->string('volume-sensor', 100)->nullable();
            $table->string('12v-socket', 100)->nullable();
            $table->string('220v-socket', 100)->nullable();
            $table->string('android-auto', 100)->nullable();
            $table->string('apple-carplay', 100)->nullable();
            $table->string('audiopreparation', 100)->nullable();
            $table->string('audiosystem-cd', 100)->nullable();
            $table->string('audiosystem-tv', 100)->nullable();
            $table->string('aux', 100)->nullable();
            $table->string('bluetooth', 100)->nullable();
            $table->string('entertainment-system-for-rear-seat-passengers', 100)->nullable();
            $table->string('music-super', 100)->nullable();
            $table->string('navigation', 100)->nullable();
            $table->string('usb', 100)->nullable();
            $table->string('voice-recognition', 100)->nullable();
            $table->string('wireless-charger', 100)->nullable();
            $table->string('ya-auto', 100)->nullable();
            $table->string('activ-suspension', 100)->nullable();
            $table->string('air-suspension', 100)->nullable();
            $table->string('reduce-spare-wheel', 100)->nullable();
            $table->string('spare-wheel', 100)->nullable();
            $table->string('sport-suspension', 100)->nullable();
            $table->string('14-inch-wheels', 100)->nullable();
            $table->string('15-inch-wheels', 100)->nullable();
            $table->string('16-inch-wheels', 100)->nullable();
            $table->string('17-inch-wheels', 100)->nullable();
            $table->string('18-inch-wheels', 100)->nullable();
            $table->string('19-inch-wheels', 100)->nullable();
            $table->string('20-inch-wheels', 100)->nullable();
            $table->string('21-inch-wheels', 100)->nullable();
            $table->string('22-inch-wheels', 100)->nullable();
            $table->string('body-kit', 100)->nullable();
            $table->string('body-mouldings', 100)->nullable();
            $table->string('duo-body-color', 100)->nullable();
            $table->string('paint-metallic', 100)->nullable();
            $table->string('roof-rails', 100)->nullable();
            $table->string('steel-wheels', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options');
    }
};
