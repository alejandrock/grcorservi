<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaTelefono extends Model{
	protected $table = 'empresas_telefono';
	public $timestamps = false;

	public function empresa(){

		return $this->belongsTo('App\Empresa', 'id_empresa');
	}
}
