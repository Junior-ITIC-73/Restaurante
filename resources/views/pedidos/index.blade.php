@extends('admin.layout')

@section('content')
<center>
	<a href="{{route('pedidos.create')}}">ALTA PEDIDOS</a>
	<h1>LISTADO DE PEDIDO</h1>
	<table border="4">
		<tr>
			<td>USER</td>
			<td>FECHA</td>
			<td>ESTADO</td>
			<td>TOTAL</td>
			<td>MESA</td>
			<td>ACCION</td>
			<td>ACCION</td>
		</tr>
		@foreach($pedidos as $pedido)
		<tr>
			<td>{{$pedido->user_id}}</td>
			<td>{{$pedido->fecha_pedido}}</td>
			<td>{{$pedido->estado_pedido}}</td>
			<td>{{$pedido->total_pedido}}</td>
			<td>{{$pedido->mesa_id}}</td>
			<td><a href="{{route('pedidos.edit',$pedido)}}">Modificar</a></td>
			<td><a href="{{route('pedidos.destroy',$pedido)}}">Eliminar</a></td>
		</tr>
		@endforeach
	</table>
</center>
@endsection