<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
  		'name' => 'Daniel de Sá',
  		'username' => 'danitw',
  		'email' => 'twz3xc21@gmail.com',
  		'estado' => 'São Paulo',
  		'pais' => 'São Paulo',
  		'fandom' => 'Jennie',
  		'stan' => 'Jennie',
  		'ultimate' => 'Jennie',
  		'bias' => 'Jennie',
  		'password' => Hash::make('daniel11'),
  	]);
  }
}
