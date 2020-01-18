@extends('admin.admin')

@section('header')
	<h1 align="center">
		Modulo Venta
	</h1>
@endsection

@section('content')

	<div class="row">
		<div class="col-md-12 col-xs-12">
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			
			<form action="{{url('realizarventa')}}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
				
				<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="proveedor">Empleado</label>
						<select name="user_id" id="user_id" class="form-control selectpicker" data-live-search="true">
							@foreach($empleados as $emp)
							<option value="{{ $emp->id }}">
								{{ $emp->name }}
							</option>
							@endforeach
						</select>
					</div>
				</div><!-- fin col-md-3 -->
				<div class="col-md-2">
					<div class="form-group">
						<label for="folio_orden">Folio de Orden</label>
						<input type="text" name="folio_orden" class="form-control" placeholder="Ej: 0001" value="{{ old('folio_orden') }}">
						</select>
					</div>
				</div><!-- fin col-md-3 -->
				<div class="col-md-2">
					<div class="form-group">
						<label for="folio_venta">Folio de Venta</label>
						<input type="text" name="folio_venta" class="form-control" placeholder="Ej: 0001" value="{{ old('folio_venta') }}">
					</div>
				</div><!-- fin col-md-3 -->
				<div class="col-md-2">
					<div class="form-group">
						<label for="tipo_de_pago">Tipo de Pago</label>
						<select name="tipo_de_pago" class="form-control">
							<option value="1">Efectivo</option>
							<option value="2">Tarjeta</option>
						</select> 
					</div>
				</div><!-- fin col-md-3 -->
				<div class="col-md-2">
					<div class="form-group">
						<label for="proveedor">Mesa</label>
						<select name="mesa_id" id="mesa_id" class="form-control selectpicker" data-live-search="true">
							@foreach($mesas as $mes)
							<option value="{{ $mes->id }}">
								{{ $mes->numero_mesa }}
							</option>
							@endforeach
						</select>
					</div>
				</div><!-- fin col-md-3 -->
				</div><!-- fin row cabecera -->

				<div class="row">
					<div class="panel panel-body panel-primary">
						<div class="col-md-4">
							<div class="form-group">
								<label for="menu">Platillo</label>
							<select name="pid" id="pid" class="form-control selectpicker" data-live-search="true">
									@foreach($menus as $men)
									<option value="{{ $men->id }}">
										{{ $men->nombre_platillo }}
									</option>
									@endforeach
							</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="pcantidad">Cantidad</label>
								<input type="number" name="pcantidad" id="pcantidad" class="form-control" placeholder="Cantidad">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="pprecio_venta">Precio Venta</label>
								<input type="number" name="pprecio_venta" id="pprecio_venta" class="form-control" placeholder="Precio Venta">
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<button type="button" id="bt_add" class="btn btn-primary">
									Agregar
								</button>
							</div>
						</div>
						<div class="col-md-12">
							<table id="detalles" class="table table-striped table-bordered table-hover table-condensed" style="margin-top: 10px">
								<thead style="background-color: #A9D0F5">
									<th>Opciones</th>
									<th>Platillo</th>
									<th>Cantidad</th>
									<th>Precio Venta</th>
									<th>Subtotal</th>
								</thead>
								<tfoot>
									<th>Total</th>
									<th></th>
									<th></th>
									<th></th>
									<th id="to"></th>
									<th>
										<h4 id="total">0.00</h4>
										Capturar total sugerido: $<input type="text" id="w" name="total">
									</th>
								</tfoot>
								<tbody>
									
								</tbody>
							</table>
						</div>

					</div><!-- panel-body -->
				</div><!-- fin row detalle -->
				
				<div class="row">
				<div class="col-md-12" id="guardar">
					<div class="form-group">
						<button class="btn btn-primary" type="submit" onclick="return confirm('Estas seguro del precio total')"> 
							Guardar
						</button>
					</div>
				</div>
				</div><!-- fin row buttons -->
			</form>

		</div>
	</div>

@push('scripts')
<script>
	
	$(document).ready(function(){
		$("#bt_add").click(function(){
			agregar();
		});
	});
	$(document).ready(function(){
        $("#boton").click(function(){
		    $("#total").each(function(){
        	    //alert($(this).text())
        	    $(this).text()
        	    //var ya = $(this).text()
        	    //$("#btn1").append("<input type='text' value='"+ya+"'");
        	});
		});
	});
	var cont = 0;
	var total = 0;
	var subtotal = [];
	//Cuando cargue el documento
	//Ocultar el botón Guardar
	$("#guardar").hide();
	function agregar(){
		//Obtener los valores de los inputs
		id_platillo = $("#pid").val();
		platillo = $("#pid option:selected").text();
		cantidad = $("#pcantidad").val();
		//precio_compra = $("#pprecio_compra").val();
		precio_venta = $("#pprecio_venta").val();
		//Validar los campos
		if(id_platillo != "" && cantidad > 0 && precio_venta != ""){
			//subtotal array inicie en el indice cero
			subtotal[cont] = (cantidad * precio_venta);
			total = total + subtotal[cont];
			var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+')">X</button></td><td><input type="hidden" name="id_platillo[]" value="'+id_platillo+'">'+platillo+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input type="number" name="precio_venta[]" value="'+precio_venta+'" onlyread></td><td>'+subtotal[cont]+'</td></tr>';
			cont++;
			limpiar();
			$("#total").html("$" + total);
			evaluar();
			$("#detalles").append(fila);
		}else{
			alert("Error al ingresar datos de venta, datos incompletos, llenar todos los campos");
		}
	}
	function limpiar(){
		$("#pcantidad").val("");
		$("#pprecio_venta").val("");
	}
	//Muestra botón guardar
	function evaluar(){
		if(total > 0){
			$("#guardar").show();
		}else{
			$("#guardar").hide();
		}
	}
	function eliminar(index){
		total = total-subtotal[index];
		$("#total").html("$" + total);
		$("#fila" + index).remove();
		evaluar();
	}
</script>
@endpush
@endsection