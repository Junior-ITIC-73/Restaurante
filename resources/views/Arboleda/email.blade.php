
<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Recibido</title>
</head>
<body>
	<h2>Contacto</h2>
	<p><strong>Recibiste un mensaje de : </strong>{{ $msg->nombre}} - {{ $msg->email}} </p>
	<p><strong>Asunto: </strong> {{ $msg->asunto}}</p>
	<p><strong>Contenido: </strong> {{ $msg->msg}}</p>
	<br>	
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
	</tr>
</body>
</html>