@extends ('layouts.app')

@section('titulo')
	ROLES
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
			<div class="row justify-content-md-center">
				<div class="offset-sm-7 col-sm-12" >

					<div class="well well-sm ">

						{!! Form::open(['route' => 'create_role', 'method' => 'POST','role' => 'form','class' => "form-inline", "autocomplete" => "off"]) !!}
						<div class="form-group">
							<label class="sr-only" for="nombre">Nombres</label>
							{!! Form::text('nombre', NULL, array('class' => 'form-control', 'placeholder' => "Nombre Del Afiliado")); !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">

		<div class="row">			
					<div class="offset-sm-2 col-sm-10" >
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover table-condensed">
							<thead>
								<tr>
									<th>#</th>
									<th>Nombre</th>
									<th>Nombre A Mostrar</th>
									<th>Descripción</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>

							@if(count($roles) > 0)
								@foreach($roles as $i => $role)
 
									<tr>
										<td>{{ $role->id }} </td>
										<td>{{ $role->name }} </td>
										<td>{{ $role->display_name }}</td>
										<td>{{ $role->description }} </td>
									
										<td>
											{{--Acciones para cada registro (visible para tablets y desktops) --}}
											<div class="hidden-xs">

												<a href="{{-- {{ url('afiliado', ['id' => $afiliado->id])}} --}}" class="btn btn-xs btn-primary con-tooltip" title="Ver detallado"><i class="fa fa-list"></i></a>
													
												<a href=" {{ url('edit_role', ['id' => $role->id])}} " class="btn btn-xs btn-success con-tooltip" title="Editar"><i class="fa fa-gear"></i></a>


												<a href=" {{ url('delete_role', ['id' => $role->id])}} " class = "elimina" title="Eliminar" ><span class="label label-danger" >Eliminar</span></a>

											</div>

											{{--Acciones para cada registro (visible para celulares) --}}
											<div class="visible-xs">
												<div class="btn-group-vertical">
													
													<a href="#" class="btn btn-xs btn-primary con-tooltip" title="Ver detallado"><i class="fa fa-list"></i></a>
														
													<a href="{{ url('edit_role', ['id' => $role->id])}}" class="btn btn-xs btn-success con-tooltip" title="Editar"><i class="fa fa-gear"></i></a>
													
													<div id = "eliminar">	
													<a href=" {{ url('delete_role', ['id' => $role->id])}}  "><span class="label label-danger" id = "elimina" title= >Eliminar</span></a>
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