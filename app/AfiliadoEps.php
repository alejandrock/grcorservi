<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AfiliadoEps extends Model{
    protected $table = 'afiliados_eps';
    public function afiliado(){

    	return $this->belongsTo('App\Afiliado', 'id_afiliado');
    }
    public function eps(){
    
    	return $this->belongsTo('App\Eps', 'id_eps');
	}
}
