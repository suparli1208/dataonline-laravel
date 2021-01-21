<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aws', function (Blueprint $table) {
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
        Schema::dropIfExists('aws');
    }
}
