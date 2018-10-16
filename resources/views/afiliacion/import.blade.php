@extends('layouts.app')
@section('content')


@section('titulo')

Importar

@stop

	<div class="container">
		<div class="row justify-content-center">
	   		<div class="col-10">

				<div class="panel panel-default">

					<div class="panel-heading"><i class="fa fa-upload"></i> Formulario de archivo <a href="{{ URL::previous() }}" class="btn btn-default btn-xs pull-right"><i class="fa fa-arrow-left"></i> Atras</a></div>

					<div class="panel-body">

							<div class="alert alert-info">

								<h4>Nota</h4>

								<p>La plantilla para importar empleados puede descargarla en este <a href="{{url('descargar/plantilla_importar_turnos.xlsx')}}" class="alert-link">Enlace</a></p>

							</div>


       		 {!! Form::open(['url' => 'importAfiliado', 'method' => 'post', 'role' => 'form', 'files' => true]) !!}

         			   {{ csrf_field() }}  

						<div class="form-group">
							<div class="row">

							 	<div class="col-sm-4">

									<div class="input-group">


										<span class="btn btn-success btn-file">

											<i class="fa fa-upload"> Seleccionar Archivo <input type="file" name="archivo" id="archivoAfiliado"></i>

										</span>

									</div>

								</div>


							  	<div class="col-sm-4">

										<input class="form-control" readonly="" type="text" id="nombre_archivo">
								</div>

							</div>

									<p class="help-block">El archivo debe ser en formato .xls o xlsx y no debe pesar más de 2 Mb.</p>


								</div>

								<div class="col-12 col-lg-12">								

									<div class="pull-right">

										{!! Form::button('<i class="fa fa-save"></i> Guardar', array('type' => 'submit', 'class' => 'btn btn-primary')) !!}

										<a href="{{ route('importar_afiliado') }}" class="btn btn-default">Cancelar</a>

									</div>

								</div>

							</div>

	      				  {!! Form::close() !!}

					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="separator"></div>

@endsection
