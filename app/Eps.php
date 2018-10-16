<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eps extends Model{
	protected $table = 'eps';
    
    public function afiliado(){

    	return $this->hasMany('App\AfiliadoEps', 'id_eps');

    }
}
