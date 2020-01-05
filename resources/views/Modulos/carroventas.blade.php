@extends('admin.admin')

@section('header')
	<h1>
		Listado de Ventas
	</h1>
@endsection

@section('content')

	<div class="row">
		{{-- <div class="col-md-8 col-xs-12">
			@include('modulos.search')
		</div> --}}
		<div class="col-md-12">
			<a href="realizarventa/create" class="pull-right">
				<button class="btn btn-success">Crear Orden</button>
			</a>
		</div>		
	</div>

	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<th>Id</th>
						<th>Usuario</th>
						<th>Folio venta</th>
						<th>Total venta</th>
						<th>Propina</th>
					</thead>
					<tbody>
						@foreach($ventas as $vent)
							<tr>
								<td>{{ $vent->id }}</td>
								<td>{{ $vent->user->name }}</td>
								<td>{{ $vent->folio_venta }}</td>
								<td>{{ $vent->total_venta }}</td>
								<td>{{ $vent->propina }}</td>
								{{-- <td>{{ $per->tipo_documento }}</td>
								<td>{{ $per->num_documento }}</td>
								<td>{{ $per->telefono }}</td>
								<td>{{ $per->email }}</td>
								<td>
									<a href="{{ route('cliente.edit', $per->id) }}">
										<button class="btn btn-info">Editar</button>
									</a>
									<a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal">
										<button class="btn btn-danger">Eliminar</button>
									</a>
								</td>
							</tr>
						@include('ventas.cliente.modal') --}}
						@endforeach
					</tbody>
				</table>
			</div>
{{-- 		{{ $personas->render() }}
 --}}		</div>
	</div>

@endsection