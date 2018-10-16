<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model{
    protected $table = 'beneficiarios';

    public function afiliado(){

    	return $this->belongsTo('App\Afiliado', 'id_afiliado');
    }
}
