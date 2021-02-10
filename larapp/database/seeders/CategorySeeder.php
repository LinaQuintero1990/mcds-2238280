<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use \App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('categories')->insert([

        	'name' => 'Juego 1',

        	'description' => 'Descripcion Juego 1',  

        	'image' => 'imgs/no-photo.png',     	
        	
        ]);

        
        
    }
}
