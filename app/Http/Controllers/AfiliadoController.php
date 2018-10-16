<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auth\RegisterController;
use App\Empresa;
use App\EmpresaCelular;
use App\EmpresaTelefono;
use App\Afiliado;
use App\AfiliadoCelular;
use App\AfiliadoTelefono;
use App\AfiliadoPlan;
use App\Beneficiario;
use App\RegistroAfiliacion;
use App\AfiliadoEps;
use App\AfiliadoArl;
use App\AfiliadoCaja;
use App\AfiliadoAfp;
use App\Plan;
use App\Eps;
use App\Arl;
use App\Caja;
use App\Empleado;
use App\Post;
use Session;
use Redirect;
use Mail;
use Excel;
use View;


class AfiliadoController extends Controller{


	public function index(){
		

		$afiliados = Afiliado::all();

		return View::make('afiliacion.index', compact('afiliados'));
	}


	protected function isValiDate(Request $request){

		if ($validator->passes()){

			return true;
		}
		$this->errors = $validator->errors();
		
		return false;
	}

	public function create(){
		
		$eps = Eps::orderBy('eps')->lists('eps', 'id');
		$caja = Caja::orderBy('caja')->lists('caja', 'id');
		$arl = Arl::orderBy('arl')->lists('arl', 'id');
		// $asesores = Empleado::selectRaw("CONCAT(primer_nombre, ' ', primer_apellido) as nombre_completo")->lists('nombre_completo', 'id');


		$asesores = Empleado::orderBy('primer_nombre')->lists('primer_nombre', 'id');


		return View::make('afiliacion.create', compact('eps', 'caja', 'arl', 'asesores'));
	}

