<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	<h1>MENU MESAS</h1>

	<table border="4">
		<tr>
			{{-- recorre las mesas de la 1  a 3 ,solo es para acomodar la tabla --}}
			@foreach($mesas->whereBetween('numero_mesa', [1,3]) as $mesa)

			{{-- IF para pone en rojo o en verde las mesas --}}
				@if($mesa->disponible == 0)
					<td style="background-color: red;">
						<a href="{{route('sistema.carrito',$mesa)}}">MESA #{{$mesa->numero_mesa}}</a>
					</td>
				@else	
					<td style="background-color: green">
						<a href="{{route('sistema.carrito',$mesa)}}">MESA #{{$mesa->numero_mesa}}</a><br>

						{{-- Termina venta y vuelve a color rojo de disponible --}}
						    <button><a href="{{route('sistema.carrito',$mesa)}}"> Realiza Venta</button><br>
						{{-- ////////////// --}}
					</td>
				@endif

			@endforeach
		</tr>
		<tr>
			@foreach($mesas->whereBetween('numero_mesa', [4,6]) as $mesa)
				{{-- IF para pone en rojo o en verde las mesas --}}
				@if($mesa->disponible == 0)
					<td style="background-color: red;">
						<a href="{{route('sistema.carrito',$mesa)}}">MESA #{{$mesa->numero_mesa}}</a>
					</td>
				@else	
					<td style="background-color: green">
						<a href="{{route('sistema.carrito',$mesa)}}">MESA #{{$mesa->numero_mesa}}</a><br>

						{{-- Termina venta y vuelve a color rojo de disponible --}}
						    <button><a href="{{route('sistema.carrito',$mesa)}}"> Realiza Venta</button><br>
						{{-- ////////////// --}}
					</td>
				@endif
			@endforeach
		</tr>
		<tr>
			@foreach($mesas->whereBetween('numero_mesa', [7,9]) as $mesa)
				{{-- IF para pone en rojo o en verde las mesas --}}
				@if($mesa->disponible == 0)
					<td style="background-color: red;">
						<a href="{{route('sistema.carrito',$mesa)}}">MESA #{{$mesa->numero_mesa}}</a>
					</td>
				@else	
					<td style="background-color: green">
						<a href="{{route('sistema.carrito',$mesa)}}">MESA #{{$mesa->numero_mesa}}</a><br>

						{{-- Termina venta y vuelve a color rojo de disponible --}}
						    <button><a href="{{route('sistema.carrito',$mesa)}}"> Realiza Venta</button><br>
						{{-- ////////////// --}}
					</td>
				@endif

			@endforeach
		</tr>
		<tr>
			@foreach($mesas->whereBetween('numero_mesa', [10,13]) as $mesa)
				{{-- IF para pone en rojo o en verde las mesas --}}
				@if($mesa->disponible == 0)
					<td style="background-color: red;">
						<a href="{{route('sistema.carrito',$mesa)}}">MESA #{{$mesa->numero_mesa}}</a>
					</td>
				@else	
					<td style="background-color: green">
						<a href="{{route('sistema.carrito',$mesa)}}">MESA #{{$mesa->numero_mesa}}</a><br>

						{{-- Termina venta y vuelve a color rojo de disponible --}}
						    <button><a href="{{route('sistema.carrito',$mesa)}}"> Realiza Venta</button><br>
						{{-- ////////////// --}}
					</td>
				@endif

			@endforeach
		</tr>
{{-- 		<tr>			
			@foreach($mesas as $count => $mesa)
			   @break($count == 6)
				<td>{{$mesa->numero_mesa}}</td>
			@endforeach
		</tr> --}}			
	</table>
</center>
</body>
</html>