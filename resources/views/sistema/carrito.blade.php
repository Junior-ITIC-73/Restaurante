<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	Este es el carrito de compras
	<form method="POST" action="{{route('realizar.orden',$mesa)}}">
		<input type="text" name="mesa" id="mesa" value="{{$mesa->numero_mesa}}">
		{{csrf_field()}}
		<button type="submit">Realizar Orden</button>
	</form>

	@if($mesa->disponible == 1)
		<form method="POST" action="{{route('terminar.orden',$mesa)}}">
			<input type="text" name="mesa" id="mesa" value="{{$mesa->numero_mesa}}">
			{{csrf_field()}}
			<button type="submit">Terminar Orden</button>
		</form>
	@endif
</center>
</body>
</html>