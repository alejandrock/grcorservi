<?php 

	$msj_error = Session::get('msj_error');

	$msj_informacion = Session::get('msj_informacion');

	$msj_exito = Session::get('msj_exito');

?>

@if (!empty($msj_error))

<div class="alert alert-danger">

	<button type="button" class="close" data-dismiss="alert">&times;</button>

	<strong>Error</strong> {{$msj_error}}

</div>

@endif



@if (!empty($msj_informacion))

<div class="alert alert-info alert-dismissable">

	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

	<strong>Nota:</strong> {{$msj_informacion}}

</div>

@endif



@if (!empty($msj_exito))

<div class="alert alert-success alert-dismissable">

	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

	<i class="fa fa-check"></i> {{$msj_exito}}

</div>

@endif



@if ($errors->any())

	<div class="alert alert-danger">

	<button type="button" class="close" data-dismiss="alert">&times;</button>

	<strong>Ocurrieron algunos Errores:</strong>

	<ul>

		@foreach ($errors->all() as $error)

			<li>{{ $error }}</li>

		@endforeach

	</ul>

</div>

@endif



