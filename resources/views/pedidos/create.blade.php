<!DOCTYPE html>
<html>
<head>
	<title>ALTA PEDIDOS</title>
</head>
<body>
	<center>
		<h1>ALTA PEDIDO</h1>
		@if($errors->any())
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif
		<form method="POST" action="{{route('pedidos.store')}}">
			{{csrf_field()}}
			<label for="user_id">Numero de Usuario</label>
			<input type="num" name="user_id" id="user_id" value="{{old('user_id')}}">
			<br>
			<label for="fecha_pedido">Fecha del Pedido</label>
			<input type="date" name="fecha_pedido" id="fecha_pedido" value="{{old('fecha_pedido')}}">
			<br>
			<label for="estado_pedido">Estado del Pedido</label>
			<input type="text" name="estado_pedido" id="estado_pedido" value="{{old('estado_pedido')}}">
			<br>
			<label for="total_pedido">Total del Pedido</label>
			<input type="text" name="total_pedido" id="total_pedido" value="{{old('total_pedido')}}">
			<br>
			<label for="mesa_id">Numero de Mesa</label>
			<input type="text" name="mesa_id" id="mesa_id" value="{{old('mesa_id')}}">
			<br>
			<button type="submit">GUARDAR</button>
		</form>
	</center>

</body>
</html>