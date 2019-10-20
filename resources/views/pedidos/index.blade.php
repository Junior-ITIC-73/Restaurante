@extends('admin.layout')

@section('content')



<center>
	<a href="{{route('pedidos.create')}}"><button type="button" class="btn btn-success">New Pedido</button></a>
	<h1>LISTADO DE PEDIDO</h1>
	<table border="4" class="table table-striped table-bordered" style="width:80%">
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
			<td>{{$pedido->user->name}}</td>
			<td>{{$pedido->fecha_pedido}}</td>
			<td>{{$pedido->estado_pedido}}</td>
			<td>{{$pedido->total_pedido}}</td>
			<td>{{$pedido->mesa_id}}</td>
			<td><a href="{{route('pedidos.edit',$pedido)}}"><img src="{{asset('img/editar.png')}}" width="30" height="30"></a></td>
			<td><a href="{{route('pedidos.destroy',$pedido)}}"><img src="{{asset('img/eliminar.png')}}" width="30" height="30"></a></td>
		</tr>
		@endforeach
	</table>
</center>

@endsection