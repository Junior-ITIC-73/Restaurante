@extends('admin.admin')

@section('header')
	<h1 align="center">
		Listado de Empleados 
	</h1>
@endsection

@section('content')		

<a href="{{route('empleado.create')}}"><button type="button" class="btn btn-primary">Agregar</button></a>

	<div class="container">
		<div class="col-md-12 col-xs-12">
		<div class="cold-md-12">
          <table table border="4" class="table table-striped table-bordered" style="width:100%" id="a" align="center">
            <tr>
              <td>
              	 {{-- <a href="{{URL::action('EmpleadoController@reportepdf',['criterio'=>$criterio])}}"> --}}
              	 	<a href="{{URL::action('EmpleadoController@reportepdf',['criterio'=>$criterio,'sexo'=>$sexo])}}">
              	 	<img src="{{ asset('image/reportepdf.png') }}">
              	 </a></td>
              <td>
                {{-- <a href="{{URL::action('EmpleadoController@reporteExcel',['criterio'=>$criterio])}}"> --}}
                	<a href="{{URL::action('EmpleadoController@reporteExcel',['criterio'=>$criterio])}}">
                	<img src="{{ asset('image/reporteexcel.png') }}"></a>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td> 
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                {{-- <form action="{{route('busqueda.empleado')}}" method="POST">
					  	@csrf
					    <input type="search" placeholder="Buscar" aria-label="Buscar" name="criterio" placeholder="{{old('criterio')}}">
                  <button class="btn btn-warning" type="submit">BUSCAR</button>
                </form> --}}
                <form action="{{route('busqueda.empleado')}}" method="POST">
					  	@csrf
					  	Mujer<input type="radio" name="sexo" value="0" class="sexo">
					    Hombre<input type="radio" name="sexo" value="1" class="sexo">
					    <input type="radio" name="sexo" value="L" class="sexo" checked style="visibility:hidden">

					    <input type="search" placeholder="Buscar" aria-label="Buscar" name="criterio" placeholder="{{old('criterio')}}">
					    <button class="btn btn-warning" type="submit">BUSCAR</button>
					 </form>
              </td>
            </tr>
          </table>
          </div>
		<div class="cold-md-12">
		<table border="4" class="table table-striped table-bordered" style="width:100%" id="a1">
			<thead>
			<tr>
				<th><b>Nombre</b></th>
				<th><b>Apellido Paterno</b></th>
				<th><b>Apellido Materno</b></th>
				<th><b>Sexo</b></th>
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
				@if($empleado->sexo == 1)
				<td>Masculino</td>
				@endif
				@if($empleado->sexo == 0)
				<td>Femenino</td>
				@endif
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
		</div>
	</div>
@endsection

