<!DOCTYPE html>
<html>
<head>
	<title>HOLA</title>
</head>
<body>
	<center>
		<h1>LISTADO DE USUARIOS</h1>
				<a href="{{route('users.create')}}">alta usuario</a>
	<table border="4">
		<tr>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>DATOS DEL CLIENTE</td>
			<td>ACCION</td>
			<td>ACCION</td>
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
			<td><a href="{{route('users.edit',$user)}}">Modificar</a></td>
			<td><a href="{{route('users.destroy',$user)}}">Eliminar</a></td>
		</tr>
		@endforeach
	</table>
	</center>
</body>
</html>