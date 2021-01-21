<?php

use Illuminate\Database\Seeder;
use App\Aws;

class AwsTableSeeder extends Seeder
{
    
    public function run()
    {
        Aws::insert([
            'device_id'         => '101',
            'datetime'          => '2021-01-21 18:00',
            'temperature'       => '20.8',
            'humidity'          => '70',
            'solar_radiation'   => '80',
            'rainfall'          => '20',
            'air_pressure'      => '50',
            'wind_speed'        => '30.1',
            'wind_direction'    => '360'

        ]);
    }
}
