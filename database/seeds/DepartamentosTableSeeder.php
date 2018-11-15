<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    	for ($i=0; $i < 5; $i++) { 
	        DB::table('departamentos')->insert([
			'codigo' => str_random(2),
			'nombre' => str_random(10)
		]);
	    }
	}
}
