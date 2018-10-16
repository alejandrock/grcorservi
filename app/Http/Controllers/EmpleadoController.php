<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use App\Cargo;
use App\Empleado;
use Validator;
use Session;
use App\EmpleadoCelular;
use App\EmpresaTelefono;
use Illuminate\Support\Facades\Redirect;

class EmpleadoController extends Controller{
    
    public function index(){
        
        $empleados = Empleado::all();
         return View::make('empleados.index', compact('empleados'));
    }

    public function create(){

        $cargos =  Cargo::lists('cargo','id')->all();
         return View::make('empleados.create', compact('cargos'));
    }
    
    public function store(Request $request){

        $validator = $this->validator($request->all());
        
        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

       $data = $request->all();
       $empleado = Empleado::where('cedula','=',$data['cedula'])->first();

        if(!is_null($empleado)){

            Session::flash('warning', "El Empleado, ya se encuentra registrado en el sistema.") ;
            return Redirect::route('crear_empleado');
        }

        if($this->createEmployee($data)){

            Session::flash('success', "El Empleado, ha sido registrado correctamente en el sistema.");
            return Redirect::route('crear_empleado');
        }
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id) {
    }

    public function destroy($id){

    }
    protected function validator(array $data){

        return Validator::make($data, [
            'name' => 'required|max:255',
            'apellido' => 'required|max:255',
            'cedula' => 'required|max:255',
            'email' => 'required|email|max:255',
            'cargo' => 'required|max:255',
            'celular' => 'numeric',
            'fijo'  => 'numeric',
        ]);
    }

    protected function createEmployee(array $data){

        $nombres = explode(" ", $data['name']);
        $segundoNombre = array_pop($nombres);
        $primerNombre = implode(" ", $nombres);
        
        $apellidos = explode(" ", $data['apellido']);
        $primerApellido = array_pop($apellidos);
        $segundoApellido = implode(" ", $apellidos);

        $empleado = Empleado::create([
            'cedula' => $data['cedula'],
            'primer_nombre' => $primerNombre,
            'segundo_nombre' => $segundoNombre,
            'primer_apellido' => $primerApellido,
            'segundo_apellido' => $segundoApellido,
            'email' => $data['email'],
            'direccion' => $data['direccion'],
            'id_cargo' => $data['cargo'],
        ]);

        $telefonoFijo =  new EmpleadoTelefono;
        $telefonoFijo->empleado()->associate($empleado);
        $telefonoFijo->telefono_fijo = $data["fijo"];

        if(!($telefonoFijo->save())){
            DB::rollBack();
        }

        $telefonoCelular =  new EmpleadoCelular;
        $telefonoCelular->empleado()->associate($empleado);
        $telefonoCelular->telefono_celular = $data["fijo"];
        
        if(!($telefonoCelular->save())){
            DB::rollBack();
        }

        return true;
    }

}
