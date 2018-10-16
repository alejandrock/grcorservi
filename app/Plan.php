<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model{

	protected $table = 'planes';
	
	public function afiliados(){

		return $this->belongsToMany('App\Afiliado', 'afilado_plan', 'id_plan', 'id_afiliado');
	}
	
    
}
