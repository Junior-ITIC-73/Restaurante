@extends('admin.admin')

@section('header')
	<h1 align="center">
		Listado de Usuarios 
	</h1>
@endsection

@section('content')		
    <center><a href="{{route('users.create')}}"><button type="button" class="btn btn-primary">Agregar Usuario</button></a></center>
	<div class="container">
		<div class="col-md-12 col-xs-12">
		<div class="cold-md-12">
        <table border="4" class="table table-striped table-bordered" style="width:90%" id="a1" align="left">
            <tr>
              <td><a href="{{URL::action('UserController@reportepdf',['criterio'=>$criterio])}}" target="somewhere_new"><i class="fa fa-fw fa-file-pdf-o"></i>PDF</a></td>
              <td>
                <a href="{{URL::action('UserController@reporteExcel',['criterio'=>$criterio])}}"><i class="fa fa-fw fa-file-excel-o"></i>EXCEL</a>
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
                <form action="{{route('busqueda.usuario')}}" method="POST">
				  	@csrf
				    <input type="search" placeholder="Buscar" aria-label="Buscar" name="criterio" placeholder="{{old('criterio')}}">
                  <button class="btn btn-warning" type="submit">BUSCAR</button>
                </form>
              </td>
            </tr>
          </table>
          </div>


		<div class="cold-md-12">
		<table border="4" class="table table-striped table-bordered" style="width:90%" id="a1" align="left">
			<thead style="background-color: #A9D0F5">
			<tr>
				<th><b>Nombre</b></th>
				<th><b>EMAIL</b></th>
				<th><b>ROL</b></th>
				<th><b>DATOS DEL CLIENTE</b></th>
				<th><b>MODIFICAR</b></th>
				<th><b>ELIMINAR</b></th>
			</tr>
			</thead>
			<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				@if($user->rol_user == 0)
				<td>Admin</td>
				@endif
				@if($user->rol_user == 1)
				<td>Admin</td>
				@endif
				@if($user->rol_user == 2)
				<td>Empleado</td>
				@endif
				@if($user->rol_user == 3)
				<td>Invitado</td>
				@endif
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
		<center>{{$users->links()}}</center>

		</div>
		</div>
	</div>
@endsection
