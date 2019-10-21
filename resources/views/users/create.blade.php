@extends('admin.layout')

@section('content')


{{-- 	 <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"
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
    	// VALIDACIONES PERSONALIZADAS
    	$.validator.addMethod("alpha", function(value, element) {
    		return /^[a-z]*$/i.test(value);
    	});
    	$.validator.addMethod("password", function(value, element) {
    		return /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/i.test(value);
    	});

    	//-END VALIDACIONES PERSONALIZADAS

    //-ACTIVAR TOOLTIP EN TODAS LOS INPUT
    $(document).tooltip({
    	tooltipClass: "uitooltip",
    	position: {
    		my: "left top",
    		at: "right+5 top-5"
    	}
    });

    //-FORMULARIO A VALIDAR CON JQUERY
    $('#usuarios').validate({ // initialize the plugin
    	rules: {
    		name: {
    			required: true,
    			alpha: true,
    			minlength: 4
    		},
    		email: {
    			required: true,
    			email: true
    		},
    		password:{
    			required:true,
    			password: true
    		},
    		telefono_user: {
    			required: true,
    			number: true,
    			minlength: 10,
    			maxlength:10
    		},
    		calle:{
    			required: true,
    			alpha: false
    		},
    		num_interior:{
    			required: true,
    			number: true,
    		},
    		num_exterior:{
    			required: true,
    			number: true,
    		},
    		CP:{
    			required: true,
    			minlength:5
    		},
    		localidad:{
    			required: true,
    			minlength: 4
    		}
    	},
    	errorPlacement: function(){
    		return false;
    	}
    });
});
</script> --}}

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


<a href="{{route('users.index')}}"><button type="button" class="btn btn-primary">Regresar</button></a>
<center>

	<h1>ALTA DE USUARIOS</h1>
<form method="POST" action="{{route('users.store')}}" id="usuarios">
        {{csrf_field()}}
        <form>
  <div class="form-group row">
        <label for="Nombre" class="col-sm-0 col-form-label">Nombre: </label>
        <div class="col-sm-10">
		<input type="text"  onkeypress="return validar(event) class="form-control" size="50" name="name" id="name" value="{{old('name')}}" required title="Introduce tu nombre" placeholder="Nombre de Usuario" class="form-control">
		@if($errors->has('name'))
		<label style="color:red">{{$errors->first('name')}}</label>
        @endif
        </div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
		<input type="email" name="email" id="email" value="{{old('email')}}" required title="Introduce tu email" placeholder="Email" class="form-control">
		@if($errors->has('email'))
		<label style="color:red">{{$errors->first('email')}}</label>
		@endif
  </div>
  <div class="form-group">
  	<label for="password">Password</label>
		<input type="password" name="password" id="password" required title="Introduce una Contraseña
		1.-Debe ser mayor a 8 caracteres
		2.-Debe contener numeros y letras" class="form-control" placeholder="Password">
		@if($errors->has('password'))
		<label style="color:red">{{$errors->first('password')}}</label>
		@endif
  </div>
  <div class="form-group">
  		<label for="password_confirmation">Confirma tu Password</label>
		<input type="password" name="password_confirmation" id="password_confirmation" required title="Confirma tu contraseña" placeholder="Confirma tu Contraseña" class="form-control">
		@if($errors->has('password_confirmation'))
		<label style="color:red">{{$errors->first('password_confirmation')}}</label>
		@endif
  </div>
		<hr>
		<h2>DATOS DEL CLIENTE</h2>
	<div class="form-group" align="left">
		<label><b>SEXO</b></label>
		<label for="hombre">Hombre</label><input type="radio" name="sexo" value="0" checked id="hombre">
		<label for="mujer">Mujer</label><input type="radio" name="sexo" value="1" id="mujer">
		@if($errors->has('sexo'))
		<label style="color:red">{{$errors->first('sexo')}}</label>
		@endif
	</div>
	<div class="form-group">
		<label for="telefono">Telefono</label>
		<input type="text" name="telefono_user" id="telefono" value="{{old('telefono_user')}}" required title="Ingresa los 10 digitos de tu telefono" class="form-control" placeholder="Telefono">
		@if($errors->has('telefono_user'))
		<label style="color:red">{{$errors->first('telefono_user')}}</label>
		@endif
	</div>
	<div class="form-group">
		<label for="calle">Calle</label>
		<input type="text" name="calle" id="calle" value="{{old('calle')}}" title="Nombre de la Calle" class="form-control" placeholder="Calle">
		@if($errors->has('calle'))
		<label style="color:red">{{$errors->first('calle')}}</label>
		@endif
	</div>
	<div class="form-group">
		<label for="num_interior">Numero Interior</label>
		<input type="text" name="num_interior" id="num_interior" value="{{old('num_interior')}}" required class="form-control" placeholder="Numero Interior" >
		@if($errors->has('num_interior'))
		<label style="color:red">{{$errors->first('num_interior')}}</label>
		@endif
	</div>
	<div class="form-group">
		<label for="num_exterior">Numero Exterior</label>
		<input type="text" name="num_exterior" id="num_exterior" value="{{old('num_exterior')}}" required class="form-control" placeholder="Numero Exterior">
		@if($errors->has('num_exterior'))
		<label style="color:red">{{$errors->first('num_exterior')}}</label>
		@endif
	</div>
	<div class="form-group">
		<label for="CP">Codigo Postal</label>
		<input type="text" name="CP" id="CP" value="{{old('CP')}}" required title="Introduzca su Codigo Postal" class="form-control" placeholder="CP">
		@if($errors->has('CP'))
		<label style="color:red">{{$errors->first('CP')}}</label>
		@endif
	</div>
	<div class="form-group">
		<label for="localidad">Localidad</label>
		<input type="text" name="localidad" id="localidad" value="{{old('localidad')}}" required title="Introduzca su localidad" class="form-control" placeholder="Localidad">
		@if($errors->has('localidad'))
		<label style="color:red">{{$errors->first('localidad')}}</label>
		@endif
	</div>
  <button type="submit" class="btn btn-success btn-lg btn-block">GUARDAR</button>
</form>
</center>
<script>
        function validar(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
        // dejar la línea de patron que se necesite y borrar el resto
        patron =/[A-Za-z\sáéíóú]/; // Solo acepta letras
        //patron = /\d/; // Solo acepta números
        //patron = /\w/; // Acepta números y letras
        //patron = /\D/; // No acepta números
        //
        te = String.fromCharCode(tecla);
        return patron.test(te);
        }
        </script>

@endsection
