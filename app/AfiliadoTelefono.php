<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AfiliadoTelefono extends Model{
    protected $table = 'afiliados_telefonos';
    public function afiliado(){

    	return $this->belongsTo('App\Afiliado', 'id_afiliado');
    }
}
