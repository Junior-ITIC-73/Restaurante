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

     $('input').keyup(function(){
    /* Obtengo el valor contenido dentro del input */
    var value = $(this).val();
    /* Elimino todos los espacios en blanco que tenga la cadena delante y detrás */
    var value_without_space = $.trim(value);
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

	function soloLetras(e){
		key = e.keyCode || e.which;
		teclado = String.fromCharCode(key).toLowerCase();
		letras = " abcdefghijklmnñopqrstuvwxyz";
		especiales = "8-37-38-46-164";
		teclado_especial = false;
		
		for(var i in especiales){
			if(key == especiales[i]){
				teclado_especial = true; break;
			}
		}
		if(letras.indexOf(teclado) == -1 && !teclado_especial){
			return false;
		} 

	}
	function solonumeros(e){
		key = e.keyCode || e.which;
		teclado = String.fromCharCode(key);
		numeros = "0123456789";
		especiales = "8-37-38-46";
		teclado_especial = false;
		
		for(var i in especiales){
			if(key == especiales[i]){
				teclado_especial = true;
			}
		}
		if(numeros.indexOf(teclado) == -1 && !teclado_especial){
			return false;
		} 

	}
</script>

	<center>
		<h1>ALTA MESAS</h1>
		@if($errors->any())
				@foreach($errors->all() as $error)
					<label style="color:red">{{$error}}</label><br>
				@endforeach
		@endif
		<form method="POST" action="{{route('mesas.store')}}" id="mesas">
			{{csrf_field()}}
			<label for="numero_mesa">Numero Mesa</label>
			<input type="text" name="numero_mesa" id="numero_mesa" value="{{old('numero_mesa')}}" required title="Ingreas un numero de mesa" onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="2" minlength="2">
			<br>
			<label for="descripcion_mesa">Descripcion Mesa</label>
			<input type="text" name="descripcion_mesa" id="descripcion_mesa" value="{{old('descripcion_mesa')}}" required title="Agregue descripcion de la mesa" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="38" minlength="38">
			<br>
			<button type="submit">GUARDAR</button>
		</form>
	</center>
</body>
</html>