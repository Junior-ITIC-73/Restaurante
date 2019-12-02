<!DOCTYPE html>
<html>
<head>
	<title>CORTE</title>
	    <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"
  rel = "stylesheet">
  <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
  <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
 	saldo_inicial=parseInt($("#saldo_inicial").val());
 	monto_cobrado=parseInt($("#monto_cobrado").val());
 	$("#total_diferencia").val(monto_cobrado);
 	total_en_caja = (saldo_inicial+monto_cobrado); 
  	$("#total_en_caja").val(total_en_caja);


  	$("#cantidad_efectivo").keyup(function(){
			total_efectivo=parseInt($("#total_efectivo").val());
		 	cantidad_efectivo=parseInt($("#cantidad_efectivo").val());
		 	diferencia_efectivo = (total_efectivo-cantidad_efectivo); 
		  	$("#diferencia_efectivo").val(diferencia_efectivo);

		  	if ($("#cantidad_efectivo").val().length > 0  &&   $("#cantidad_tarjeta").val().length > 0 ) {
        		suma = (cantidad_efectivo + parseInt($("#cantidad_tarjeta").val()));
        		// alert(suma);
		  		monto_cobrado = parseInt($("#monto_cobrado").val());
		  		// alert(monto_cobrado);
        		resta = (monto_cobrado - suma);
        		// alert(resta);
        		$("#total_diferencia").val(resta);
        	}

		  	// monto_cobrado = parseInt($("#monto_cobrado").val());
     //    	resta = (monto_cobrado - cantidad_efectivo);
     //    	$("#total_diferencia").val(resta);
		  	if( $("#cantidad_efectivo").val().length <= 0 ) {
           		$("#diferencia_efectivo").val("0");
           		$("#total_diferencia").val(monto_cobrado);
        	}


	});

  	// $("#cantidad_efectivo").focusout(function() {
  	// 		alert($("#total_diferencia").val());
   //  });


  	$("#cantidad_tarjeta").keyup(function(){
			total_tarjeta=parseInt($("#total_tarjeta").val());			
		 	cantidad_tarjeta=parseInt($("#cantidad_tarjeta").val());
		 	diferencia_tarjeta = (total_tarjeta-cantidad_tarjeta); 
		  	$("#diferencia_tarjeta").val(diferencia_tarjeta);

		  	if ($("#cantidad_efectivo").val().length > 0  &&   $("#cantidad_tarjeta").val().length > 0 ) {
        		suma = (cantidad_tarjeta + parseInt($("#cantidad_efectivo").val()));
        		// alert(suma);
		  		monto_cobrado = parseInt($("#monto_cobrado").val());
		  		// alert(monto_cobrado);
        		resta = (monto_cobrado - suma);
        		// alert(resta);
        		$("#total_diferencia").val(resta);
        	}

		  	// monto_cobrado = parseInt($("#monto_cobrado").val());
     //    	resta = (monto_cobrado - cantidad_tarjeta);
     //    	$("#total_diferencia").val(resta);
        	if( $("#cantidad_tarjeta").val().length <= 0 ) {
           		$("#diferencia_tarjeta").val("0");
           		$("#total_diferencia").val(monto_cobrado);
        	}

	  	});

  	});
  </script>
</head>
<body>
<CENTER>
	<h1>CORTE DE CAJA</h1>
	<form method="POST" action="{{route('reporte.corte')}}">
		{{csrf_field()}}
	<table border="4" style="width:80%">
		<tbody>
			<tr>
				<td>CORTE # <input type="text" name="num_corte" id="num_corte" value="CDR00000{{$num_corte}}" readonly></td>

				<td>FECHA:<input type="text" name="fecha_corte" value="{{$date}}" readonly></td>
			</tr>
			<tr>
				<td>SALDO INICIAL<input type="text"  name="saldo_inicial" id="saldo_inicial" readonly value="{{$saldo_inicial}}"></td>

				<td  rowspan="4">
				TOTAL DIFERENCIA<input type="text" name="total_diferencia" id="total_diferencia" readonly></td>
			</tr>
			<tr>
				<td>MONTO COBRADO<input type="text" name="monto_cobrado" id="monto_cobrado" value="{{$monto_cobrado}}" readonly></td>
			</tr>
			<tr>
				<td>TOTAL EN CAJA<input type="text" name="total_en_caja" id="total_en_caja" readonly></td>
			</tr>	
	    </tbody>
	</table><br>
	<table border="4"  style="width:80%">
		<thead>
			<tr>
				<th><b>DETALLES VENTAS</b></th>
				<th><b>TIPO PAGO</b></th>
				<th><b>MONTO COBRADO</b></th>
				<th><b>MONTO CONTADO</b></th>
				<th><b>DIFERENCIA</b></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td align="center"><button><a href="{{route('modulo.detalleVentasEfectivo')}}">VENTAS EN EFECTIVO</a></button></td>
				<td>EFECTIVO</td>
				<td><input type="text" name="total_efectivo" readonly value="{{$total_efectivo}}" id="total_efectivo"></td>
				<td><input type="text" name="cantidad_efectivo" id="cantidad_efectivo" placeholder="Ingresa cantidad total"></td>
				<td><input type="text" name="diferencia_efectivo" id="diferencia_efectivo" readonly></td>
			</tr>
			<tr>
				<td align="center"><button>VENTAS EN TARJETA</button></td>
				<td>TARJETA</td>
				<td><input type="text" name="total_tarjeta" readonly value="{{$total_tarjeta}}" id="total_tarjeta" ></td>
				<td><input type="text" name="cantidad_tarjeta" placeholder="ingrese total de baucher" id="cantidad_tarjeta" id="cantidad_tarjeta"></td>
				<td><input type="text" name="diferencia_tarjeta" id="diferencia_tarjeta" readonly></td>
			</tr>
			<tr>
				<td align="center" colspan="5"><button type="submit">REALIZAR CORTE</button></td>
			</tr>
		</tbody>
	</table>
	</form>
</CENTER>
</body>
</html>