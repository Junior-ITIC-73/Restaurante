<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Producto</title>
</head>
<body>
    <h1>Registra un Producto</h1>
        <form method="POST" action="{{url('producto')}}">
            {{ csrf_field() }}
            <div class="form-group ">
                <input type="text" id="nombre_producto" name="nombre_producto" required> Nombre del producto
                <br>
                <input type="num" id="cantidad" name="cantidad" required> Cantidad 
                <br>
                <input type="num" id="costo" name="costo" required> Costo
                <br>
                <input type="date" id="fecha_ingreso" name="fecha_ingreso" required> Fecha de Ingreso
                <br>
                <label  class="control-label">Seleccione Categoria</label>
                    <select id="categoria_id"   name="categoria_id"  class="form-control round">
                        @foreach($categorias as $categoria)            
                        <option value="{{ $categoria->id }}" required>{{ $categoria->nombre_categoria }}</option>
                        @endforeach
                    </select>
              <br>
              <label  class="control-label">Seleccione Proveedor</label>
                    <select id="proveedor_id"   name="proveedor_id"  class="form-control round">
                        @foreach($proveedores as $proveedor)            
                        <option value="{{ $proveedor->id }}" required>{{ $proveedor->razon_social }}</option>
                        @endforeach
                    </select>
                <br>
                <label>Activo</label
                    <br>
                <input type="radio" id="activo" name="activo" value="1" checked>Si
                <input type='radio' name='activo' value="0" >No
                <br>
                <input type="submit">
            </div>
        </form>
            <script>
                    let inputNombreProducto = document.querySelector('#nombre_producto');
                    let patronNombreProducto = /[a-zA-Z+\s]+/;
                    validar(inputNombreProducto,patronNombreProducto,'nombre_producto');

                    let inputCantidad = document.querySelector('#cantidad');
                    let patronCantidad = /[0-9\/]+/;
                    validar(inputCantidad,patronCantidad,'cantidad');

                    let inputCosto = document.querySelector('#costo');
                    let patronCosto = /[0-9\/]+/;
                    validar(inputCosto,patronCosto,'costo');

                    function validar(input,patron,idInput){
                        input.addEventListener('keydown', event => {
                            if(!patron.test(event.key)) {
                                document.getElementById(idInput).style.border = '1px solid #FF0000';
                            }else{
                                document.getElementById(idInput).style.border = '1px solid #00cc00';
                            }
                        });	

                    }

             </script>
</body>
</html>