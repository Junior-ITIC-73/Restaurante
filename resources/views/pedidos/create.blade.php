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


			 <label>Seleccion Usuario</label>
                    <select id="user_id"   name="user_id">
                        @foreach($usuarios as $usuario)            
                        <option value="{{ $usuario->id}}">{{$usuario->name}}</option>
                        @endforeach
                    </select>
              <br>
            <label>PEDIDO:</label><input type="file" name="lista_pedido"><br>
			<label for="fecha_pedido">Fecha del Pedido</label>
			<input type="date" name="fecha_pedido" id="fecha_pedido" value="{{old('fecha_pedido')}}">
			<br>
			<label>Estado del Pedido:</label><br>
			<label for="camino">En Camino</label><input type="radio" name="estado_pedido" value="0" checked id="camino">
			<label for="entregado">Ya entregado</label><input type="radio" name="estado_pedido" value="1" id="entregado">
			<br>

			<label for="total_pedido">Total del Pedido</label>
			<input type="text" name="total_pedido" id="total_pedido" value="{{old('total_pedido')}}">
			<br>
			<label>Numero de Mesa</label><br>
			<select id="mesa_id" name="mesa_id">
				@foreach($mesas as $mesa)
				<option value="{{$mesa->id}}">{{$mesa->numero_mesa}}</option>
				@endforeach
			</select>

			<br>
			<button type="submit">GUARDAR</button>
		</form>
	</center>

</body>
</html>