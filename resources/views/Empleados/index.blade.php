<!DOCTYPE html>
<html>
<head>
	<title>INDEX</title>
	 <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"
  rel = "stylesheet">
  <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
  <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script type="text/javascript">
 $(document).ready(function(){
 	
 });
  </script>
</head>
<body>

<center>
		<table border="4" class="table table-striped table-bordered" style="width:70%" id="a1">
		<thead>
		<tr>
			<th><b>NAME</b></th>
			<th><b>APELLIDO PATERNO</b></th>
			<th><b>APELLIDO MATERNO</b></th>
			<th><b>TELEFONO</b></th>
			<th><b>DIRECCION</b></th>
			<th><b>MODIFICAR</b></th>
			<th><b>ELIMINAR</b></th>
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
</center>

>>>>>>> 36b7c66f6630c06ca7a8a324b431d80d8c9d7825
</body>
</html>