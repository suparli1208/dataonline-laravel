<?php

use Illuminate\Database\Seeder;
use App\Device;

class DevicesTableSeeder extends Seeder
{
    
    public function run()
    {
        Device::insert([
            'id' => '101',
            'device_name'       => 'AWS Meteo',
            'gsm_number'        => '085776653512',
            'owner'             => 'PT. Meteo Nusantara Instrument',
            'expired_package'   => '2021-01-21',
            'information'       => 'Tes',
            'image'             => 'asset\image.png'

        ]);

        Device::insert([
            'id' => '201',
            'device_name'      => 'AAWS Meteo',
            'owner'            => 'PT. Meteo Nusantara Instrument',
            'gsm_number'       => '085776653512',
            'expired_package'  => '2021-01-21',
            'information'      => 'Tes',
            'image'            => 'asset\image.png'

        ]);
    }
}
