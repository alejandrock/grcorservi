<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroAfiliacion extends Model{
	protected $table = 'registros_afiliaciones';
    
    public function empleado(){

    	return $this->belongsTo('App\Empleado', 'id_empleado');
    }
    public function afiliado(){

    	return $this->belongsTo('App\Afiliado', 'id_afiliado');
    }
    
    public function empresa(){

    	return $this->belongsTo('App\Empresa', 'id_empresa');
    }
    public function estado_afiliado(){

        return $this->belongsTo('App\AfiliadoEstado', 'id_estado');
    }
 

}
