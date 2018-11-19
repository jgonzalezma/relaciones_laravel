<?php

use Illuminate\Database\Seeder;

class EmpleadoProyectoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5 ; $i++) { 
            # code...
        
        DB::table('empleado_proyecto')->insert([
        		'empleado_id' => random_int(1, 5),
        		'proyecto_id' => random_int(1, 5),
        		'fechainicio' => new DateTime(),
        		'fechafin' => new DateTime()
        	]);
        }
    }
}