

{{-- Menu de arriba --}}

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

	<div class="navbar-header">

		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">

			<span class="sr-only">Menu</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

		</button>

		<a class="navbar-brand" href="#">Corservi</a>

	</div>



	<ul class="nav navbar-top-links navbar-right">




		<li class="dropdown">

			<a class="dropdown-toggle" data-toggle="dropdown" href="#">


				<i class="fa fa-caret-down"></i>

			</a>

			<ul class="dropdown-menu dropdown-user">


				<li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a></li>

				{{--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuración</a></li>--}}

				<li class="divider"></li>

				<li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a></li>


				<li><a href="#"><i class="fa fa-sign-in fa-fw"></i> Iniciar Sesión</a></li>


			</ul>

		</li>

	</ul>

</nav>



{{-- Menu de lateral principal --}}

<nav class="navbar-default navbar-static-side" id="menu_principal" role="navigation">



	<div class="sidebar-collapse">

		<ul class="nav" id="side-menu">

			<li class="sidebar-search">

				<figure id="logobynm" class="hidden-xs"><img src="{{ asset('assets/img/logo.png') }}" alt="Corservi"></figure>

			</li> 
			
			<li>
				<a href="#">Inicio<span class="fa arrow"></span></a>

				<ul class="nav nav-second-level">


				<li><a href="#"><i class="fa fa-dashboard"></i> Escritorio</a></li>

				
				<li><a href="#"><i class= "fa fa-newspaper-o"></i> Noticias</a></li>
						
			
				<li><a href="#"><i class="fa fa-newspaper-o"></i> Publicaciones</a></li>

				</ul>

			</li>
			<li>

				<a href="#">Gestión Humanasss<span class="fa arrow"></span></a>

				<ul class="nav nav-second-level">
					<li><a href="#">Aspirantes</a></li>
					<li><a href="#">Empleados</a></li>
					<li><a href="#">Notificaciones</a></li>
					<li><a href="#">Encuesta de Retiro</a></li>
				</ul>

			</li>

			</li>

		</ul>

	</div>



</nav>

