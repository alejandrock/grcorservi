<?php 

namespace App;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole{

	protected $fillable=['name','display_name', 'descripcion'];
	
	public function permissions(){

		return $this->belongsToMany('App\Permission');
	}

}


// namespace App;

// use Zizaco\Entrust\EntrustRole;

// class Role extends EntrustRole{
	
// 	protected $table = 'roles';
// 	protected $fillable = [
// 	    'name',
// 	    'display_name',
// 	    'description',
// 	 ];

// }
