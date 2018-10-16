<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
	protected $table = 'sucursales';
	
	public function incapacidad(){

		return $this->hasMany('App\Incapacidad', 'id_sucursal');
	}
}
