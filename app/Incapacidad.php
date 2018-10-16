<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incapacidad extends Model{

	protected $table = 'incapacidades';

	public function afiliado(){

		return $this->belongsTo('App\Afiliado', 'id_afiliado');
	}
	public function sucursal(){

		return $this->belongsTo('App\Sucursal', 'id_sucursal');
	}
	public function razon(){

		return $this->belongsTo('App\RazonSocial', 'id_razon');
	}
	public function entidad(){

		return $this->belongsTo('App\Entidad', 'id_entidad');
	}
	public function estado(){

		return $this->belongsTo('App\Estado', 'id_estado');
	}
}
