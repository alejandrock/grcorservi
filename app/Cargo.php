<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model{
    
   	protected $table = 'cargos';

	public function empleado(){

		return $this->hasOne('App\Empleado', 'id_cargo');

	}

}
