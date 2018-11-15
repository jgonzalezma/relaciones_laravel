<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function empleado(){
    	return $this->hasMany(Empleado::class);
    }
}