<!DOCTYPE html>
<html>
<head>
	<title>Agregar Empleado</title>
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
	<a href="{{url('/empleado')}}"><button type="button" class="btn btn-primary">Regresar</button></a>
        <h1>Registra una nuevo empleado</h1>
            <div id="info"></div>
                <form name="formularioempleado" method="POST" action="{{url('empleado')}}" onsubmit="return validarFormulario();">
                {{ csrf_field() }}
                    <div class="form-group ">
                        Nombre del empleado
                        <input type="text" id="name" name="name" onkeypress="return soloLetras(event)" onpaste="return false;" class="form-control">
                        <br>
                        Mujer
                        <input type="radio" id="sexo" name="sexo" value="0" class="form-control">
                        Hombre
						<input type="radio" id="sexo" name="sexo" value="1" class="form-control">
                        <br>
                        Telefono del empleado
                        <input type="text" id="telefono_empleado" name="telefono_empleado" onkeypress="return solonumeros(event)" onpaste="return false;" class="form-control">
                        <br>
                        Calle
                        <input type="text" id="calle" name="calle" onkeypress="return soloLetras(event)" onpaste="return false;" class="form-control">
                        <br>
                        Numero interior
                        <input type="text" id="num_interior" name="num_interior" onkeypress="return solonumeros(event)" onpaste="return false;" class="form-control">
                        <br>
                        Numero exterior
                        <input type="text" id="num_exterior" name="num_exterior" onkeypress="return solonumeros(event)" onpaste="return false;" class="form-control">
                        <br>
                        Codigo Postal	
                        <input type="text" id="CP" name="CP" onkeypress="return solonumeros(event)" onpaste="return false;" class="form-control">
                        <br>
                        Localidad
                        <input type="text" id="localidad" name="localidad" onkeypress="return soloLetras(event)" onpaste="return false;" class="form-control">
                        <br>
                        <label  class="control-label">Seleccione Municipio</label>
                            <select id="municipio_id"   name="municipio_id"  class="form-control round">
                                @foreach($municipios as $municipio)            
                                <option value="{{ $municipio->id }}" >{{ $municipio->nombre }}</option>
                                @endforeach
                            </select>
                        <br>
                        <button type="submit" class="btn btn-success btn-lg btn-block">GUARDAR</button>
                    </div>
                </form>

                <script type="text/javascript">

                            function validarFormulario(){

                                var texto;
                                var name = document.forms["formularioempleado"]["name"].value;

                                if(name == null || name == ""){
                                    texto = "<span style = 'color:red'>Por favor ingresa un nombre de empleado</span>"
                                    document.getElementById("info").innerHTML = texto;
                                    return false; 
                                }
                                else if(name.length < 5){
                                texto = "<span style = 'color:red'>Nombre debe de tener al menos 5 caracteres</span>"
                                document.getElementById("info").innerHTML = texto;
                                return false;
                                }

                                var telefono_empleado = document.forms["formularioempleado"]["telefono_empleado"].value;

                                if(telefono_empleado == null || telefono_empleado == ""){
                                    texto = "<span style = 'color:red'>Por favor ingresa un numero telefonico de empleado</span>"
                                    document.getElementById("info").innerHTML = texto;
                                    return false; 
                                }
                                else if(telefono_empleado.length < 5){
                                texto = "<span style = 'color:red'>Numero debe de tener al menos 10 numeros</span>"
                                document.getElementById("info").innerHTML = texto;
                                return false;
                                }

                                var calle = document.forms["formularioempleado"]["calle"].value;

                                if(calle == null || calle == ""){
                                    texto = "<span style = 'color:red'>Por favor ingresa una calle</span>"
                                    document.getElementById("info").innerHTML = texto;
                                    return false; 
                                }
                                else if(calle.length < 5){
                                texto = "<span style = 'color:red'>Numero debe de tener al menos 5 caracteres</span>"
                                document.getElementById("info").innerHTML = texto;
                                return false;
                                }

                                var num_interior = document.forms["formularioempleado"]["num_interior"].value;

                                if(num_interior == null || num_interior == ""){
                                    texto = "<span style = 'color:red'>Por favor ingresa un numero interior</span>"
                                    document.getElementById("info").innerHTML = texto;
                                    return false; 
                                }
                                else if(num_interior.length < 0){
                                texto = "<span style = 'color:red'>Numero debe de tener al menos 1 caractere</span>"
                                document.getElementById("info").innerHTML = texto;
                                return false;
                                }

                                var num_exterior = document.forms["formularioempleado"]["num_exterior"].value;

                                if(num_exterior == null || num_exterior == ""){
                                    texto = "<span style = 'color:red'>Por favor ingresa un numero exterior</span>"
                                    document.getElementById("info").innerHTML = texto;
                                    return false; 
                                }
                                else if(num_exterior.length < 0){
                                texto = "<span style = 'color:red'>Numero debe de tener al menos 1 caractere</span>"
                                document.getElementById("info").innerHTML = texto;
                                return false;
                                }

                                var CP = document.forms["formularioempleado"]["CP"].value;

                                if(CP == null || CP == ""){
                                    texto = "<span style = 'color:red'>Por favor ingresa codigo postal</span>"
                                    document.getElementById("info").innerHTML = texto;
                                    return false; 
                                }
                                else if(CP.length < 5){
                                texto = "<span style = 'color:red'>Numero debe de tener al menos 5 caracteres</span>"
                                document.getElementById("info").innerHTML = texto;
                                return false;
                                }

                                var localidad = document.forms["formularioempleado"]["localidad"].value;

                                if(localidad == null || localidad == ""){
                                    texto = "<span style = 'color:red'>Por favor ingresa Localidad</span>"
                                    document.getElementById("info").innerHTML = texto;
                                    return false; 
                                }
                                else if(localidad.length < 5){
                                texto = "<span style = 'color:red'>Numero debe de tener al menos 5 caracteres</span>"
                                document.getElementById("info").innerHTML = texto;
                                return false;
                                }
                            }    
                    </script>

</body>
</html>