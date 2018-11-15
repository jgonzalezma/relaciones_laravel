<?php

use Illuminate\Database\Seeder;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    	for ($i=0; $i < 5; $i++) { 
	        DB::table('empleados')->insert([
			'nombre' => str_random(8),
			'apellido1' => str_random(10),
			'apellido2' => str_random(10),
			'email' => str_random(7).'@gmail.com',
			'telefono' => '987654321',
			'departamento_id' => 2
		]);
	    }
	}
}