<?php

Route::get('total', function(){

	 $queries = DB::table('users')
	 		->join('empleados', 'users.id_empleado', '=', 'empleados.id')
            ->where('username', 'LIKE', 'd'.'%')
            ->take(5)->get();


        foreach ($queries as $query){
            $results[] = [ 'id' => $query->id, 'value' => $query->username, 'nombre' => $query->primer_nombre];
        }

        var_dump(Response::json($results));
        




});


Route::get('getUser/ajax/{id}',array('as'=>'getUser.ajax','uses'=>'UserController@getUser'));



Route::get('usuarios',[
	'as' => 'usuarios',
	'uses' =>'UserController@index'

]);


Route::get('testprd',[
	'as' => 'testprd',
	'uses' =>'UserController@autocomplete'

]);

Route::get('index_role',[
	'as' => 'index_role',
	'uses' =>'RoleController@index'

]);


Route::get('create_role',[
	'as' => 'create_role',
	'uses' =>'RoleController@create'

]);

Route::post('rol_store',[
	'as' => 'rol_store',
	'uses' =>'RoleController@store'

])->middleware(['auth']);


Route::post('edit_role',[
	'as' => 'edit_role',
	'uses' =>'RoleController@edit'

])->middleware(['auth']);

Route::post('update_role',[
	'as' => 'update_role',
	'uses' =>'RoleController@update'

])->middleware(['auth']);


Route::get('edit_role/{id}',[
	'as' => 'edit_role',
	'uses' =>'RoleController@edit'

])->middleware(['auth']);


Route::get('delete_role/{id}',[
	'as' => 'delete_role',
	'uses' =>'RoleController@delete'

])->middleware(['auth']);






// Route::get('test',[

// 	'as' => 'admin.index',
// 	'uses' => function() {

// 		return view('admin.index');
// 	}

// ]);



// Route::group(['middleware' => 'auth', ], function ()
// {
    
// 	Route::get('home', function () {

// 			return view('home');

// 	});

// });



// Route::get('empleado', function () {

// 			//return view('empleado');

// 	});


// Route::get('prueba', function () {



	// if(Auth::user()->hasRole('admin')){

	// 	var_dump("ADMIN");
	// }
	// else{
	// 	var_dump("fuck***");
	// }




	// $rol = App\Role::find(1);
	// $user = App\User::where('username', '=', 'admin')->first();
	// $user->attachRole($rol); // parameter can be an Role object, array, or id

	// // or eloquent's original technique
	// $user->roles()->attach($rol->id); // id only


	// var_dump('exitoso');


	//return view('afiliacion.import');

	// $admin = new App\Role();
	// $admin->name         = 'admin';
	// $admin->display_name = 'User Administrator'; // optional
	// $admin->description  = 'User is allowed to manage and edit other users'; 

	// if (!($admin->save())){

	// 	var_dump("Fail");
	// }
	// var_dump("Sucess");


// });

Route::group(['middleware' => ['auth']], function () {
 

	Route::get('home', function () {

			return view('home');

	});

	Route::get('importar_afiliado', [
    'as' => 'importar_afiliado', 
    'uses' => 'AfiliadoController@importar'
	]);

	Route::get('usuario_crear',[
		'as' => 'usuario_crear',
		'uses' =>'UserController@create'

	]);

});



// Route::group(['homea' => 'auth'], function () {
 	
//  	Route::get('home', function(){

// 		return View('home');

// 	});

	

  
//  });

// Route::group(['middleware' => 'auth'], function () {

// });

// Route::get('home', function () {

// 	return view('home');

// })->middleware(['auth']);


// Route::get('importar_afiliado',[
// 	'as' => 'importar_afiliado',
// 	'uses' =>'AfiliadoController@importar'

// ])->middleware(['auth']);




Route::get('exportar_afiliacion',[
	'as' => 'exportar_afiliacion',
	'uses' =>'AfiliadoController@exportar'

])->middleware(['auth']);


Route::get('editar/{id}',[
	'as' => 'editar',
	'uses' =>'AfiliadoController@edit'

])->middleware(['auth']);



// Route::get('home', function () {

// 	'as' => 'home',
// 	'uses' =>'HomeController@index',
// 	'middleware' => 'auth'
    	
//  });



Route::get('/', function () {

	return View('login');

});


Route::post('loginAttempt',[
	'as' => 'loginAttempt',
	'uses' =>'UserController@store'

]);


Route::post('importAfiliado',[
	'as' => 'importAfiliado',
	'uses' =>'AfiliadoController@importar'

]);


Route::post('mail', 'EmailController@store');




Route::get('login', function () {

	return View('login');

});



Route::get('empleados',[
	'as' => 'empleados',
	'uses' =>'EmpleadoController@index'

]);



Route::get('empleado_crear',[
	'as' => 'empleado_crear',
	'uses' =>'EmpleadoController@create'

]);


Route::get('afiliacion',[
	'as' => 'afiliacion',
	'uses' =>'AfiliadoController@index'
])->middleware(['auth']);


Route::get('logout',[
	'as' => 'logout',
	'uses' =>'UserController@logout'
])->middleware(['auth']);





Route::get('afiliado/{id}',[
	'as' => 'afiliado',
	'uses' =>'AfiliadoController@show'

])->middleware(['auth']);


Route::get('incapacidad',[
	'as' => 'incapacidad',
	'uses' =>'IncapacidadController@index'

])->middleware(['auth']);



Route::get('editar_afiliacion',[
	'as' => 'editar_afiliacion',
	'uses' =>'AfiliadoController@edit'
])->middleware(['auth']);


Route::get('crear_afiliacion',[
	'as' => 'crear_afiliacion',
	'uses' =>'AfiliadoController@create'
])->middleware(['auth']);



Route::post('crear_afiliado',[
	'as' => 'crear_afiliado',
	'uses' =>'AfiliadoController@store'

])->middleware(['auth']);



Route::post('actualizar_afiliado',[
	'as' => 'actualizar_afiliado',
	'uses' =>'AfiliadoController@update'
])->middleware(['auth']);





// // Route::get('/',[

// // 	'as' => '/',
// // 	'uses' =>'UserController@login'
// // ]);

// Route::post('loginAttempt',[
// 	'as' => 'loginAttempt',
// 	'uses' =>'UserController@store'

// ]);




	Route::get('/', function () {

		return View('login');
	});


	Route::get('/',[

		'as' => '/',
		'uses' =>'UserController@login'
	]);


	// Route::post('loginAttempt',[

	// 	'as' => 'loginAttempt',
	// 	'uses' =>'EmpleadoController@store'

	// ]);





 // Route::post('register', 'UserController@store');

// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');








 // Route::post('register', 'UserController@store');

// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');

