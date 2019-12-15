<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Arboleda</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
	<a class="navbar-brand" href="{{url('/')}}">Regresar</a>
</div>
</nav>
	<div class="container-login100" style="background-image: url('login/images/sx.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			
			@if(session()->has('flash'))
			   <div class="alert alert-info">{{session('flash')}}</div>
			@endif


			<form class="login100-form validate-form" method="POST" action="{{ route('logueoLaravel')}}">
                 @csrf

                <div class="text-center">
					 <img src="https://drive.google.com/uc?id=1sUqoZlVzzcpzQz8IXSon7pJ_9ML0IUd1"style="width:70%">
				</div>

				<span class="login100-form-title p-b-37">
					INICIA SESIÓN
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">

					<input class="input100" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
					@if($errors->has('email'))
       				 <label style="color:red">{{$errors->first('email')}}</label>
        			@endif
					<span class="focus-input100"></span>


				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">

					<input class="input100"  id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password" minlength="8">
					@if($errors->has('password'))
        					<label style="color:red">{{$errors->first('password')}}</label>
       				 @endif
					<span class="focus-input100"></span>

				</div>

				<div class="form-check">
                    

                    <label class="form-check-label" for="remember">
                    	<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <strong>Recuerdame</strong>
                        <span class="focus-input100"></span>
                    </label>
                    
                </div>
<br>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit">
						Entrar
					</button>
				</div>
				<div class="text-center">
                <a class="btn btn-link" href="{{ route('restablecer') }}">
                   <strong>{{ __('Forgot Your Password?') }}</strong>
                </a>
                 <div>
                 	<div class="text-center">
                 		ó
                 	<div>
				{{-- <div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Ingresar con
					</span>
				</div> --}}

				{{-- <div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>
					<a href="#" class="login100-social-item">
						<img src="login/images/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div> --}}
				<div class="text-center">
					<a href="{{url('/registro')}}" class="btn btn-link">
						<strong>Registrate</strong>
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>
</html>