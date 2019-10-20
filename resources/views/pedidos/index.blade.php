@extends('admin.layout')

@section('content')

        <link rel="stylesheet" href="{{ asset('datatables/bootstrap.css') }}">
        <link rel="stylesheet" href="{{{ asset('datatables/bootstrap4.min.css')}}}">
        <link rel="stylesheet" href="{{{ asset('datatables/css/jquery.dataTables.min.css')}}}">
        <link rel="stylesheet" href="{{{ asset('datatables/css/estilos.css')}}}">

<center>
	<a href="{{route('pedidos.create')}}"><button type="button" class="btn btn-success">New Pedido</button></a>
	<h1>LISTADO DE PEDIDO</h1>
	<table border="4" class="table table-striped table-bordered" style="width:80%" id="a1">
		<thead>
			<th>USER</th>
			<th>FECHA</th>
			<th>ESTADO</th>
			<th>TOTAL</th>
			<th>MESA</th>
			<th>ACCION</th>
			<th>ACCION</th>
		</tr>
		</thead>
		<tbody>
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
		</tbody>
	</table>
</center>
<script src="{{{ asset('datatables/js/jquery-3.3.1.js')}}}"></script>
<script src="{{{ asset('datatables/js/jquery.dataTables.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/dataTables.bootstrap4.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/dataTables.buttons.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/jszip.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/pdfmake.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/vfs_fonts.js')}}}"></script>
<script src="{{{ asset('datatables/js/buttons.html5.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/buttons.print.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/buttons.print.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/buttons.colVis.min.js')}}}"></script>
<script src="{{{ asset('js/datatables.js')}}}"></script>
@endsection