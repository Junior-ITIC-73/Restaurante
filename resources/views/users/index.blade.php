@extends('admin.layout')

@section('content')
	<center>
		<h1>LISTADO DE USUARIOS</h1>
	<table border="4">
		<tr>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>ACCION</td>
			<td>ACCION</td>
		</tr>
		@foreach($users as $user)
		<tr>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td><a href="{{route('users.edit',$user)}}">Modificar</a></td>
			<td><a href="{{route('users.destroy',$user)}}">Eliminar</a></td>
		</tr>
		@endforeach
	</table>
	</center>
@endsection