@extends('admin.layout')

@section('content')
        <link rel="stylesheet" href="{{asset('datatables/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('datatables/bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('datatables/css/jquery.dataTables.min.css')}}">
        <link rel="stylesheet" href="{{asset('datatables/css/estilos.css')}}">

	<center>
		<h1>LISTADO DE USUARIOS</h1>
	</center>

		<a href="{{route('users.create')}}"><button type="button" class="btn btn-success">New User</button></BUTTON></a><br>

<div class="container">
	<table border="4" class="table table-striped table-bordered" style="width:100%" id="a1">
		<thead>
		<tr>
			<th><b>NAME</b></th>
			<th><b>EMAIL</b></th>
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
	</tbody>
	</table>
</div>

<script src="{{{ asset('datatables/js/jquery-3.3.1.js')}}}"></script>
<script src="{{{ asset('datatables/js/jquery.dataTables.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/dataTables.bootstrap4.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/dataTables.buttons.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/jszip.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/pdfmake.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/vfs_fonts.js')}}}"></script>
<script src="{{{ asset('datatables/js/buttons.html5.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/buttons.print.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/buttons.print.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/buttons.colVis.min.js')}}}"></script>
<script src="{{{ asset('js/datatables.js')}}}"></script>

@endsection