<?php

// namespace App;

// use Illuminate\Auth\Authenticatable;
// use Zizaco\Entrust\Traits\EntrustUserTrait;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Auth\Passwords\CanResetPassword;
// use Illuminate\Foundation\Auth\Access\Authorizable;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
// use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
// use Eloquent;


// AuthenticatableContract,
//                                     AuthorizableContract,
//                                     CanResetPasswordContract{
//     use Authenticatable, Authorizable, CanResetPassword,

// class User extends Eloquent  {

//     use EntrustUserTrait;

//     protected $fillable = ['id_empleado', 'username', 'password', 'remember_token','descripcion','created_at', 'updated_at'];
//     protected $hidden = ['password', 'remember_token'];

//     protected $table = 'users';
//     public $timestamps = true;  
//     // protected $fillable = [ 'name', 'email', 'created_at', 'updated_at'];
//     // protected $hidden = ['password', 'remember_token'];

    
//     public function empleado(){

//         return $this->belongsTo('App\Empleado', 'id_empleado');
//     }


// }


// class User extends Model implements AuthenticatableContract,
//                                     AuthorizableContract,
//                                     CanResetPasswordContract{

//     use Authenticatable, Authorizable, CanResetPassword;
namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Database\Eloquent\SoftDeletes;




// class User extends Model implements AuthenticatableContract,
//                                     AuthorizableContract,
//                                     CanResetPasswordContract{

//     use Authenticatable;
//     use CanResetPassword;
//     use EntrustUserTrait;                                    
//     use Authorizable;


/*
class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract{
    use Authenticatable, Authorizable, CanResetPassword;

    use EntrustUserTrait {
        can as traitCan;
        hasRole as traitHasRole;
    }
    use SoftDeletes { SoftDeletes::restore insteadof EntrustUserTrait; }
                                   */

class User extends Model implements AuthenticatableContract,
                                    //AuthorizableContract,
                                    CanResetPasswordContract{
    use Authenticatable,
        //Authorizable,
        EntrustUserTrait,
        CanResetPassword;


    
    protected $fillable = ['id_empleado', 'username', 'password', 'remember_token','descripcion','created_at', 'updated_at'];
    protected $hidden = ['password', 'remember_token'];

    protected $table = 'users';
    public $timestamps = true;
    
    public function empleado(){

        return $this->belongsTo('App\Empleado', 'id_empleado');
    }

}

