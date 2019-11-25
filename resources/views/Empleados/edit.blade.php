<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>

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
    	<h1>ACTUALIZAR EMPLEADO</h1>
            <form action="{{ route('empleado.update', ['id' => $empleado->id]) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                    <label class="form-control-label"> Nombre del empleado:</label>
                        <input type="text" class="form-control" value="{{$empleado->name}}" name="name" onkeypress="return soloLetras(event)" onpaste="return false;" required="true">
                        <br>
                    <label class="form-control-label"> Sexo:</label>
                        Mujer<input type="radio" class="form-control" value="0" name="sexo">
                        Hombre<input type="radio" class="form-control" value="1" name="sexo">
                        <br>
                    <label class="form-control-label"> Telefono del empleado:</label>
                        <input type="text" class="form-control" value="{{$empleado->telefono_empleado}}" name="telefono_empleado" onkeypress="return solonumeros(event)" onpaste="return false;" required="true">
                        <br>
                    <label class="form-control-label"> Calle:</label>
                        <input type="text" class="form-control" value="{{$empleado->calle}}" name="calle" onkeypress="return soloLetras(event)" onpaste="return false;" required="true">
                        <br>
                    <label class="form-control-label"> Numero interir:</label>
                        <input type="text" class="form-control" value="{{$empleado->num_interior}}" name="num_interior" onkeypress="return solonumeros(event)" onpaste="return false;" required="true">
                        <br> 
                    <label class="form-control-label"> Numero exterior:</label>
                        <input type="text" class="form-control" value="{{$empleado->num_exterior}}" name="num_exterior" onkeypress="return solonumeros(event)" onpaste="return false;" required="true">
                        <br>
                    <label class="form-control-label"> Codigo Postal:</label>
                        <input type="text" class="form-control" value="{{$empleado->CP}}" name="CP" onkeypress="return solonumeros(event)" onpaste="return false;" required="true">
                        <br>
                    <label class="form-control-label"> Localidad:</label>
                        <input type="text" class="form-control" value="{{$empleado->localidad}}" name="localidad" onkeypress="return soloLetras(event)" onpaste="return false;" required="true">
                        <br>
                     <label  class="control-label">Seleccione Municipio</label>
                            <select id="municipio_id"   name="municipio_id"  class="form-control round">
                                @foreach($municipios as $municipio)            
                                <option value="{{ $municipio->id }}" >{{ $municipio->nombre }}</option>
                                @endforeach
                            </select>
                        <br>              
                    <button type="submit" name="button" class="btn btn-primary">Guardar</button>
            </form>

    </body>
</html>