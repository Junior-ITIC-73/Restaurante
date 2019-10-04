@extends('admin.layout')

@section('content')
<center>
	<a href="{{route('mesas.create')}}"><button type="button" class="btn btn-success">New Mesa</button></a>
	<h1>LISTADO DE MESAS</h1>
	<table border="4" class="table table-striped table-bordered" style="width:80%">
		<tr>
			<td>NUMERO</td>
			<td>DESCRIPCION</td>
			<td>MODIFICAR</td>
			<td>ELIMINAR</td>
		</tr>
		@foreach($mesas as $mesa)
		<tr>
			<td>{{$mesa->numero_mesa}}</td>
			<td>{{$mesa->descripcion_mesa}}</td>
			<td><a href="{{route('mesas.edit',$mesa)}}"><img src="{{asset('img/editar.png')}}" width="30" height="30"></a></td>
			<td><a href="{{route('mesas.destroy',$mesa)}}"><img src="{{asset('img/eliminar.png')}}" width="30" height="30"></a></td>
		</tr>
		@endforeach
	</table>
</center>
@endsection
