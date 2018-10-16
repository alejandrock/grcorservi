<meta http-equiv = "Content-Type" content = "text / html; charset = utf-8" />

<table>

	<tr>

		<th><strong>Número De Cédula</strong></th>

		<th><strong>Primer Nombre</strong></th>

		<th><strong>Segundo Nombre</strong></th>

		<th><strong>Primer Apellido</strong></th>

		<th><strong>Segundo Apellido </strong></th>

	</tr>



	@foreach($afiliados as $afiliado)		

		<tr>

			<td>{{ $afiliado->cedula }}</td>

			<td>{{ $afiliado->primer_nombre }}</td>

			<td>{{ $afiliado->segundo_nombre }}</td>

			<td>{{ $afiliado->primer_apellido }}</td>

			<td>{{ $afiliado->segundo_apellido }}</td>

		</tr>

	@endforeach

</table>