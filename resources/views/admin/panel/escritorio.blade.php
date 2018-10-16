@extends ('admin/plantilla/plantilla')

{{-- Titulo de la pagina y de la seccion--}}

@section('titulo')

Escritorio

@stop

@section ('content')

			<div class="row">

				

				<div class="panel panel-default">

					<div class="panel-heading"><i class="fa fa-th-large fa-fw"></i> Menú General</div>

					<div class="panel-body">

					


							<div class="col-xs-12 col-sm-6 col-md-3">

								<div class="panel panel-primary">

									<a href="{{url('turnos/consultar')}}">

										<div class="panel-heading">

											<div class="row">

												<div class="col-xs-2">

													<i class="fa fa-clock-o fa-4x"></i>

												</div>

												<div class="col-xs-10 text-right">

													<div>Turnos</div>

												</div>

											</div>

										</div>

									</a>

								</div>

							</div>

						

						{{-- Reserva Salas --}}

						<div class="col-xs-12 col-sm-6 col-md-3">

							<div class="panel panel-primary">

								<a href="http://blancoynegromasivo.com.co/reserva/web/" target="_blank">

									<div class="panel-heading">

										<div class="row">

											<div class="col-xs-2">

												<i class="fa fa-users fa-4x"></i>

											</div>

											<div class="col-xs-10 text-right">

												<div>Reserva de Salas</div>

											</div>

										</div>

									</div>

								</a>

							</div>

						</div>

								




							<div class="col-xs-12 col-sm-6 col-md-3">

								<div class="panel panel-primary">

									<a href="{{url('/correspondencias')}}">

										<div class="panel-heading">

											<div class="row">

												<div class="col-xs-2">

													<i class="fa fa-envelope-o fa-4x"></i>

												</div>

												<div class="col-xs-10 text-right">

													<div>Correspondencia</div>

												</div>

											</div>

										</div>

									</a>

								</div>

							</div>






							<div class="col-xs-12 col-sm-6 col-md-3">

								<div class="panel panel-primary">

									<a href="{{url('/bonificaciones/consultar')}}">

										<div class="panel-heading">

											<div class="row">

												<div class="col-xs-2">

													<i class="fa fa-credit-card fa-4x"></i>

												</div>

												<div class="col-xs-10 text-right">

													<div>Bonificación</div>

												</div>

											</div>

										</div>

									</a>

								</div>

							</div>






							<div class="col-xs-12 col-sm-6 col-md-3">

								<div class="panel panel-primary">

									<a href="#">

										<div class="panel-heading">

											<div class="row">

												<div class="col-xs-2">

													<i class="fa fa-newspaper-o fa-4x"></i>

												</div>

												<div class="col-xs-10 text-right">

													<div>Gestión Noticias</div>

												</div>

											</div>

										</div>

									</a>

								</div>

							</div>						



							<div class="col-xs-12 col-sm-6 col-md-3">

								<div class="panel panel-primary">

									<a href="#">

										<div class="panel-heading">

											<div class="row">

												<div class="col-xs-2">

													<i class="fa fa-ticket fa-4x"></i>

												</div>

												<div class="col-xs-10 text-right">

													<div>Tickets</div>

												</div>

											</div>

										</div>

									</a>

								</div>

							</div>




							<div class="col-xs-12 col-sm-6 col-md-3">

								<div class="panel panel-primary">

									<a href="#">

										<div class="panel-heading">

											<div class="row">

												<div class="col-xs-2">

													<i class="fa fa-archive fa-4x"></i>

												</div>

												<div class="col-xs-10 text-right">

													<div>Gestión Documental</div>

												</div>

											</div>

										</div>

									</a>

								</div>

							</div>


					</div>

				</div>

				

			</div>

@stop