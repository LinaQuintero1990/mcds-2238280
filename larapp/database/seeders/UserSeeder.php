<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Metodo Insert
        DB::table('users')->insert([

        	'fullname' => 'Jeremias Springfield',

        	'email' => 'Jeremias@gmail.com',

        	'phone' => 3204561232,

        	'birthdate' => '1970-10-05',

        	'gender' => 'Male',

        	'address' => 'Avenida Siempre Viva 12',

        	'role' => 'Admin',

        	'password' => bcrypt ('admin'),
        ]);

        // Metodo ORM

        	$user= new User;

        	$user->fullname='Homero';

        	$user->email='homero@gmail.com';

        	$user->phone=311584423;

        	$user->birthdate='1980-11-15';

        	$user->gender='Male';

        	$user->address='avenida';

        	$user->role='Editor';

        	$user->password= bcrypt('editor');

        	$user ->save();

    }
}
