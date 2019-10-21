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
    $('#mesas').validate({ // initialize the plugin
    	rules: {
    		numero_mesa: {
    			required: true,
    			digits: true
    		},
    		descripcion_mesa:{
    			required: true
    		}
    	},
    	errorPlacement: function(){
    		return false;
    	}
    });
});
</script>

	<center>
		<h1>ALTA MESAS</h1>
		@if($errors->any())
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif
		<form method="POST" action="{{route('mesas.store')}}" id="mesas">
			{{csrf_field()}}
			<label for="numero_mesa">Numero Mesa</label>
			<input type="text" name="numero_mesa" id="numero_mesa" value="{{old('numero_mesa')}}" required title="Ingreas un numero de mesa">
			<br>
			<label for="descripcion_mesa">Descripcion Mesa</label>
			<input type="text" name="descripcion_mesa" id="descripcion_mesa" value="{{old('descripcion_mesa')}}" required title="Agregue descripcion de la mesa">
			<br>
			<button type="submit">GUARDAR</button>
		</form>
	</center>
</body>
</html>