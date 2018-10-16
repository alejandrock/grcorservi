<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arl extends Model{
    
    protected $table = 'arl';

    public function afiliado(){

    	return $this->hasMany('App\AfiliadoArl');
	}
}