	public function store(Request $request){

		$data = $request->all();
		$empresa = new Empresa;
		$empresa->nit = $data['nit'];
		$empresa->nombre = $data['empresa'];
		$empresa->direccion = $data['direccionEmpresa'];
		$empresa->correo = $data['correo'];
		$empresa->responsable = $data['responsable'];
		$empresa->observaciones = $data['observaciones'];

		if(!($empresa->save())){
			DB::rollBack();
		}

		$empresa_celular =  new EmpresaCelular;
		$empresa_celular->empresa()->associate($empresa);
		$empresa_celular->telefono_celular = $data['empresaCel'];

		if(!($empresa_celular->save())){
			DB::rollBack();
		}

		$empresa_telefono = new EmpresaTelefono;
		$empresa_telefono->empresa()->associate($empresa);
		$empresa_telefono->telefono_fijo = $data['empresaTel'];

		if(!($empresa_telefono->save())){
			DB::rollBack();
		}


        $nombres = explode(" ", $data['primerNombre']);
        $segundoNombre = array_pop($nombres);
        $primerNombre = implode(" ", $nombres);
        
        $apellidos = explode(" ", $data['primerApellido']);
        $primerApellido = array_pop($apellidos);
        $segundoApellido = implode(" ", $apellidos);


		$afiliado = new Afiliado;
		$afiliado->cedula = $data['cedula'];
		$afiliado->primer_nombre = $primerNombre;
		$afiliado->segundo_nombre = $segundoNombre;


		$afiliado->primer_apellido = $primerApellido;
		$afiliado->segundo_apellido = $segundoApellido;

		$afiliado->email = $data['email'];
		$afiliado->fecha_nacimiento = $data['fechaNacimiento'];
		$afiliado->direccion = $data['direccion'];
		$afiliado->barrio = $data['barrio'];
		$afiliado->salario = $data['salario'];
		$afiliado->actividad = $data['actividad'];
	   
	    if(!($afiliado->save())){

	    	DB::rollBack();
	    }

   		$afiliadoCelular = new AfiliadoCelular;
   		$afiliadoCelular->afiliado()->associate($afiliado);
   		$afiliadoCelular->telefono_celular = $data['celular'];
   		
   		if(!($afiliadoCelular->save())){

	    	DB::rollBack();
	    }

   		$afiliadoTelefono = new AfiliadoTelefono;
   		$afiliadoTelefono->afiliado()->associate($afiliado);
   		$afiliadoTelefono->telefono_fijo = $data['telefono'];
   		$afiliadoTelefono->save();
   		
   		if(!($afiliadoTelefono->save())){

	    	DB::rollBack();
	    }

   		$plan = Plan::where('codigo', '=', 1)->first();
   		$afiliado->planes()->attach($plan);


        $beNombres = explode(" ", $data['beprimerNombre']);
        $beSegundoNombre = array_pop($beNombres);
        $bePrimerNombre = implode(" ", $beNombres);
        
        $beApellidos = explode(" ", $data['beprimerApellido']);
        $bePrimerApellido = array_pop($beApellidos);
        $beSegundoApellido = implode(" ", $beApellidos);

		$beneficiario = new Beneficiario;
		$beneficiario->id_identificacion = $data['numIdentificacion'];

		$beneficiario->primer_nombre = $bePrimerNombre;
		$beneficiario->segundo_nombre = $beSegundoNombre;

		$beneficiario->primer_apellido = $bePrimerApellido;
		$beneficiario->segundo_apellido = $beSegundoApellido;


		$beneficiario->tipo_identificacion = $data['tipoIden'];
		$beneficiario->parentezco = $data['tipoPar'];
		$beneficiario->afiliado()->associate($afiliado);

		if(!($beneficiario->save())){
			DB::rollBack();

		}

		$registroAfiliacion =  new RegistroAfiliacion;
		$registroAfiliacion->afiliado()->associate($afiliado); 
		$registroAfiliacion->fecha_afiliacion = $data['fechaSolicitud'];
		// $registroAfiliacion->recibo = $data['recibo'];
		// $registroAfiliacion->pago = $data['pago'];
		$registroAfiliacion->bdua = $data['bdua'];
		$registroAfiliacion->id_empleado = $data['asesor'];

		if(!($registroAfiliacion->save())){

			DB::rollBack();
		}

		$afiliadoEps = new AfiliadoEps;
		$afiliadoEps->afiliado()->associate($afiliado);
		$afiliadoEps->id_eps = $data['eps'];
		
		if(!($afiliadoEps->save())){

			DB::rollBack();
		}

		$afiliadoArl = new AfiliadoArl;
		$afiliadoArl->afiliado()->associate($afiliado);
		$afiliadoArl->id_arl = $data['arl'];
		
		if(!($afiliadoArl->save())){
			DB::rollBack();
		}

		$afiliadoCaja = new AfiliadoCaja;
		$afiliadoCaja->afiliado()->associate($afiliado);
		$afiliadoCaja->id_caja = $data['caja'];
		if(!($afiliadoCaja->save())){

			DB::rollBack();
		}

		$afiliadoAfp = new AfiliadoAfp;
		$afiliadoAfp->afiliado()->associate($afiliado);
		$afiliadoAfp->id_afp = $data['afp'];
		if(!($afiliadoAfp->save())){

			DB::rollBack();
		}
		

		$destinatarios = array(
				'07.alejandro@gmail.com' => 'Alejandro Ramírez'
			);

		 Mail::send('emails.Afiliado.nuevo', compact('afiliado'), function($message) use ($destinatarios){
			$message->to($destinatarios)->subject('Nuevo Afiliado');

		});


        Session::flash('message', 'Se ha registrado el afiliado exitosamente');
        return redirect('home');
	}

