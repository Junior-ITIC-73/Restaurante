@extends('admin.layout')

@section('content')
	<a href="{{route('users.index')}}"><button type="button" class="btn btn-primary">Regresar</button></a>
	<center>
		<h1>ALTA DE USUARIOS</h1>
		<form method="POST" action="{{route('users.store')}}">
			{{csrf_field()}}
			<label for="name">Nombre</label>
			<input type="text" name="name" id="name" value="{{old('name')}}" required>
			<br>
			@if($errors->has('name'))
				<label style="color:red">{{$errors->first('name')}}</label>
			@endif<br>

			<label for="email">Email</label>
			<input type="email" name="email" id="email" value="{{old('email')}}" required>
			<br>
			@if($errors->has('email'))
				<label style="color:red">{{$errors->first('email')}}</label>
			@endif<br>

			<label for="password">Password</label>
			<input type="password" name="password" id="password" required>
			<br>
			@if($errors->has('password'))
				<label style="color:red">{{$errors->first('password')}}</label>
			@endif<br>

			<label for="password_confirmation">Confirma tu Password</label>
			<input type="password" name="password_confirmation" id="password_confirmation" required>
			<br>
			@if($errors->has('password_confirmation'))
				<label style="color:red">{{$errors->first('password_confirmation')}}</label>
			@endif<br>

			<hr>

			<h2>DATOS DEL CLIENTE</h2>
			<label>Sexo</label>
			<label for="hombre">Hombre</label><input type="radio" name="sexo" value="0" checked id="hombre">
			<label for="mujer">Mujer</label><input type="radio" name="sexo" value="1" id="mujer">
			<br>
			@if($errors->has('sexo'))
				<label style="color:red">{{$errors->first('sexo')}}</label>
			@endif<br>

			<label for="telefono">Telefono</label>
			<input type="num" name="telefono_user" id="telefono" value="{{old('telefono_user')}}" required>
			<br>
			@if($errors->has('telefono_user'))
				<label style="color:red">{{$errors->first('telefono_user')}}</label>
			@endif<br>

			<label for="calle">Calle</label>
			<input type="text" name="calle" id="calle" value="{{old('calle')}}">
			<br>
			@if($errors->has('calle'))
				<label style="color:red">{{$errors->first('calle')}}</label>
			@endif<br>

			<label for="num_interior">Numero Interior</label>
			<input type="num" name="num_interior" id="num_interior" value="{{old('num_interior')}}" required>
			<br>
			@if($errors->has('num_interior'))
				<label style="color:red">{{$errors->first('num_interior')}}</label>
			@endif<br>

			<label for="num_exterior">Numero Exterior</label>
			<input type="num" name="num_exterior" id="num_exterior" value="{{old('num_exterior')}}" required>
			<br>
			@if($errors->has('num_exterior'))
				<label style="color:red">{{$errors->first('num_exterior')}}</label>
			@endif<br>

			<label for="CP">CP</label>
			<input type="num" name="CP" id="CP" value="{{old('CP')}}" required> 
			<br>
			@if($errors->has('CP'))
				<label style="color:red">{{$errors->first('CP')}}</label>
			@endif<br>

			<label for="localidad">Localidad</label>
			<input type="text" name="localidad" id="localidad" value="{{old('localidad')}}" required>
			<br>
			@if($errors->has('localidad'))
				<label style="color:red">{{$errors->first('localidad')}}</label>
			@endif<br>

			<button type="submit">GUARDAR</button><br>	
		</form>
	</center>

@endsection