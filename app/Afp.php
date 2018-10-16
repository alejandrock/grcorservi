<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afp extends Model{
	public $table = 'apf';

	public function afiliado(){

		return $this->hasMany('App\AfiliadoAfp', 'id_afp');
	}
}
