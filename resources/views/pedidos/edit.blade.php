<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



	<link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"
	rel = "stylesheet">
	<script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
	<script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
	<script src="{{asset('js/jquery.validate.min.js')}}"></script>
	<script src="{{asset('js/messages_es.js')}}"></script>  
	<style type="text/css">
		.error {
			border: 2px solid #f00;
		}

		.valid {
			border: 2px solid #0ff;
		}

		form, input {
			margin: 10px;
		}
		#docs {
			display: block;
			position: fixed;
			bottom: 0;
			right: 0;
		}
		.uitooltip{
			padding: 8px;
			background:#00D500;
			position: absolute;
			max-width: 300px;
			-webkit-box-shadow: 0 0 5px #aaa;
			box-shadow: 0 0 5px #aaa;
			font-size: 13px;
			white-space: pre-line;
			border-radius: 10px;
		}
	</style>

	<script type="text/javascript"> 
		$(document).ready(function () {
    //----ACTIVAR TOOLTIP EN TODAS LOS INPUT 
    $(document).tooltip({
    	tooltipClass: "uitooltip",
    	position: {
    		my: "left top",
    		at: "right+5 top-5"
    	}
    });

    //------FORMULARIO A VALIDAR CON JQUERY
    $('#pedidos').validate({ // initialize the plugin
    	rules: {
    		user_id: {
    			required: true,
    		},
    		total_pedido:{
    			required: true,
    			number:true
    		},
    		mesa_id:{
    			required:true,
    		},
    		fecha_pedido:{
    			required : true,
    			date: true
    		}
    	},
    	errorPlacement: function(){
    		return false;
    	}
    });
});
</script>

	<center>
		<h1>ALTA PEDIDO</h1>
		@if($errors->any())
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif
		<form method="POST" action="{{route('pedidos.update',$pedido)}}" id="pedidos">
			{{csrf_field()}}
			{{method_field('PUT')}}
			<label>Usuario Anterior</label>
			<input type="text" name="user_id" value="{{old('user_id',$pedido->user->name)}}" readonly>
			<label>Seleccion Usuario Nuevo</label>
                    <select id="user_id"   name="user_id">
                        @foreach($usuarios as $usuario)            
                        <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                        @endforeach
                    </select>
              <br>
            <label>PEDIDO:</label><input type="file" name="lista_pedido"><br>
			<label for="fecha_pedido">Fecha del Pedido</label>
			<input type="text" name="fecha_pedido" id="fecha_pedido" value="{{old('fecha_pedido',$pedido->created_at)}}">
			<br>
			<label>Estado del Pedido:</label><br>
			<label for="camino">En Camino</label><input type="radio" name="estado_pedido" value="0" checked id="camino">
			<label for="entregado">Ya entregado</label><input type="radio" name="estado_pedido" value="1" id="entregado">
			<br>

			<label for="total_pedido">Total del Pedido</label>
			<input type="text" name="total_pedido" id="total_pedido" value="{{old('total_pedido',$pedido->total_pedido)}}">
			<br>
			<label>Numero de Mesa Anterior</label>
			<input type="text" name="mesa_id" value="{{old('mesa_id',$pedido->mesa->numero_mesa)}}" readonly>
			<label>Numero de Mesa Nueva</label>
			<select id="mesa_id" name="mesa_id">
				@foreach($mesas as $mesa)
				<option value="{{$mesa->id}}">{{$mesa->numero_mesa}}</option>
				@endforeach
			</select>

			<br>

{{-- 
			<label for="user_id">Numero de Usuario</label>
			<input type="num" name="user_id" id="user_id" value="{{old('user_id',$pedido->user_id)}}">
			<br>
			<label for="fecha_pedido">Fecha del Pedido</label>
			<input type="text" name="fecha_pedido" id="fecha_pedido" value="{{old('fecha_pedido',$pedido->fecha_pedido)}}">
			<br>
			<label for="estado_pedido">Estado del Pedido</label>
			<input type="text" name="estado_pedido" id="estado_pedido" value="{{old('estado_pedido',$pedido->estado_pedido)}}">
			<br>
			<label for="total_pedido">Total del Pedido</label>
			<input type="text" name="total_pedido" id="total_pedido" value="{{old('total_pedido',$pedido->total_pedido)}}">
			<br>
			<label for="mesa_id">Numero de Mesa</label>
			<input type="text" name="mesa_id" id="mesa_id" value="{{old('mesa_id',$pedido->mesa_id)}}">
			<br> --}}
			<button type="submit">GUARDAR</button>
		</form>
	</center>

</body>
</html 	