@extends('admin.layout')

@section('content')
	<center>
		<h1>MODIFICAR USUARIO</h1>
		@if($errors->any())
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif
		<form method="POST" action="{{route('users.update',$user)}}">
			{{method_field('PUT')}}
			{{csrf_field()}}
					<label for="name">Nombre</label>
                    <input type="num" name="name" id="name" value="{{old('name',$user->name)}}" required>
                    <br>
			  	SEXO:
                    Hombre<input type="radio" name="sexo" value="0" checked="">
                    Mujer<input type="radio" name="sexo" value="1">
                    <br>
                    <label for="telefono_user">Telefono</label>
                    <input type="num" name="telefono_user" id="telefono_user" value="{{old('telefono_user',$user->telefono_user)}}" required>
                    <br>
                    <label for="calle">Calle</label>
                    <input type="text" name="calle" id="calle" value="{{old('calle',$user->calle)}}" required>
                    <br>
                    <label for="num_interior">Num Interior</label>
                    <input type="num" name="num_interior" id="num_interior" value="{{old('num_interior',$user->num_interior)}}" required>
                    <br>
                    <label for="num_exterior">Num Exterior</label>
                    <input type="num" name="num_exterior" id="num_exterior" value="{{old('num_exterior',$user->num_exterior)}}" required>
                    <br>
                    <label for="CP">CP</label>
                    <input type="num" name="CP" id="telefono_user" value="{{old('CP',$user->telefono_user)}}" required>
                    <br>
                    <label for="localidad">Localidad</label>
                    <input type="text" name="localidad" id="localidad" value="{{old('localidad',$user->localidad)}}" requiredd>
                    <br>
                    <button type="submit">GUARDAR</button>
		</form>
	</center>
     <a href="{{route('users.index')}}">Regresar al listado</a>

@endsection