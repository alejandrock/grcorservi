@extends ('emails.plantilla.plantilla')

@section('content')

	<td class="container-padding" bgcolor="#ffffff" style="background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 14px; line-height: 20px; font-family: Helvetica, sans-serif; color: #333;">       

		<br>

		<div style="font-weight: bold; font-size: 18px; line-height: 24px; color: #336699">

			Nuevo Afiliado

		</div>

		<br>

		

		<table style="width:100%; font-family: Helvetica, sans-serif;">

			<tr>

				<td><strong>Número De Cédula:</strong></td>

				<td>{{ $afiliado->cedula }}</td>

			</tr>



			<tr>

				<td><strong>Nombre:</strong></td>

				<td>{{ $afiliado->primer_nombre }}</td>

			</tr>



			<tr>

				<td><strong>Apellidos:</strong></td>

				<td>{{ $afiliado->primer_apellido }}</td>

			</tr>



			<tr>

				<td><strong>Correo</strong></td>

				<td>{{ $afiliado->email }}</td>

			</tr>

 
{{-- 
			<tr>

				<td><strong>Cargo</strong></td>

				<td>{{$empleado->contrato_actual->cargo->nombre}}</td>

			</tr>



			<tr>

				<td><strong>Departamento</strong></td>

				<td>{{$empleado->departamento->nombre}}</td>

			</tr> --}}



			<tr>

				<td>
{{-- 
					{{ HTML::link_to_route('afiliacion.index', 'Ver más', ['id' => $afiliado->id]) }} --}}

				</td>

			</tr>



		</table>

@stop