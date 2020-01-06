@extends('admin.admin')

@section('header')
    <h1 align="center">
        Listado de Mesas
    </h1>
@endsection

@section('content')
    <center><a href="{{route('mesas.create')}}"><button type="button" class="btn btn-primary">Agregar Mesas</button></a></center>
    <div class="container">
        <div class="col-md-12 col-xs-12">
    		<div class="col-md-12">
				<table border="4" class="table table-striped table-bordered" style="width:100%" id="a1" align="center">
					<thead style="background-color: #A9D0F5">
						<tr align="center">
							<th>Numero</th>
							<th>Descripcion</th>
							<th>Modificar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>
					@foreach($mesas as $mesa)
						<tr align="center">
							<td>{{$mesa->numero_mesa}}</td>
							<td>{{$mesa->descripcion_mesa}}</td>
							<td><a href="{{route('mesas.edit',$mesa)}}"><img src="{{asset('img/editar.png')}}" width="30" height="30"></a></td>
							<td><a href="{{route('mesas.destroy',$mesa)}}"><img src="{{asset('img/eliminar.png')}}" width="30" height="30"></a></td>
						</tr>
					@endforeach
					</tbody> 
				</table>
			</div>
        </div>
    </div>
@endsection