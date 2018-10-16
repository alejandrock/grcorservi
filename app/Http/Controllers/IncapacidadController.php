<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\Sucursal;
use App\Estado;
use App\RazonSocial;
use App\Entidad;
use App\Incapacidad;
use App\Afiliado;



class IncapacidadController extends Controller{

    public function index(){

	    $incapacidades = Incapacidad::all();
	    return View::make('incapacidad.index', compact('incapacidades'));
    }
    
    public function create(){


    	$sucursal = Sucursal::orderBy('sucursal')->pluck('sucursal', 'id');
    	$razon = 	RazonSocial::orderBy('razon')->pluck('razon', 'id');
    	$entidad = Entidad::orderBy('entidad')->pluck('entidad', 'id');
    	$estado =  Estado::orderBy('estado')->pluck('estado', 'id');    

		return View::make('incapacidad.create', compact('sucursal', 'razon', 'entidad', 'estado'));
    }

    public function store(Request $request){

    	$data = $request->all();

		$afiliado = Afiliado::where('cedula', '1143899094')->first();
		$sucursal = Sucursal::find($data['sucursal']);
		$razon = RazonSocial::find($data['razon']);
		$entidad = Entidad::find($data['entidad']);
		$estado = Estado::find($data['estado']);
		$incapacidad = new Incapacidad;
		$incapacidad->afiliado()->associate($afiliado);
		$incapacidad->sucursal()->associate($sucursal);
		$incapacidad->razon()->associate($razon);
		$incapacidad->entidad()->associate($entidad);
		$incapacidad->estado()->associate($estado);
		$incapacidad->numero_incapacidad = $data['numIncapacidad'];
		$incapacidad->fecha_recepcion = $data['fechaRecepcion'];
		$incapacidad->fecha_inicial = $data['fechaInicial'];
		$incapacidad->fecha_final = $data['fechaFinal'];
		$incapacidad->dias_autorizados = $data['diasAutorizados'];
		$incapacidad->incapacidad_arl = '1';
		$incapacidad->sub_total = $data['subTotal'];
		$incapacidad->observaciones = $data['observaciones'];
		
		if(!($incapacidad->save())){

			DB::rollBack();

		}

		var_dump('Se Registro la afiliación con éxito!!!');


    }
    public function show($id){

    	$incapacidad =  Incapacidad::find($id);
    	return View::make('incapacidad.show', compact('incapacidad'));


    }
}
