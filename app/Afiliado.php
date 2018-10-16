<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model{
    protected $table = 'afiliados';
    
	public function planes(){

		return $this->belongsToMany('App\Plan','afiliado_plan', 'id_afiliado', 'id_plan');
	}
	public function beneficiario(){
		return $this->hasMany('App\Beneficiario', 'id_afiliado');
	}
	public function registroAfiliacion(){
		return $this->hasOne('App\RegistroAfiliacion', 'id_afiliado');
	}

	public function caja(){
        return $this->hasMany('App\AfiliadoCaja', 'id_afiliado');
    }
    
    public function afp(){
        return $this->hasMany('App\AfiliadoAfp', 'id_afp');
    }

    public function arl(){
        return $this->hasMany('App\AfiliadoArl', 'id_arl');
    }

    public function eps(){
        return $this->hasMany('App\AfiliadoEps', 'id_eps');
    }
    
    public function celular(){
        return $this->hasMany('App\AfiliadoCelular', 'id_afiliado');
    }
    public function telefono(){
        return $this->hasMany('App\AfiliadoTelefono', 'id_afiliado');
    }
    public function incapacidad(){

        return $this->hasMany('App\Incapacidad', 'id_afiliado');
    }

    public function estado(){
        return $this->hasOne('App\RegistroAfiliacion', 'id_estado');
    }


}
