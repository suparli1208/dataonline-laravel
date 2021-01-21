<?php

use Illuminate\Database\Seeder;
use App\Aaws;

class AawsTableSeeder extends Seeder
{
    public function run()
    {
        Aaws::insert([
            'device_id'         => '201',
            'datetime'          => '2021-01-21 18:00',
            'temperature'       => '20.8',
            'humidity'          => '70',
            'solar_radiation'   => '80',
            'rainfall'          => '20',
            'air_pressure'      => '50',
            'wind_speed'        => '30.1',
            'wind_direction'    => '360',
            'soil_moisture'     => '27.5',
            'soil_temperature'  => '25.6',
            'leafwetnes'        => '50'

        ]);
    }
}
