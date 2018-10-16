<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model{
	
    protected $table = 'estados';

    public function incapacidad(){

    	return $this->hasOne('App\Incapacidad', 'id_estado');
    }
}
