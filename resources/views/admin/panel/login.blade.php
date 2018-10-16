<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="SIC, Iniciar Sesión" />

	<meta name="author" content="Alejandro Ramirez" />

	<title>MockApps| Log in </title>


	{{--Favicon--}}

	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

</head>

<body>

	<div class="container">

		<div class="row">

			<div class="col-md-4 col-md-offset-4">

				<div class="login-panel panel panel-default">

					<div class="panel-heading">

						<h3 class="panel-title">Log in</h3>

					</div>

					<div class="panel-body">


						<figure id="logo-login">

							<img src="{{ asset('assets/img/logo.png') }}" alt="Logo">

						</figure>

							{!! Form::open(['route' => 'store', 'method' => 'POST']) !!}

								{{ csrf_field() }}

							<fieldset>

								<div class="form-group">

									 {!! Form::text('username') !!}

								</div>

								<div class="form-group">

									{!! Form::password('password', array('class' => 'awesome')) !!}


								</div>

								<div class="checkbox">

									<label>

										<input name="recordarme" type="checkbox" value="1">Recordarme

									</label>

								</div>

								<button type="submit" class="btn btn-lg btn-success btn-lg btn-block">Entrar</button>

							</fieldset>

							{!! Form::close() !!}

					</div>

				</div>

			</div>

		</div>

	</div>


<script type="text/javascript" src="assets/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>






</body>

</html>

