<!DOCTYPE html>
<html>
<head>
	<title>Crear Empleado</title>
</head>
<body>
	<p align="center">Empleados registrados!!!</p>
	<center>
		<button onclick="window.location.href='/empleado/create'" type="button" class="btn btn-info btn-lg" >Agregar empleado</button>
		<br>
			<table border="2">
				<thead>
					<th>Nombre</th>
					<th>Sexo</th>
					<th>telefono</th>
					<th>Calle</th>
					<th>Numero interior</th>
					<th>Numero exterior</th>
					<th>Codigo postal</th>
					<th>Localidad</th>
					<th>Municipio</th>		
				</thead>
				<tfoot>
					<th>Nombre</th>
					<th>Sexo</th>
					<th>telefono</th>
					<th>Calle</th>
					<th>Numero interior</th>
					<th>Numero exterior</th>
					<th>Codigo postal</th>
					<th>Localidad</th>
					<th>Municipio</th>	
				</tfoot>
				<tbody>
					@foreach ($empleados as $i => $empleado)
	                <tr id="row{{$empleado->id}}">
	                        <td>{{ $empleado->name }}</td>
	                        <td>{{ $empleado->sexo }}</td>
	                        <td>{{ $empleado->telefono_empleado }}</td>
	                        <td>{{ $empleado->calle }}</td>
	                        <td>{{ $empleado->num_interior }}</td>
	                        <td>{{ $empleado->num_exterior }}</td>
	                        <td>{{ $empleado->CP }}</td>
	                        <td>{{ $empleado->localidad }}</td>
	                        <td>{{ $empleado->municipio->nombre}}</td>
	                        <td>
	                        	<a href="/empleado/{{$empleado->id}}/edit"><button><img src="{{asset('img/editar.png')}}" width="30" height="30"></button>
                        		</a>
			                        <form id="eliminarEmpleado"action="{{route('empleado.destroy', $empleado->id)}}" method="POST">
			                                {{method_field('DELETE')}}
			                                {{ csrf_field() }}
			                                <button type="submit" value="Eliminar"><img src="{{asset('img/eliminar.png')}}" width="30" height="30"></button>
			                        </form>
                        </td> 
	                </tr>
	                @endforeach 
					
				</tbody>
			</table>
	</center>
</body>
</html>