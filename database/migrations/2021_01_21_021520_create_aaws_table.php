<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aaws', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('device_id');
            $table->dateTime('datetime');
            $table->decimal('temperature', $precision = 10, $scale = 1);
            $table->decimal('humidity', $precision = 10, $scale = 1);
            $table->decimal('solar_radiation', $precision = 10, $scale = 1);
            $table->decimal('rainfall', $precision = 10, $scale = 1);
            $table->decimal('air_pressure', $precision = 10, $scale = 1);
            $table->decimal('wind_speed', $precision = 10, $scale = 1);
            $table->decimal('wind_direction', $precision = 10, $scale = 1);
            $table->decimal('soil_moisture', $precision = 10, $scale = 1);
            $table->decimal('soil_temperature', $precision = 10, $scale = 1);
            $table->decimal('leafwetnes', $precision = 10, $scale = 1);
            $table->decimal('auxilary1', $precision = 10, $scale = 1)->nullable();
            $table->decimal('auxilary2', $precision = 10, $scale = 1)->nullable();
            $table->foreign('device_id')->references('id')->on('devices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aaws');
    }
}
