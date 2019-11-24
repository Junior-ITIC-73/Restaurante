<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro Arboleda</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	<style>
		form{
			height:  750px;
			width: 900px;
		}
	</style>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
	<a class="navbar-brand" href="{{url('/')}}">Regresar</a>
</div>
</nav>
	<div class="container-login100" style="background-image: url('login/images/sx.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" >
			<form class="login100-form validate-form" method="POST" action="{{route('users.altaLogin')}}" id="usuarios">
				{{csrf_field()}}
				<span class="login100-form-title p-b-37">
					Crea tu cuenta
				</span>

				<div class="wrap-input100  m-b-20" >
					<input type="text" name="name" id="name" value="{{old('name')}}" required title="Introduce tu nombre" placeholder="Nombre de Usuario" class="input100">
					<span class="focus-input100"></span>
					@if($errors->has('name'))
					<label style="color:red">{{$errors->first('name')}}</label>
					@endif
				</div>

				<div class="wrap-input100  m-b-25" >
					<input type="email" name="email" id="email" value="{{old('email')}}" required title="Introduce tu email" placeholder="Email" class="input100">
					<span class="focus-input100"></span>
					@if($errors->has('email'))
					<label style="color:red">{{$errors->first('email')}}</label>
					@endif
				</div>

				<div class="wrap-input100  m-b-25" >
					<input type="password" name="password" id="password" required title="Introduce una Contraseña
					1.-Debe ser mayor a 8 caracteres
					2.-Debe contener numeros y letras" class="input100" placeholder="Password">

					<span class="focus-input100"></span>
					@if($errors->has('password'))
					<label style="color:red">{{$errors->first('password')}}</label>
					@endif
				</div>

				<div class="wrap-input100  m-b-25" >
					<input type="password" name="password_confirmation" id="password_confirmation" required title="Confirma tu contraseña" placeholder="Confirma tu Contraseña"  class="input100">
					<span class="focus-input100"></span>

					@if($errors->has('password_confirmation'))
					<label style="color:red">{{$errors->first('password_confirmation')}}</label>
					@endif
				</div>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Registrarse
					</button>
				</div>
				<br><br>
				<div class="text-center">
					<a href="{{url('/logueo')}}" class="txt2 hov1">
						Inciar Sesión
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('login/vendor/daterangepicker/daterangepicker.j')}}s"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/js/main.js')}}"></script>

</body>
</html>