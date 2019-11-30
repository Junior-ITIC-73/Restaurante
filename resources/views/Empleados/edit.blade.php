<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>

         
                  
	 <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"
  rel = "stylesheet">
  <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
  <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script type="text/javascript">
 $(document).ready(function(){
 	$('input').keyup(function(){
    /* Obtengo el valor contenido dentro del input */
    var value = $(this).val();
    /* Elimino todos los espacios en blanco que tenga la cadena delante y detrás */
    var value_without_space = $.trim(value);
   });
 });
<script>
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
</head>
<body>
<center>
	MODIFICAR DE EMPLEADOS<br>
	        @if($errors->any())
				@foreach($errors->all() as $error)
					<label style="color:red">{{$error}}</label><br>
				@endforeach
			@endif

<form method="POST" action="{{route('empleado.update',$empleado)}}">
	{{method_field('PUT')}}
	{{csrf_field()}}
	Nombre<input type="text" name="name" id="name" value="{{old('name',$empleado->name)}}" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="20"><br>
	Apellido Paterno<input type="text" name="apellido_paterno" id="apellido_paterno" value="{{old('apellido_paterno',$empleado->apellido_paterno)}}" required onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="20"><br>
	Apellido Materno<input type="text" name="apellido_materno" id="apellido_materno"  value="{{old('apellido_materno',$empleado->apellido_materno)}}" required onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="20"><br>
	Sexo:
	Hombre<input type="radio" name="sexo" value="0" checked>
	Mujer<input type="radio" name="sexo" value="1"><br>
	Telefono:<input type="text" name="telefono_empleado" id="telefono_empleado" value="{{old('telefono_empleado',$empleado->telefono_empleado)}}" required onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="10" minlength="10"><br>
<hr>
	DIRECCION<br><br>
    ESTADO:
    <select>
        <option>MEXICO</option>
    </select><br>
    MUNICIPIO:
    <select>
        <option>LERMA</option>
    </select><br>
	LOCALIDAD:<input type="text" name="localidad" value="{{old('localidad',$empleado->localidad)}}" required onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="20"><br>
	CALLE:<input type="text" name="calle" id="calle" value="{{old('calle',$empleado->calle)}}" required maxlength="20"><br>
	N# INTERIOR<input type="text" name="num_interior" id="num_interior" value="{{old('num_interior',$empleado->num_interior)}}" required onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="4"><br>	
	N# EXTERIOR<input type="text" name="num_exterior" id="num_exterior" value="{{old('num_exterior',$empleado->num_exterior)}}" required onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="4"><br>	
	CP: <input type="text" name="CP" id="CP" value="{{old('CP',$empleado->CP)}}" required onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="5" minlength="5"><br>
	<button type="submit">GUARDAR</button>
</form>
</center>
</body>
</html>