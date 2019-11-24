<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>
<center>
	MODIFICAR DE EMPLEADOS<br>
	        @if($errors->any())
				@foreach($errors->all() as $error)
					<label style="color:red">{{$error}}</label><br>
				@endforeach
			@endif

<form method="POST" action="{{route('empleado.update',$empleado)}}">
	{{method_field('PUT')}}
	{{csrf_field()}}
	Nombre<input type="text" name="name" id="name" value="{{old('name',$empleado->name)}}"><br>
	Apellido Paterno<input type="text" name="apellido_paterno" id="apellido_paterno" value="{{old('apellido_paterno',$empleado->apellido_paterno)}}" required><br>
	Apellido Materno<input type="text" name="apellido_materno" id="apellido_materno"  value="{{old('apellido_materno',$empleado->apellido_materno)}}" required><br>
	Sexo:
	Hombre<input type="radio" name="sexo" value="0" checked>
	Mujer<input type="radio" name="sexo" value="1"><br>
	Telefono:<input type="text" name="telefono_empleado" id="telefono_empleado" value="{{old('telefono_empleado',$empleado->telefono_empleado)}}" required><br>
<hr>
	DIRECCION<br>
	MUNICIPIO:
	<select>
		<option>LERMA</option>
	</select><br>
	LOCALIDAD:<input type="text" name="localidad" value="{{old('localidad',$empleado->localidad)}}" required><br>
	CALLE:<input type="text" name="calle" id="calle" value="{{old('calle',$empleado->calle)}}" required><br>
	N# INTERIOR<input type="text" name="num_interior" id="num_interior" value="{{old('num_interior',$empleado->num_interior)}}" required><br>	
	N# EXTERIOR<input type="text" name="num_exterior" id="num_exterior" value="{{old('num_exterior',$empleado->num_exterior)}}" required><br>	
	CP: <input type="text" name="CP" id="CP" value="{{old('CP',$empleado->CP)}}" required><br>
	<button type="submit">GUARDAR</button>
</form>
</center>
</body>
</html>