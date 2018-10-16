<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AfiliadoCelular extends Model{
    protected $table ='afiliados_celulares';
    public function afiliado(){

    	return $this->belongsTo('App\Afiliado', 'id_afiliado');
    }

}
