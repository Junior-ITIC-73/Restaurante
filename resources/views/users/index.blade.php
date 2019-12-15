@extends('admin.admin')

@section('header')
	<h1 align="center">
		Listado de Usuarios 
	</h1>
@endsection

@section('content')		
    <a href="{{route('users.create')}}"><button type="button" class="btn btn-primary">Agregar</button></a>
	<div class="container">
		<table border="4" class="table table-striped table-bordered" style="width:100%" id="a1">
			<thead>
			<tr>
				<th><b>Nombre</b></th>
				<th><b>EMAIL</b></th>
				<th><b>DATOS DEL CLIENTE</b></th>
				<th><b>MODIFICAR</b></th>
				<th><b>ELIMINAR</b></th>
			</tr>
			</thead>
			<tbody>
			@foreach($users as $user)
			<tr align="center">
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>
					<ul>
						<li><b>TEL:</b> {{$user->telefono_user}}</li>
						<li><b>CALLE:</b> {{$user->calle}}</li>
						<li><b>LOCALIDAD:</b> {{$user->localidad}}</li>
						<li><b>CP:</b> {{$user->CP}}</li>
					</ul>	
				</td>
				<td><a href="{{route('users.edit',$user)}}"><img src="{{asset('img/editar.png')}}" width="30" height="30"></a></td>
				<td>
					<form action="{{route('users.destroy',$user)}}" method="POST">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<button type="submit" onclick="return confirm('Estas seguro de eliminar al Empleado {{$user->name}}?')"><img src="{{asset('img/eliminar.png')}}" width="30" height="30" ></button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
		</table>
	</div>
@endsection
