@extends('admin.layout')

@section('content')


	<center>
		<h1>LISTADO DE USUARIOS</h1>
		<a href="{{route('users.create')}}"><button type="button" class="btn btn-success">New User</button></BUTTON></a><br>
		<div align="lefth">Buscar:<input type="text" name=""></div>
	<table border="4" class="table table-striped table-bordered" style="width:80%">
		<tr>
			<td><b>NAME</b></td>
			<td><b>EMAIL</b></td>
			<td><b>DATOS DEL CLIENTE</b></td>
			<td><b>MODIFICAR</b></td>
			<td><b>ELIMINAR</b></td>
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
		<tr>
			<td>{{ $users->links() }}</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	</center>

@endsection