	public function update(Request $request){

		$data = $request->all();
		$afiliado = Afiliado::find($data['afiliadoId']);
		$registros_afiliado = RegistroAfiliacion::find($afiliado->registroAfiliacion->id);
		$registros_afiliado->fecha_afiliacion = $data['fechaSolicitud'];


		if(!($registros_afiliado->save())){
			DB::rollBack();
		}

		$empresa = new Empresa;
		$empresa->nit = $data['nit'];
		$empresa->nombre = $data['empresa'];
		$empresa->direccion = $data['direccionEmpresa'];
		$empresa->correo = $data['correo'];
		$empresa->responsable = $data['responsable'];
		$empresa->observaciones = $data['observaciones'];

		if(!($empresa->save())){
			DB::rollBack();
		}

		$empresa_celular =  new EmpresaCelular;
		$empresa_celular->empresa()->associate($empresa);
		$empresa_celular->telefono_celular = $data['empresaCel'];

		if(!($empresa_celular->save())){
			DB::rollBack();
		}

		$empresa_telefono = new EmpresaTelefono;
		$empresa_telefono->empresa()->associate($empresa);
		$empresa_telefono->telefono_fijo = $data['empresaTel'];

		if(!($empresa_telefono->save())){
			DB::rollBack();
		}


        $nombres = explode(" ", $data['primerNombre']);
        $segundoNombre = array_pop($nombres);
        $primerNombre = implode(" ", $nombres);
        
        $apellidos = explode(" ", $data['primerApellido']);
        $primerApellido = array_pop($apellidos);
        $segundoApellido = implode(" ", $apellidos);


		$afiliado = new Afiliado;
		$afiliado->cedula = $data['cedula'];
		$afiliado->primer_nombre = $primerNombre;
		$afiliado->segundo_nombre = $segundoNombre;


		$afiliado->primer_apellido = $primerApellido;
		$afiliado->segundo_apellido = $segundoApellido;

		$afiliado->email = $data['email'];
		$afiliado->fecha_nacimiento = $data['fechaNacimiento'];
		$afiliado->direccion = $data['direccion'];
		$afiliado->barrio = $data['barrio'];
		$afiliado->salario = $data['salario'];
		$afiliado->actividad = $data['actividad'];
	   
	    if(!($afiliado->save())){

	    	DB::rollBack();
	    }

   		$afiliadoCelular = new AfiliadoCelular;
   		$afiliadoCelular->afiliado()->associate($afiliado);
   		$afiliadoCelular->telefono_celular = $data['celular'];
   		
   		if(!($afiliadoCelular->save())){

	    	DB::rollBack();
	    }

   		$afiliadoTelefono = new AfiliadoTelefono;
   		$afiliadoTelefono->afiliado()->associate($afiliado);
   		$afiliadoTelefono->telefono_fijo = $data['telefono'];
   		$afiliadoTelefono->save();
   		
   		if(!($afiliadoTelefono->save())){

	    	DB::rollBack();
	    }

   		$plan = Plan::where('codigo', '=', 1)->first();
   		$afiliado->planes()->attach($plan);


        $beNombres = explode(" ", $data['beprimerNombre']);
        $beSegundoNombre = array_pop($beNombres);
        $bePrimerNombre = implode(" ", $beNombres);
        
        $beApellidos = explode(" ", $data['beprimerApellido']);
        $bePrimerApellido = array_pop($beApellidos);
        $beSegundoApellido = implode(" ", $beApellidos);

		$beneficiario = new Beneficiario;
		$beneficiario->id_identificacion = $data['numIdentificacion'];

		$beneficiario->primer_nombre = $bePrimerNombre;
		$beneficiario->segundo_nombre = $beSegundoNombre;

		$beneficiario->primer_apellido = $bePrimerApellido;
		$beneficiario->segundo_apellido = $beSegundoApellido;


		$beneficiario->tipo_identificacion = $data['tipoIden'];
		$beneficiario->parentezco = $data['tipoPar'];
		$beneficiario->afiliado()->associate($afiliado);

		if(!($beneficiario->save())){
			DB::rollBack();

		}

		$registroAfiliacion =  new RegistroAfiliacion;
		$registroAfiliacion->afiliado()->associate($afiliado); 
		$registroAfiliacion->fecha_afiliacion = $data['fechaSolicitud'];
		// $registroAfiliacion->recibo = $data['recibo'];
		// $registroAfiliacion->pago = $data['pago'];
		$registroAfiliacion->bdua = $data['bdua'];
		$registroAfiliacion->id_empleado = $data['asesor'];

		if(!($registroAfiliacion->save())){

			DB::rollBack();
		}

		$afiliadoEps = new AfiliadoEps;
		$afiliadoEps->afiliado()->associate($afiliado);
		$afiliadoEps->id_eps = $data['eps'];
		
		if(!($afiliadoEps->save())){

			DB::rollBack();
		}

		$afiliadoArl = new AfiliadoArl;
		$afiliadoArl->afiliado()->associate($afiliado);
		$afiliadoArl->id_arl = $data['arl'];
		
		if(!($afiliadoArl->save())){
			DB::rollBack();
		}

		$afiliadoCaja = new AfiliadoCaja;
		$afiliadoCaja->afiliado()->associate($afiliado);
		$afiliadoCaja->id_caja = $data['caja'];
		if(!($afiliadoCaja->save())){

			DB::rollBack();
		}

		$afiliadoAfp = new AfiliadoAfp;
		$afiliadoAfp->afiliado()->associate($afiliado);
		$afiliadoAfp->id_afp = $data['afp'];
		if(!($afiliadoAfp->save())){

			DB::rollBack();
		}
		

		$destinatarios = array(
				'07.alejandro@gmail.com' => 'Alejandro Ramírez'
			);

		 Mail::send('emails.Afiliado.nuevo', compact('afiliado'), function($message) use ($destinatarios){
			$message->to($destinatarios)->subject('Nuevo Afiliado');

		});


        Session::flash('message', 'Se ha registrado el afiliado exitosamente');
        return redirect('home');
	}


