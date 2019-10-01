<!DOCTYPE html>
<html>
<head>
	<title>MODIFICAR MESAS</title>
</head>
<body>
	<center>
		<h1>MODIFICAR MESAS</h1>
		@if($errors->any())
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif
		<form method="POST" action="{{route('mesas.update',$mesa)}}">
			{{method_field('PUT')}}
			{{csrf_field()}}
			<label for="numero_mesa">Numero Mesa</label>
			<input type="num" name="numero_mesa" id="numero_mesa" value="{{old('numero_mesa',$mesa->numero_mesa)}}">
			<br>
			<label for="descripcion_mesa">Descripcion Mesa</label>
			<input type="text" name="descripcion_mesa" id="descripcion_mesa" value="{{old('descripcion_mesa',$mesa->descripcion_mesa)}}">
			<br>
			<button type="submit">GUARDAR</button>
		</form>
	</center>

</body>
</html>