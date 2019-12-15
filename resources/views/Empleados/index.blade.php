@extends('admin.admin')

@section('header')
	<h1 align="center">
		Listado de Empleados 
	</h1>
@endsection

@section('content')		

<a href="{{route('empleado.create')}}"><button type="button" class="btn btn-primary">Agregar</button></a>

	<div class="container">
		<table border="4" class="table table-striped table-bordered" style="width:100%" id="a1">
			<thead>
			<tr>
				<th><b>Nombre</b></th>
				<th><b>Apellido Paterno</b></th>
				<th><b>Apellido Materno</b></th>
				<th><b>Telefono</b></th>
				<th><b>Direccion</b></th>
				<th><b>Modificar</b></th>
				<th><b>Eliminar</b></th>
			</tr>
			</thead>
			<tbody>
			@foreach($empleados as $empleado)
			<tr>
				<td>{{$empleado->name}}</td>
				<td>{{$empleado->apellido_paterno}}</td>
				<td>{{$empleado->apellido_materno}}</td>
				<td>{{$empleado->telefono_empleado}}</td>
				<td>
					<ul>
						{{-- <li><b>MUNICIPIO:</b>{{$empleado->}}</li> --}}
						<li><b>LOCALIDAD:</b> {{$empleado->localidad}}</li>
						<li><b>CALLE:</b> {{$empleado->calle}}</li>
						<li><b>N# interior:</b> {{$empleado->num_interior}}</li>
						<li><b>N# exterior:</b> {{$empleado->num_exterior}}</li>
						<li><b>CALLE:</b> {{$empleado->calle}}</li>
						<li><b>CP:</b> {{$empleado->CP}}</li>
					</ul>	
				</td>
				<td><a href="{{route('empleado.edit',$empleado)}}"><img src="{{asset('img/editar.png')}}" width="30" height="30"></a></td>
				<td>
					<form action="{{route('empleado.destroy',$empleado)}}" method="POST">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<button type="submit" onclick="return confirm('Estas seguro de eliminar al Empleado {{$empleado->name}}?')"><img src="{{asset('img/eliminar.png')}}" width="30" height="30" ></button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
		</table>
	</div>
@endsection

