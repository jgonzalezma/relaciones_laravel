<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{	
	public function proyecto()
	{
    	return $this->hasMany(Proyecto::class);
	}

	public function departamento()
	{
    	return $this->belongsTo(Departamento::class);
	}
}