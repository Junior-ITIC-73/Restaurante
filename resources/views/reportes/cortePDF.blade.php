<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"
  rel = "stylesheet">
  <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
  <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script type="text/javascript">
		$(document).ready(function(){
			cantidad_efectivo=parseInt($("#cantidad_efectivo").html());
			cantidad_tarjeta=parseInt($("#cantidad_tarjeta").html());
			suma = (cantidad_tarjeta + cantidad_tarjeta);
			$("#total_cantidad_contada").html(suma);
		});
	</script>
</head>
<body>
<center>
<div class="row">
	<div class="col-md-4">
		<img src="{{asset('/img/logo.png')}}"  style="width:80%">
	</div>
	<div class="col-md-4"><br><br><br>
		<b>ARBOLEDA RESTAURANTE</b><br>
		<b>TELEFONO : </b> 7223423640<br>
		<b>PAGINA WEB : </b> www.arboledarestaurante.com<br>
		<b>CORREO : </b> arboleda@arboledarestaurante.com
	</div>

	<div class="col-md-4"><br><br>
		<label style="background-color: #0F6766; width: 80%; color: #FFFFFF"  >NUMERO DE CORTE</label><br>
		{{$num_corte}}<br>
		<label style="background-color: #0F6766; width: 80%; color: #FFFFFF">FECHA DE CORTE</label><br>
		{{$fecha_corte}}<br>
	</div>
</div><br>
<div class="row">
	<div class="col-lg-12">
	    <label style="background-color: #0F6766; width: 90%; color: #FFFFFF">INGRESOS POR TIPO DE PAGO</label><br>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<table border="0" style="width: 90%">
			<tr  align="center">
				<td><b>TIPO DE PAGO</b></td>
				<td><b>MONTO COBRADO</b></td>
				<td><b>MONTO CONTADO</b></td>
				<td><b>DIFERENCIA</b></td>
			</tr>
			<tr  align="center">
				<td>1.-EFECTIVO</td>
				<td>{{$total_efectivo}}</td>
				<td id="cantidad_efectivo">{{$cantidad_efectivo}}</td>
				<td>{{$diferencia_efectivo}}</td>
			</tr>
			<tr  align="center">
				<td>2.-TARJETA</td>
				<td>{{$total_tarjeta}}</td>
				<td id="cantidad_tarjeta">{{$cantidad_tarjeta}}</td>
				<td>{{$diferencia_tarjeta}}</td>
			</tr>
			<tr  align="center">
				<td><label style="background-color: #0F6766; width: 80%; color: #FFFFFF">ACUMULADOS</label></td>
				<td  style="border-width: 1px;border:solid">{{$monto_cobrado}}</td>
				<td id="total_cantidad_contada"  style="border-width: 1px;border:solid"></td>
				<td style="border-width: 1px;border:solid">{{$total_diferencia}}</td>
			</tr>
			<tr  align="center">
				<td><label style="background-color: #0F6766; width: 80%; color: #FFFFFF">SALDO INICIAL</label></td>
				<td style="border-width: 1px;border:solid">{{$saldo_inicial}}</td>
				<td></td>
				<td></td>
			</tr>
			<tr  align="center">
				<td><label style="background-color: #0F6766; width: 80%; color: #FFFFFF">TOTAL CAJA</label></td>
				<td style="border-width: 1px;border:solid"><b>{{$total_en_caja}}</b></td>
				<td></td>
				<td></td>
			</tr>
		</table>
	</div>
</div>
<br>
<br>
<br>
<div class="row">
	<div class="col-md-6">
		<b>NOMBRE</b>________________________________________________
	</div>
	<div class="col-md-6">
		<b>FIRMA</b>________________________________________________
	</div>
</div>
</center>

</body>
</html>