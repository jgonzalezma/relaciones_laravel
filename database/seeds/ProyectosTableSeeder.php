<?php

use Illuminate\Database\Seeder;

class ProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    	for ($i=0; $i < 5; $i++) { 
	        DB::table('proyectos')->insert([
			'nombre' => str_random(8),
            'titulo' => str_random(8),
            'fechainicio' => '2018-11-11',
            'fechafin' => '2018-12-11',
            'horasestimadas' => 5,
            'empleado_id' => 1
		]);
	    }
	}
}
