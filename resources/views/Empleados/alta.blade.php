<!DOCTYPE html>
<html>
<head>
	<title>ALTA</title>
    <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"
  rel = "stylesheet">
  <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
  <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script type="text/javascript">
 $(document).ready(function(){
 	$('input').keyup(function(){
    /* Obtengo el valor contenido dentro del input */
    var value = $(this).val();
    /* Elimino todos los espacios en blanco que tenga la cadena delante y detrás */
    var value_without_space = $.trim(value);
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
</head>
<body>
<center>
	ALTA DE EMPLEADOS<br>
        @if($errors->any())
				@foreach($errors->all() as $error)
					<label style="color:red">{{$error}}</label><br>
				@endforeach
		@endif
<form method="POST" action="{{route('empleado.alta')}}">
	{{csrf_field()}}
	Nombre<input type="text" name="name" id="name" required value="{{old('name')}}" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="20"><br>
	Apellido Paterno<input type="text" name="apellido_paterno" id="apellido_paterno" required value="{{old('apellido_paterno')}}" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="10"><br>
	Apellido Materno<input type="text" name="apellido_materno" id="apellido_materno" required value="{{old('apellido_materno')}}" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="10"><br>
	Sexo:
	Hombre<input type="radio" name="sexo" value="0" checked>
	Mujer<input type="radio" name="sexo" value="1"><br>
	Telefono:<input type="text" name="telefono_empleado" id="telefono_empleado" required value="{{old('telefono_empleado')}}" onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="10" minlength="10"><br>
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

	LOCALIDAD:<input type="text" name="localidad" required value="{{old('localidad')}}" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="20"><br>
	CALLE:<input type="text" name="calle" id="calle" required value="{{old('calle')}}"><br>
	N# INTERIOR<input type="text" name="num_interior" id="num_interior" required value="{{old('num_interior')}}" onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="4"><br>	
	N# EXTERIOR<input type="text" name="num_exterior" id="num_exterior" required value="{{old('num_exterior')}}" onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="4"	><br>	
	CP:<input type="text" name="CP" id="CP" required value="{{old('CP')}}" onkeypress="return solonumeros(event)" onpaste="return false;"  maxlength="5" minlength="5"><br>
	<button type="submit" >GUARDAR</button>
</form>
</center>
</body>
</html>