<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="utf-8" />

	<meta http-equiv="Cache-Control" content="no-store" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="description" content="GrupoCorservi" />

	<meta name="author" content="Alejandro Ramirez" />

	<title>SIC | @yield('titulo', 'Inicio')</title>

	{{-- Humans --}}

	<link type="text/plain" rel="author" href="{{ asset('humans.txt')}}" />

	{{--Favicon--}}

	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

	{{-- CSS base del sistema --}}


	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">


	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="assets/css/plugins/datepicker/datepicker3.css">

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
   	

	<!-- EDITOR -->


	<link rel="stylesheet" type="text/css" href="assets/css/plugins/froala_editor/froala_editor.min.css">


	@yield('add_css', '')

	{{-- CSS personalizado --}}


	<link rel="stylesheet" type="text/css" href="assets/css/main.css">


</head>



<body>

	<div id="wrapper">

		{{-- Menu de la plantilla --}}

		@include('admin.plantilla.menu')

		<!-- Contenido -->

		<div id="contenido">

			<button class="btn btn-default hidden-xs con-tooltip" title="Ver/Esconder Menú" type="button" id="barra_menu"><i class="fa fa-angle-double-left"></i></button>



			@if (!Request::is('/') and !Request::is('noticias/*'))				



				<div class="row">

					<h1 class="page-header"> @yield('titulo', 'Inicio') </h1>

				</div>

				<div class="row">


				</div>

			@else

				<div class="separator"></div>

			@endif



			@yield('content')

			@yield('template_handlebars', '')



		</div>

	</div>

	{{-- Ventanas modales del sistema --}}

	@include('admin.plantilla.modales')

	{{-- JS --}}

	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- para editor -->

	<script src="assets/js/plugins/froala_editor/froala_editor.min.js"></script>
	<script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>
	<script src="assets/js/plugins/maskjquery/jquery.mask.min.js"></script>
	<script src="assets/js/plugins/maskjquery/jquery.maskedinput.min.js"></script>
	<script src="assets/js/plugins/easyticker/easy-ticker.min.js"></script>

	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>



	@yield('add_script', '')

	{{-- JS propio --}}

	<script src="assets/js/main.js"></script>

	<script>

		// (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

		// 	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

		// 	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

		// })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		// ga('create', 'UA-53538793-1', 'auto');

		// ga('send', 'pageview');



		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-59774003-2', 'auto');
		ga('send', 'pageview');

	</script>

</body>

</html>

