<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AfiliadoAfp extends Model{
    protected $table = 'afiliados_afp';

    public function afiliado(){

    	return $this->belongsTo('App\Afiliado', 'id_afiliado');
    }
    public function afp(){

    	return $this->belongsTo('App\Afp', 'id_afp');
    }
}
