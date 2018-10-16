@extends ('layouts.app')

@section('titulo')
	Incapacidades
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
					
					<div class="form-group">
						<label class="sr-only" for="cedula">Cédula</label>
						{!! Form::text('cedula', NULL, array('class' => 'form-control', 'placeholder' => "Número De Cédula")); !!}
					</div>
						
					<div class="form-group">
						<label class="sr-only" for="nombre">Nombres</label>
						{!! Form::text('nombre', NULL, array('class' => 'form-control', 'placeholder' => "Nombre Del Afiliado")); !!}
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Buscar</button>
					</div>

					<a href="{{url('crear_afiliacion')}}" class="btn btn-success con-tooltip" title="Crear Afiliado"><i class="fa fa-plus"></i> Nuevo</a>
				
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">			
			<div class="offset-sm-2 col-sm-10" >

				<div class="well well-sm ">

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover table-condensed">
							<thead>
								<tr>
									<th>#</th>
									<th>Cédula</th>
									<th>Nombres</th>
									<th>Nº Incapacidad</th>
									<th>Fecha Inicial</th>
									<th>Fecha Final</th>
									<th>Estado</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								@if(count($incapacidades) > 0)
									@foreach($incapacidades as $i => $incapacidad)

									<tr>

										<td>{{ $incapacidad->id }}</td>
										<td>{{ $incapacidad->afiliado->cedula }}</td>
										<td>{{ $incapacidad->afiliado->primer_nombre." ".$incapacidad->afiliado->segundo_nombre." ".
											$incapacidad->afiliado->primer_apellido." ".
											$incapacidad->afiliado->segundo_apellido }}
										</td>
										<td>{{ $incapacidad->numero_incapacidad }}</td>
										<td>{{ $incapacidad->fecha_inicial }}</td>
										<td>{{ $incapacidad->fecha_final }}</td>
										<td>{{ $incapacidad->estado->estado }}</td>

										<td>
											{{--Acciones para cada registro (visible para tablets y desktops) --}}
											<div class="hidden-xs">

												<a href="{{ url('incapacidad/show', ['id' => $incapacidad->id])}}" class="btn btn-xs btn-primary con-tooltip" title="Ver detallado"><i class="fa fa-list"></i></a>
													
												<a href="#" class="btn btn-xs btn-success con-tooltip" title="Editar"><i class="fa fa-gear"></i></a>
													
												<a href="#" class = "elimina" title="Eliminar" ><span class="label label-danger" >Eliminar</span></a>

											</div>

											{{--Acciones para cada registro (visible para celulares) --}}
											<div class="visible-xs">
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
	</div>
	
@stop