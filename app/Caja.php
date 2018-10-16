<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caja extends Model{
    protected $table = 'cajas';

    public function afiliado(){

    	return $this->hasMany('App\AfiliadoCaja', 'id_caja');
    }

}
