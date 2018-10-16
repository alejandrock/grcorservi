@extends ('layouts.app')

@section('titulo')
	USUARIOS
@stop

{{--Script adicional--}}
@section('add_script')
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

@stop

@section('add_css')
	<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@stop

@section ('content')

	<div class="container-fluid">
		<div class="row">			
			<div class="offset-sm-2 col-sm-10" >

				<div class="well well-sm ">

					{!! Form::open(array('method' => 'POST','role' => 'form','class' => "form-inline", "autocomplete" => "off")) !!}
					
					<div class="container-fluid">
						<div class="row">
							<div class="col">
								<div class="form-group">

									<div class="autocomplete" style="width:300px;">

									{!! Form::text('username', NULL, array('id' => 'username', 'class' => 'form-control input-sm', 'placeholder' => "Username")); !!}
									</div>
								</div>
							</div>
								
							<div class="col">

								<div class="form-group">
									{!! Form::text('nombre', NULL, array('class' => 'form-control input-sm', 'placeholder' => "Nombre Del empleado")); !!}
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-default separator-btn"><i class="fa fa-search"></i> Buscar</button>
							</div>

							<div class="form-group">

								<a href=" " class="btn btn-success con-tooltip separator-btn" title="Crear empleado" id="crearUsuario"><i class="fa fa-plus"></i> Nuevo</a>
							</div>

							<div class="form-group">
								<a href="{{url('prueba')}}" class="btn btn-success con-tooltip separator-btn" title="Crear empleado"><i class="fa fa-upload"></i> Importar</a>
							</div>

							<div class="form-group">
								<a href="{{url('exportar_afiliacion')}}" class="btn btn-success con-tooltip separator-btn" title="Exportar empleados"><i class="fa fa-download"></i> Exportar</a>
							</div>
						</div>
					</div>
										
					{!! Form::close() !!}
				</div>

 			</div>
 		</div>
 	</div>

	<div class="container-fluid">
		<div class="row">			
			<div class="offset-sm-2 col-sm-10" >
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-condensed" id="users">
					<thead>
						<tr>
							<th>#</th>
							<th>Username</th>
							<th>Empleado</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>

						@if(count($usuarios) > 0)
							@foreach($usuarios as $index => $usuario)

							<tr>

								<td>{{ $usuario->id }}</td>
								<td>{{ $usuario->username }}</td>
								<td>{{ $usuario->descripcion }}</td>
								
								<td>ACTIVO</td>

								<td>
									<div class="hidden-xs">

										<a href="{{ url('usuario', ['id' => $usuario->id])}}" class="btn btn-xs btn-primary con-tooltip" title="Ver detallado"><i class="fa fa-list"></i></a>
											
										<a href="{{ url('editar', ['id' => $usuario->id])}}" class="btn btn-xs btn-success con-tooltip" title="Editar"><i class="fa fa-gear"></i></a>
											
										<a href="#" class = "elimina" title="Eliminar" ><span class="label label-danger" >Eliminar</span></a>

									</div>

									<div class="visible-xs" ">
										<div class="btn-group-vertical">
											
											<a href="#" class="btn btn-xs btn-primary con-tooltip" title="Ver detallado"><i class="fa fa-list"></i></a>
												
											<a href="#" class="btn btn-xs btn-success con-tooltip" title="Editar"><i class="fa fa-gear"></i></a>
											
											<div id = "eliminar">	
											<a href="#"><span class="label label-danger" id = "elimina" title= >Eliminar</span></a>
											</div>
										</div>
									</div>
								</td>
								
							</tr>
							@endforeach
						@else
						<tr>
							<td colspan="7">No se encontraron Registros.</td>
						</tr>
						@endif

					</tbody>
				</table>
					
				</div>
			</div>
		</div>
	</div>
		
@stop

<script type="text/javascript">
  $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#username" ).autocomplete({
      source: availableTags
    });
  } );
 </script>