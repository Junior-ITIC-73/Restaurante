@extends('admin.layout')

@section('content')

<center>
	<a href="{{route('mesas.create')}}">ALTA MESA</a>
	<h1>LISTADO DE MESAS</h1>
	<table border="4">
		<tr>
			<td>NUMERO</td>
			<td>DESCRIPCION</td>
			<td>ACCION</td>
			<td>ACCION</td>
		</tr>
		@foreach($mesas as $mesa)
		<tr>
			<td>{{$mesa->numero_mesa}}</td>
			<td>{{$mesa->descripcion_mesa}}</td>
			<td><a href="{{route('mesas.edit',$mesa)}}">Modificar</a></td>
			<td><a href="{{route('mesas.destroy',$mesa)}}">Eliminar</a></td>
		</tr>
		@endforeach
	</table>
</center>
@endsection