<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AfiliadoArl extends Model{
    protected $table = 'afiliados_arl';
    public $timestamps = true;


    public function afiliado(){

    	return $this->belongsTo('App\Afiliado', 'id_afiliado');
    }
    public function arl(){
    
    	return $this->belongsTo('App\Arl', 'id_arl');
	}
}
