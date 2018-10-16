<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model{
    
    protected $table = 'empresas';
    public $timestamps = false;

    public function celular(){
    	return $this->hasMany('App\EmpresaCelular', 'id_empresa');
    }
    public function telefono(){
    	return $this->hasMany('App\EmpresaTelefono', 'id_empresa');
    }

    public function registroAfiliacion(){
        return $this->hasOne('App\RegistroAfiliacion', 'id_empresa');
    }
}
