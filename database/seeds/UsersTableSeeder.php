<?php


use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
   
    public function run()
    {
        User::insert([
            'name' => 'Suparli',
            'email' => 'admin@dataonline.co.id',
            'password' => Hash::make('mnisuper'),
        
        ]);
    }
}
