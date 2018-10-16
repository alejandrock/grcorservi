@extends ('layouts.app')

@section('titulo')
	AFILIADOS
@stop


{{--Script adicional--}}
@section('add_script')
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
	
@stop

@section('add_css')
	<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@stop

@section ('content')

	<div class="container">
  		<div class="row">	
			<div class="well well-sm">

				<div class="col-sm-6 offset-sm-6">

					<a href="{{url('crear_afiliacion')}}" class="btn btn-success con-tooltip" title="Crear Afiliado"><i class="fa fa-plus"></i> Nuevo</a>
				</div>

				{!! Form::open(array('method' => 'POST','role' => 'form','class' => "form-inline", "autocomplete" => "off")) !!}
				
				<div class="form-group">
					<label class="sr-only" for="cedula">Cédula</label>
					{!! Form::text('cedula', NULL, array('class' => 'form-control', 'placeholder' => "Número De Cédula")); !!}
				</div>
					
				<div class="form-group">
					<label class="sr-only" for="nombre">Nombres</label>
					{!! Form::text('nombre', NULL, array('class' => 'form-control', 'placeholder' => "Nombre Del Afiliado")); !!}
				</div>
				
				<button type="submit" class="btn btn-default"><i class="fa fa-search"></i> Buscar</button>
				{!! Form::close() !!}
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-12">

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover table-condensed">
							<thead>
								<tr>
									<th>#</th>
									<th>Cédula</th>
									<th>Nombres</th>
									<th>Nº. Celular</th>
									<th>Estado</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>

								@if(count($afiliados) > 0)
									@foreach($afiliados as $i => $afiliado)

									<tr>

										<td>{{ $afiliado->id }}</td>
										<td>{{ $afiliado->cedula }}</td>
										<td>{{ $afiliado->primer_nombre." ".$afiliado->segundo_nombre." ".
											$afiliado->primer_apellido." ".
											$afiliado->segundo_apellido }}
										</td>
										<td>3176578910</td>
										<td>ACTIVO</td>


										<td>
											{{--Acciones para cada registro (visible para tablets y desktops) --}}
											<div class="hidden-xs">

												<a href="{{ url('afiliado/show', ['id' => $afiliado->id])}}" class="btn btn-xs btn-primary con-tooltip" title="Ver detallado"><i class="fa fa-list"></i></a>
													
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
	
@stop