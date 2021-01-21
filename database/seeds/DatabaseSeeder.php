<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
        $this->call(DevicesTableSeeder::class);
        $this->call(AwsTableSeeder::class);
        $this->call(AawsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        
    }
}
