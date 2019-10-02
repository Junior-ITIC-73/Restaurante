<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de productos</title>
</head>
<body>
    <h1 align="center">Listado de productos</h1>
    <table border="1" align="center">
        <thead>
            <tr>  
                <th>Clave</th>
                <th>Nombre Producto</th>
                <th>Cantidad</th>
                <th>Costo</th>
                <th>Fecha de Ingreso</th>
                <th>Categoria de producto</th>
                <th>Proveedor</th>
                <th>Activo</th>
                <th>Opciones</th>
            </tr>
        </thead>
           
          <tfoot>
            <tr>  
                <th>Clave</th>
                <th>Nombre Producto</th>
                <th>Cantidad</th>
                <th>Costo</th>
                <th>Fecha de Ingreso</th>
                <th>Categoria de producto</th>
                <th>Proveedor</th>
                <th>Activo</th>
                <th>Opciones</th>
            </tr>
        </tfoot>
              
          <tbody>
                @foreach ($productos as $i => $producto)
                <tr id="row{{$producto->id}}">
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre_producto }}</td> 
                        <td>{{ $producto->cantidad }}</td> 
                        <td>{{ $producto->costo }}</td> 
                        <td>{{ $producto->fecha_ingreso }}</td> 
                        <td>{{ $producto->categoria->nombre_categoria}}</td> 
                        <td>{{ $producto->proveedor->razon_social }}</td> 
                        <td>{{ $producto->activo }}</td>
                        <td>
                            <a href="/producto/{{$producto->id}}/edit"<button>Editar</button>
                        </a>
                        <form action="{{route('producto.destroy', $producto->id)}}" method="POST">
                            {{method_field('DELETE')}}
                            {{ csrf_field() }}
                            <button type="submit">Eliminar</button>
                        </form>
                        </td>
                </tr>
                @endforeach        
          </tbody>  

    </table>
    <button onclick="window.location.href='/producto/create'"  >Agregar producto</button>
</body>
</html>