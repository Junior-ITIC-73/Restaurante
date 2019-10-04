@extends('admin.layout')

@section('content')
	<center>
		<h1>LISTADO DE USUARIOS</h1>
		<a href="{{route('users.create')}}"><button type="button" class="btn btn-success">New User</button></BUTTON></a>
	<table border="4" class="table table-striped table-bordered" style="width:80%">
		<tr>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>DATOS DEL CLIENTE</td>
			<td>MODIFICAR</td>
			<td>ELIMINAR</td>
		</tr>
		@foreach($users as $user)
		<tr>
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
			<td><a href="{{route('users.destroy',$user)}}"><img src="{{asset('img/eliminar.png')}}" width="30" height="30"></a></td>
		</tr>
		@endforeach
	</table>
	</center>
@endsection