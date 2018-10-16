<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpleadoTelefono extends Model{
    
    protected $table = 'empleados_telefonos';

    public function empleado(){

    	return $this->belongsTo('App\Empleado', 'id_empleado');
    }
}
