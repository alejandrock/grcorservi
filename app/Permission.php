<?php 
namespace App;

use Zizaco\Entrust\EntrustPermission;


class Permission extends EntrustPermission{

	protected $table = 'permissions';
	public $timestamps = true;
	protected $fillable = [
	    'name',
	    'display_name',
	    'description'
	 ];

	 public function roles(){

		return $this->belongsToMany('App\Role');

	}

}


// namespace App;

// use Zizaco\Entrust\EntrustPermission;

// class Permission extends EntrustPermission{

// 	protected $table = 'permissions';
// 	protected $fillable = [
// 	    'name',
// 	    'display_name',
// 	    'description',
// 	 ];

// }