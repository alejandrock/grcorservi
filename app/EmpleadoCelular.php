<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpleadoCelular extends Model{
	
    protected $table = 'empleados_celulares';

    public function empleado(){

    	return $this->belongsTo('App\Empleado', 'id_empleado');
    }

}
