<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AfiliadoCaja extends Model{
	protected $table = 'afiliados_caja';
	public function afiliado(){

		return $this->belongsTo('App\Afiliado', 'id_afiliado');
	}

	public function caja(){

		return $this->belongsTo('App\Caja', 'id_caja');
	}

}
