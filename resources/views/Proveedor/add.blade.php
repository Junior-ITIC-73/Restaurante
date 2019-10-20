@extends('admin.layout')

@section('content')

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
   <h1>Registra un Proveedor</h1>
        <div id="info"></div>
            <form name="formularioproveedor" method="POST" action="{{url('proveedor')}}" onsubmit="return validarFormulario();">
                {{ csrf_field() }}
                <div class="form-group ">
                    <input type="text" id="razon_social" name="razon_social" onkeypress="return soloLetras(event)" onpaste="return false;"> Razon Social
                    <br>
                    <input type="text" id="RFC" name="RFC" onkeypress="return soloLetras(event)" onpaste="return false;"> RFC 
                    <br>
                    <input type="text" id="telefono_proveedor" name="telefono_proveedor" onkeypress="return solonumeros(event)" onpaste="return false;"> Telefono
                    <br>
                    <input type="text" id="calle" name="calle" onkeypress="return soloLetras(event)" onpaste="return false;"> Calle
                    <br>
                    <input type="text" id="num_interior" name="num_interior" onkeypress="return solonumeros(event)" onpaste="return false;"> Numero interior
                    <br>
                    <input type="text" id="num_exterior" name="num_exterior" onkeypress="return solonumeros(event)" onpaste="return false;"> Numero exterior
                    <br>
                    <input type="text" id="CP" name="CP" onkeypress="return solonumeros(event)" onpaste="return false;"> Codigo postal
                    <br>
                    <input type="text" id="localidad" name="localidad" onkeypress="return soloLetras(event)" onpaste="return false;"> Localidad
                    <br>
                    <input type="submit" value="Enviar"/>
                </div>
            </form>

            <script type="text/javascript">

                function validarFormulario(){

                    var texto;
                    var rs = document.forms["formularioproveedor"]["razon_social"].value;
                    var rfc = document.forms["formularioproveedor"]["RFC"].value;
                    var tf = document.forms["formularioproveedor"]["telefono_proveedor"].value;
                    var c = document.forms["formularioproveedor"]["calle"].value;
                    /*var ni = document.forms["formularioproveedor"]["numero_interior"].value;
                    var ne = document.forms["formularioproveedor"]["numero_exterior"].value;*/
                    var cp = document.forms["formularioproveedor"]["CP"].value;
                    var lo = document.forms["formularioproveedor"]["localidad"].value; 


                    if(rs == null || rs == ""){
                        texto = "<span style = 'color:red'>Por favor ingresa tu razon social</span>"
                        document.getElementById("info").innerHTML = texto;
                        return false; 
                    }
                    else if(rs.length < 3){
                    texto = "<span style = 'color:red'>La razon social debe de tener 3 o mas caracteres</span>"
                    document.getElementById("info").innerHTML = texto;
                    return false;
                    }
                    
                    if(rfc == null || rfc == ""){
                        texto = "<span style = 'color:red'>Por favor ingresa tu razon social</span>"
                        document.getElementById("info").innerHTML = texto;
                        return false; 
                    }
                    else if(rfc.length < 3){
                    texto = "<span style = 'color:red'>La razon social debe de tener 3 o mas caracteres</span>"
                    document.getElementById("info").innerHTML = texto;
                    return false;
                    }

                    if(tf == null || tf == ""){
                        texto = "<span style = 'color:red'>Por favor ingresa tu numero telefonico</span>"
                        document.getElementById("info").innerHTML = texto;
                        return false; 
                    }
                    else if(tf.length < 10){
                    texto = "<span style = 'color:red'>El numero telefonico debe de tener 10 caracteres</span>"
                    document.getElementById("info").innerHTML = texto;
                    return false;
                    }

                    if(c == null || c == ""){
                        texto = "<span style = 'color:red'>Por favor ingresa tu calle</span>"
                        document.getElementById("info").innerHTML = texto;
                        return false; 
                    }
                    else if(c.length < 4){
                    texto = "<span style = 'color:red'>La calle debe de tener mas de 4 caracteres</span>"
                    document.getElementById("info").innerHTML = texto;
                    return false;
                    }

                    if(cp == null || cp == ""){
                        texto = "<span style = 'color:red'>Por favor ingresa codigo postal</span>"
                        document.getElementById("info").innerHTML = texto;
                        return false; 
                    }
                    else if(cp.length < 1){
                    texto = "<span style = 'color:red'>El codigo postal debe de tener mas de 5 caracteres</span>"
                    document.getElementById("info").innerHTML = texto;
                    return false;
                    }

                    if(lo == null || lo == ""){
                        texto = "<span style = 'color:red'>Por favor ingresa localidad</span>"
                        document.getElementById("info").innerHTML = texto;
                        return false; 
                    }
                    else if(lo.length < 5){
                    texto = "<span style = 'color:red'>La localidad debe de tener mas de 5 caracteres</span>"
                    document.getElementById("info").innerHTML = texto;
                    return false;
                    }
                }
                
            </script>
            <script src="{{{ asset('datatables/js/jquery-3.3.1.js')}}}"></script>
            <!--Patron de validacion de un rfc-->
            
            <!-- /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/
            -->
@endsection