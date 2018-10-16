<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RazonSocial extends Model{
  
	public $table = 'razon_social';

	public function incapacidad(){

		return $this->hasMany('App\Incapacidad', 'id_razon');
	}
}
