@extends ('layouts.app')

@section('titulo')

	Incapacidad
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

		                <div class="panel-heading">INCAPACIDAD</div>
		                    <div class="panel-body">
					                        
								<div class="row">

									<div class="col-sm-6 col-sm-6 ">


										<dl class="dl-horizontal">


											<dt>Nº. INCAPACIDAD:</dt>
											
											<dd>{{$incapacidad->numero_incapacidad}}</dd>

										</dl>

										<dl class="dl-horizontal">

											<dt>AFILIADO:</dt>

											<dd>{{ $incapacidad->afiliado->primer_nombre." ".$incapacidad->afiliado->segundo_nombre." ".
															$incapacidad->afiliado->primer_apellido." ".
															$incapacidad->afiliado->segundo_apellido }}</dd>

										</dl>

										<dl class="dl-horizontal">

											<dt>FECHA DE RECEPCIÓN </dt>

											<dd>{{$incapacidad->fecha_recepcion}}</dd>

										</dl>


									</div>

									<div class="col-sm-6  col-sm-6 ">

								  		<dl class="dl-horizontal">

											<dt>FECHA INICIAL:</dt>
											<dd>{{$incapacidad->fecha_inicial}}</dd>
										</dl>

										<dl class="dl-horizontal">

											<dt>FECHA FINAL:</dt>

											<dd>{{ $incapacidad->fecha_final}}</dd>
										</dl>

										<dl class="dl-horizontal">


											<dt>DÍAS AUTORIZADOS:</dt>
											
											<dd>{{$incapacidad->dias_autorizados}}</dd>

										</dl>


									</div>
								</div>

								<div class="row">

									<div class="col-sm-6 col-sm-6 ">


										<dl class="dl-horizontal">


											<dt>SUCURSAL:</dt>
											
											<dd>{{$incapacidad->sucursal->sucursal}}</dd>

										</dl>

										<dl class="dl-horizontal">

											<dt>RAZÓN SOCIAL:</dt>

											<dd>{{ $incapacidad->afiliado->primer_nombre." ".$incapacidad->afiliado->segundo_nombre." ".
															$incapacidad->afiliado->primer_apellido." ".
															$incapacidad->afiliado->segundo_apellido }}</dd>

										</dl>

										<dl class="dl-horizontal">

											<dt>ENTIDAD:</dt>

											<dd>{{$incapacidad->entidad->entidad}}</dd>

										</dl>


									</div>

									<div class="col-sm-6  col-sm-6 ">


										<dl class="dl-horizontal">

											<dt>ESTADO:</dt>

											<dd>{{ $incapacidad->estado->estado}}</dd>
										</dl>

										<dl class="dl-horizontal">


											<dt>INCAPACIDAD POR ARL:</dt>
											
											<dd>SÍ</dd>

										</dl>

										<dl class="dl-horizontal">

											<dt>SUBTOTAL:</dt>

											<dd>{{ $incapacidad->sub_total }}</dd>

										</dl>

									</div>
								</div>



								<div class="row">

									<div class="col-sm-6 col-sm-6 ">

										<dl class="dl-horizontal">

											<dt>OBSERVACIONES:</dt>

											<dd>{{$incapacidad->observaciones}}</dd>

										</dl>


									</div>

									<div class="col-sm-6  col-sm-6 ">

								  		<dl class="dl-horizontal">

											<dt>REGISTRADO POR:</dt>
											<dd>infocorservi</dd>
										</dl>

									</div>
								</div>


		                    </div>
		            </div>
		    </div>



		</div>
	</div>



@stop