<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Empleado;
use App\Cargo;
use App\User;

use Validator;
use Auth;
use Session; 
use View;
use DB;


class UserController extends Controller{

    public function login(){

        return View('login');
    }

    public function index(){

        $usuarios = User::all();
        return View::make('usuarios.index', compact('usuarios'));
     }

    public function create(){

        $empleados = Empleado::lists('primer_nombre', 'id')->all();
        return View::make('usuarios.create', compact('empleados'));
    }

    public function store(Request $request){

        $data = $request->all();

        $validator = $this->validatorLogin($request->all());
        
        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        // $cargo = Cargo::find($request['cargo'])->first();

        if(is_null($request['empleado']) && (!empty($request['username']))&& (!empty($request['password']))){


            $credentials = array('username' => $request['username'], 'password' => $request['password']);

            if(Auth::attempt($credentials, true)){

                $tmp = Auth::login(Auth::user(), true);

                return redirect()->intended('home');

                // return Redirect::to('home');
            } else {

                return View::make('login')->with('login_errors', true);
            }
        }
        
        else{

            $validator = $this->validator($request->all());
            
            if ($validator->fails()) {
                $this->throwValidationException(
                    $request, $validator
                );
            }
            $this->createUser($data);
            
        }
    }


    protected function validatorLogin(array $data){

        return Validator::make($data, [
            'username' => 'required',
            'password' => 'required|min:6',
        ]);
    }

    protected function validator(array $data){

        return Validator::make($data, [
            'username' => 'required',
            'password' => 'required|min:6',
            'empleado' => 'required',
            '_token'=> 'required',
        ]);
    }

     protected function createUser(array $data){


        $user = User::create([
            'id_empleado' => (int)$data['empleado'],
            'password' => bcrypt($data['password']),
            'username' => $data['username'],
            'remember_token'=> $data['_token'],
            'descripcion' => $data['descripcion'],
        ]);
    
        $user->attachRole(Role::where('name','General'))->first();
        return $user;

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function autocomplete(){

        $username = Input::get('username');

        $results = array();

        $queries = DB::table('users')
            ->join('empleados', 'users.id_empleado', '=', 'empleados.id')
            ->where('username', 'LIKE', $username.'%')
            ->get();

        
        foreach ($queries as $query){
            $results[] = [ 'id' => $query->id, 'value' => $query->username, 'nombre' => $query->primer_nombre];
        }



        return Response::json($results);
    }


    public function getUser($id){

        $users = User::where('username', 'like', $id . '%')->get();
        return json_encode($users);   


    }  


    public function logout(){

        Auth::logout();
        Session::flush();
        return redirect()->intended('/');

    }
}
