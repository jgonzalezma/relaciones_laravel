<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EloquentController extends Controller
{
	public function insert(Request $request){
		$empleado = new Empleado;

        $empleado->nombre = $request->nom_empleado;
        $empleado->apellido1 = $request->ap1_empleado;
        $empleado->apellido2 = $request->ap2_empleado;
        $empleado->email = $request->email_empleado;
        $empleado->telefono = $request->tf_empleado;
        $empleado->departamento_id =$request->departamento_id;

        $empleado->save();
	}
}