	public function show($id){


		$afiliado = Afiliado::find($id);

		$eps = Eps::orderBy('eps')->lists('eps', 'id');
		$caja = Caja::orderBy('caja')->lists('caja', 'id');
		$arl = Arl::orderBy('arl')->lists('arl', 'id');

		$asesores = Empleado::orderBy('primer_nombre')->lists('primer_nombre', 'id');

		$afiliadoRegistro = RegistroAfiliacion::where('id_afiliado', '=', $id)->first();
		$afiliadoTelefono = AfiliadoTelefono::where('id_afiliado', '=', $id)->first();
		$afiliadoCelular = AfiliadoCelular::where('id_afiliado', '=', $id)->first();
		$afiliadoPlanes = Afiliado::find($id);
		$empresaTelefono = EmpresaTelefono::where('id_empresa', '=', $afiliadoRegistro->id_empresa)->first();
		$empresaCelular = EmpresaCelular::where('id_empresa', '=', $afiliadoRegistro->id_empresa)->first();


		return View::make('afiliacion.show', compact('afiliado','eps','asesores', 'caja', 'arl', 'asesores', 'afiliadoRegistro', 'afiliadoTelefono', 'afiliadoPlanes', 'afiliadoCelular', 'empresaTelefono', 'empresaCelular' ));

    }

    public function edit($id){

    	$afiliado = Afiliado::find($id);
		$eps = Eps::orderBy('eps')->lists('eps', 'id');
		$caja = Caja::orderBy('caja')->lists('caja', 'id');
		$arl = Arl::orderBy('arl')->lists('arl', 'id');

		$asesores = Empleado::orderBy('primer_nombre')->lists('primer_nombre', 'id');

		// $afiliadoEps  = AfiliadoEps::where('id_afiliado', '=', $id)->first();
		// $afiliadoCaja =	AfiliadoCaja::where('id_afiliado', '=', $id)->first();
		// $afiliadoArl =	AfiliadoArl::where('id_afiliado', '=', $id)->first();
		$afiliadoRegistro = RegistroAfiliacion::where('id_afiliado', '=', $id)->first();
		$afiliadoTelefono = AfiliadoTelefono::where('id_afiliado', '=', $id)->first();
		$afiliadoCelular = AfiliadoCelular::where('id_afiliado', '=', $id)->first();
			// $afiliadoPlanes = Afiliado::find($id)->planes()->orderBy('nombre')->get();
		$afiliadoPlanes = Afiliado::find($id);
		$empresaTelefono = EmpresaTelefono::where('id_empresa', '=', $afiliadoRegistro->id_empresa)->first();
		$empresaCelular = EmpresaCelular::where('id_empresa', '=', $afiliadoRegistro->id_empresa)->first();


		return View::make('afiliacion.edit', compact('afiliado','eps','asesores', 'caja', 'arl', 'asesores', 'afiliadoRegistro', 'afiliadoTelefono', 'afiliadoPlanes', 'afiliadoCelular', 'empresaTelefono', 'empresaCelular' ));


    }

    public function exportar(){

		$afiliados = Afiliado::all();

		Excel::loadView('admin.plantilla.export', compact('afiliados'))

				->setTitle('Afiliados')

				->sheet('Afiliados')

				->export('xlsx');


    }
    
    public function importar(){

    	var_dump("aaaaa");
    	die();



    }

}
