<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		 @page {
                margin: 100px 25px;
                align-content: center;
            }
		header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                background-color:  #0F6766;
                color: white;
                text-align: center;
                line-height: 35px;
            }
		footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                /** Extra personal styles **/
                background-color: #0F6766;
                color: white;
                text-align: center;
                line-height: 35px;
            }

	</style>
</head>
<body>
	   <header>
           CORTE DE CAJA
        </header>
<center>


<table align="center">
	<tr>
		<td align="center">
			<img src="https://drive.google.com/uc?id=1sUqoZlVzzcpzQz8IXSon7pJ_9ML0IUd1"style="width:35%">
		</td>
		<td align="center">
			<b>ARBOLEDA RESTAURANTE</b><br>
			<b>TELEFONO : </b> <br>7223423640<br>
			<b>PAGINA WEB : </b><br> www.arboledarestaurante.com<br>
			<b>CORREO : </b> <br>arboleda@arboledarestaurante.com
		</td>
		<td align="center">
			<label style="background-color: #0F6766; width: 80%; color: #FFFFFF">NUMERO DE CORTE</label><br>
			{{$num_corte}}<br>
			<label style="background-color: #0F6766; width: 80%; color: #FFFFFF">FECHA DE CORTE</label><br>
			{{$fecha_corte}}<br>
		</td>
	</tr>
</table>

<br><br><br><br>




<div class="row">
	<div class="col-lg-12">
	    <label style="background-color: #0F6766; width: 90%; color: #FFFFFF">INGRESOS POR TIPO DE PAGO</label><br>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<table border="0" style="width: 90%" align="center">
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
				<td id="suma"  style="border-width: 1px;border:solid">{{$suma}}</td>
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
<br>
		<b>NOMBRE</b>_______________________________________________
		<br>
		<br>
		<br>
		<br>
		<br>
		<b>FIRMA</b>________________________________________________
</center>
<footer>
            Copyright &copy; ARBOLEDA RESTAURANTE
</footer>
</body>
</html>