<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model{

	protected $fillable = ['cedula', 'primer_nombre', 'segundo_nombre', 'primer_apellido', 
						   'segundo_apellido', 'email','direccion', 'id_cargo',
						   'updated_at','created_at'];

	protected $table = 'empleados';
	public $timestamps = true;

	public function cargo(){

		return $this->belongsTo('App\Cargo', 'id_cargo');
	}

	public function user(){

        return $this->hasOne('App\User', 'id_empleado');
    }
    public function telefoFijo(){

        return $this->hasMany('App\EmpleadoTelefono', 'id_empleado');
    }
    public function celular(){

        return $this->hasMany('App\EmpleadoCelular', 'id_empleado');
    }


}
