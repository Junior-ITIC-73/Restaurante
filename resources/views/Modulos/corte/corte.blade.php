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

  			//Calculo la diferencia de lo ingresado de efectivo y lo resto con total efectivo
			total_efectivo=parseInt($("#total_efectivo").val());
		 	cantidad_efectivo=parseInt($("#cantidad_efectivo").val());
		 	diferencia_efectivo = (total_efectivo-cantidad_efectivo); 
		  	$("#diferencia_efectivo").val(diferencia_efectivo);

	  		 //cambia de color rojo o negro la cantidad de diferencia
	  	    if (diferencia_efectivo < 0){
    			$("#diferencia_efectivo").attr('style', 'color:#FF0000;');
    		}else{
    			$("#diferencia_efectivo").attr('style', 'color:#000000;');
    		}

    		//si las 2 cantidades ya son introducidas  realizo la suma y la resta en  la diferencia total
		  	if ($("#cantidad_efectivo").val().length > 0  &&   $("#cantidad_tarjeta").val().length > 0 ) {
        		suma = (cantidad_efectivo + parseInt($("#cantidad_tarjeta").val()));
		  		monto_cobrado = parseInt($("#monto_cobrado").val());
        		resta = (monto_cobrado - suma);
        		$("#total_diferencia").val(resta);
        		//cambia de color rojo o negro la cantidad de diferencia
	  			if(resta < 0){
    				$("#total_diferencia").attr('style', 'color:#FF0000;');
    			}else{
    				$("#total_diferencia").attr('style', 'color:#000000;');
    			}
        	}
        	//si  borran la cantidad a  longitud 0 , regresa al cantidad original
		  	if( $("#cantidad_efectivo").val().length <= 0 ) {
           		$("#diferencia_efectivo").val("0");
           		$("#total_diferencia").val(monto_cobrado);
        	}

        	largo_de_numero = ($("#total_efectivo").val().length);
        	 $("#cantidad_efectivo").attr('maxlength', largo_de_numero);
	});


  	$("#cantidad_tarjeta").keyup(function(){
			total_tarjeta=parseInt($("#total_tarjeta").val());			
		 	cantidad_tarjeta=parseInt($("#cantidad_tarjeta").val());
		 	diferencia_tarjeta = (total_tarjeta-cantidad_tarjeta); 
		  	$("#diferencia_tarjeta").val(diferencia_tarjeta);


		  	//cambia de color rojo o negro la cantidad de diferencia
	  		if(diferencia_tarjeta < 0){
    			$("#diferencia_tarjeta").attr('style', 'color:#FF0000;');
    		}else{
    			$("#diferencia_tarjeta").attr('style', 'color:#000000;');
    		}


		  	if ($("#cantidad_efectivo").val().length > 0  &&   $("#cantidad_tarjeta").val().length > 0 ) {
        		suma = (cantidad_tarjeta + parseInt($("#cantidad_efectivo").val()));
		  		monto_cobrado = parseInt($("#monto_cobrado").val());
        		resta = (monto_cobrado - suma);
        		$("#total_diferencia").val(resta);
        		//cambia de color rojo o negro la cantidad de diferencia
	  			if(resta < 0){
    				$("#total_diferencia").attr('style', 'color:#FF0000;');
    			}else{
    				$("#total_diferencia").attr('style', 'color:#000000;');
    			}
        	}

        	if( $("#cantidad_tarjeta").val().length <= 0 ) {
           		$("#diferencia_tarjeta").val("0");
           		$("#total_diferencia").val(monto_cobrado);
        	}


        	//limitar longitud de  numeros respecto  a el total 
        	largo_de_numero = ($("#total_tarjeta").val().length);
        	 $("#cantidad_tarjeta").attr('maxlength', largo_de_numero);
	  	});



  	});
  	function solonumeros(e){
                    key = e.keyCode || e.which;
                    teclado = String.fromCharCode(key);
                    numeros = "0123456789";
                    especiales = "8-37-38-46";
                    teclado_especial = false;
                    
                    for(var i in especiales){
                        if(key == especiales[i]){
                            teclado_especial = true;
                        }
                    }
                    if(numeros.indexOf(teclado) == -1 && !teclado_especial){
                    return false;
                    } 

                }
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
				<td align="center"><button><a href="{{route('modulo.detalleVentasEfectivo')}}">MAS DETALLES</a></button></td>
				<td>EFECTIVO</td>
				<td><input type="text" name="total_efectivo" readonly value="{{$total_efectivo}}" id="total_efectivo"></td>
				<td><input type="text" name="cantidad_efectivo" id="cantidad_efectivo" placeholder="Ingresa cantidad total" onkeypress="return solonumeros(event)" onpaste="return false;"></td>
				<td><input type="text" name="diferencia_efectivo" id="diferencia_efectivo" readonly></td>
			</tr>
			<tr>
				<td align="center"><button><a href="{{route('modulo.detalleVentasTarjeta')}}">MAS DETALLES</a></button></td>
				<td>TARJETA</td>
				<td><input type="text" name="total_tarjeta" readonly value="{{$total_tarjeta}}" id="total_tarjeta" ></td>
				<td><input type="text" name="cantidad_tarjeta" placeholder="ingrese total de baucher" id="cantidad_tarjeta" id="cantidad_tarjeta" onkeypress="return solonumeros(event)" onpaste="return false;"></td>
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