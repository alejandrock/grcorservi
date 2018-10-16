@extends ('layouts.app')

@section('titulo')

	AFILIADO
@stop

{{--Script adicional--}}
@section('add_script')
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
	
@stop

@section('add_css')
	<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@stop


@section('content')

	<div class="row">

		<div class="panel panel-default">

			<div class="col-md-12 col-md-offset-0">
		            <div class="panel panel-primary">

		                <div class="panel-heading">AFILIADO</div>
		                    <div class="panel-body">
					                        
								<div class="row">

									<div class="col-sm-6 col-sm-6 ">


										<dl class="dl-horizontal">


											<dt>NOMBRES:</dt>
											
											<dd>{{ $afiliado->primer_nombre." ".$afiliado->segundo_nombre." ".
											$afiliado->primer_apellido." ".
											$afiliado->segundo_apellido }}</dd>

										</dl>

										<dl class="dl-horizontal">

											<dt>Nº. CÉDULA:</dt>

											<dd>{{ $afiliado->cedula }}</dd>

										</dl>

										<dl class="dl-horizontal">

											<dt>Nº. CELULAR</dt>

											<dd>3176578910</dd>

										</dl>


									</div>

									<div class="col-sm-6  col-sm-6 ">

								  		<dl class="dl-horizontal">

											<dt>DIRECCIÓN:</dt>
											<dd>{{ $afiliado->direccion }}</dd>
										</dl>


										<dl class="dl-horizontal">


											<dt>BARRIO:</dt>
											
											<dd>{{$afiliado->barrio}}</dd>

										</dl>

										<dl class="dl-horizontal">

											<dt>E-MAIL:</dt>

											<dd>{{ $afiliado->email}}</dd>
										</dl>


									</div>
								</div>

								<div class="row">

									<div class="col-sm-6 col-sm-6 ">


										<dl class="dl-horizontal">


											<dt>SALARIO:</dt>
											
											<dd>{{$afiliado->salario}}</dd>

										</dl>

										<dl class="dl-horizontal">

											<dt>FECHA DE REGISTRO:</dt>

											<dd>{{ $afiliado->created_at }}</dd>

										</dl>

										<dl class="dl-horizontal">

											<dt>ESTADO:</dt>

											<dd>ACTIVO</dd>

										</dl>


									</div>

							

		                    </div>
		            </div>
		    </div>



		</div>
	</div>



@stop