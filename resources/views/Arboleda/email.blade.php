
<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Recibido</title>
</head>
<body>
	<h2>Contacto</h2>
	<p><strong>Recibiste un mnesaje de : </strong>{{ $msg->nombre}} - {{ $msg->email}} </p>
	<p><strong>Asunto: </strong> {{ $msg->asunto}}</p>
	<p><strong>Contenido: </strong> {{ $msg->msg}}</p>
</body>
</html>