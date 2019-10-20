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

            </script>
        <h1>Registra una Categoria de Producto</h1>
            <div id="info"></div>
                <form name="formulariocategoria" method="POST" action="{{url('categoria')}}" onsubmit="return validarFormulario();">
                {{ csrf_field() }}
                    <div class="form-group ">
                        <input type="text" id="nombre_categoria" name="nombre_categoria" onkeypress="return soloLetras(event)" onpaste="return false;"> Nombre de la categoria del producto
                        <br>
                        <input type="submit" value="Enviar"/>
                    </div>
                </form>

                    <script type="text/javascript">

                            function validarFormulario(){

                                var texto;
                                var categoria = document.forms["formulariocategoria"]["nombre_categoria"].value;

                                if(categoria == null || categoria == ""){
                                    texto = "<span style = 'color:red'>Por favor ingresa un nombre de categoria</span>"
                                    document.getElementById("info").innerHTML = texto;
                                    return false; 
                                }
                                else if(categoria.length < 5){
                                texto = "<span style = 'color:red'>Categoria debe de tener al menos 5 caracteres</span>"
                                document.getElementById("info").innerHTML = texto;
                                return false;
                                }
                            }    
                    </script>
                    <script src="{{{ asset('datatables/js/jquery-3.3.1.js')}}}"></script>
@endsection