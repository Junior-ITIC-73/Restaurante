<!DOCTYPE html>
<html>
<head>
	<title>ALTA</title>
</head>
<body>
<center>
	ALTA DE EMPLEADOS<br>
        @if($errors->any())
				@foreach($errors->all() as $error)
					<label style="color:red">{{$error}}</label><br>
				@endforeach
		@endif
<form method="POST" action="{{route('empleado.alta')}}">
	{{csrf_field()}}
	Nombre<input type="text" name="name" id="name" required value="{{old('name')}}"><br>
	Apellido Paterno<input type="text" name="apellido_paterno" id="apellido_paterno" required value="{{old('apellido_paterno')}}"><br>
	Apellido Materno<input type="text" name="apellido_materno" id="apellido_materno" required value="{{old('apellido_materno')}}"><br>
	Sexo:
	Hombre<input type="radio" name="sexo" value="0" checked>
	Mujer<input type="radio" name="sexo" value="1"><br>

	Telefono:<input type="text" name="telefono_empleado" id="telefono_empleado" required value="{{old('telefono_empleado')}}"><br>
<hr>
	DIRECCION<br>
	MUNICIPIO:
	<select>
		<option>LERMA</option>
	</select><br>
	LOCALIDAD:<input type="text" name="localidad" required value="{{old('localidad')}}"><br>
	CALLE:<input type="text" name="calle" id="calle" required value="{{old('calle')}}"><br>
	N# INTERIOR<input type="text" name="num_interior" id="num_interior" required value="{{old('num_interior')}}"><br>	
	N# EXTERIOR<input type="text" name="num_exterior" id="num_exterior" required value="{{old('num_exterior')}}"><br>	
	CP:s<input type="text" name="CP" id="CP" required value="{{old('CP')}}"><br>
	<button type="submit">GUARDAR</button>
</form>
</center>
</body>
</html>