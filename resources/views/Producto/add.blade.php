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
<h1>Registra un Producto</h1>
    <div id="info"></div>
        <form name="formularioproducto" method="POST" action="{{url('producto')}}" onsubmit="return validarFormulario();">
            {{ csrf_field() }}
            <div class="form-group ">
                 Nombre del producto
                <input class="form-control" type="text" id="nombre_producto" name="nombre_producto" onkeypress="return soloLetras(event)" onpaste="return false;">
                <br>
            <div>   
            <div class="form-group ">
                Cantidad 
                <input class="form-control" type="num" id="cantidad" name="cantidad" onkeypress="return solonumeros(event)" onpaste="return false;"> 
                <br>
            <div>  
            <div class="form-group ">
                Costo
                <input class="form-control" type="num" id="costo" name="costo" onkeypress="return solonumeros(event)" onpaste="return false;"> 
                <br>
            <div>
            <div class="form-group ">
                 Fecha de Ingreso
                <input class="form-control" type="date" id="fecha_ingreso" name="fecha_ingreso" >
                <br>
            <div>
            <div class="form-group ">
                <label  class="control-label">Seleccione Categoria</label>
                    <select id="categoria_id"   name="categoria_id"  class="form-control round">
                        @foreach($categorias as $categoria)            
                        <option value="{{ $categoria->id }}" >{{ $categoria->nombre_categoria }}</option>
                        @endforeach
                    </select>
              <br>
            <div>

            <div class="form-group ">
              <label  class="control-label">Seleccione Proveedor</label>
                    <select id="proveedor_id"   name="proveedor_id"  class="form-control round">
                        @foreach($proveedores as $proveedor)            
                        <option value="{{ $proveedor->id }}" >{{ $proveedor->razon_social }}</option>
                        @endforeach
                    </select>
                <br>
            <div>
            <div class="form-control ">
                <label>Activo</label>
                    <br>
                <input type="radio" id="activo" name="activo" value="1" checked>Si
                <input type='radio' name='activo' value="0" >No
                <br>
            </div>

                <button type="submit" class="btn btn-success btn-lg btn-block">GUARDAR</button>
        </form>

        <script type="text/javascript">

            function validarFormulario(){

                var texto;
                var nombre = document.forms["formularioproducto"]["nombre_producto"].value;
                var cantidad = document.forms["formularioproducto"]["cantidad"].value;
                var costo = document.forms["formularioproducto"]["costo"].value;
            

                if(nombre == null || nombre == ""){
                    texto = "<span style = 'color:red'>Por favor ingresa nombre del producto</span>"
                    document.getElementById("info").innerHTML = texto;
                    return false; 
                }
                else if(nombre.length < 3){
                texto = "<span style = 'color:red'>El nombre del producto debe de tener 3 o mas caracteres</span>"
                document.getElementById("info").innerHTML = texto;
                return false;
                }
                
                if(cantidad == null || cantidad == ""){
                    texto = "<span style = 'color:red'>Por favor ingresa una cantidad</span>"
                    document.getElementById("info").innerHTML = texto;
                    return false; 
                }
                else if(cantidad.length < 1){
                texto = "<span style = 'color:red'>La cantidad debe de tener 1 o mas caracteres</span>"
                document.getElementById("info").innerHTML = texto;
                return false;
                }

                if(costo == null || costo == ""){
                    texto = "<span style = 'color:red'>Por favor ingresa el costo</span>"
                    document.getElementById("info").innerHTML = texto;
                    return false; 
                }
                else if(costo.length < 10){
                texto = "<span style = 'color:red'>El costo debe de tener 1 o mas caracteres</span>"
                document.getElementById("info").innerHTML = texto;
                return false;
                }
            }
            
        </script>
        <script src="{{{ asset('datatables/js/jquery-3.3.1.js')}}}"></script>

             
@endsection