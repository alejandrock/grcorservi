<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AfiliadoEstado extends Model{
    protected $table = 'estados_afiliados';

    public function estado(){
        return $this->hasOne('App\RegistroAfiliacion', 'id_estado');
    }

    
}
