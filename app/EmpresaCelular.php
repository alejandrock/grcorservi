<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class EmpresaCelular extends Model{

	protected $table = 'empresas_celular';
	public $timestamps = false;
	public function empresa(){

		return $this->belongsTo('App\Empresa', 'id_empresa');
	}
}
