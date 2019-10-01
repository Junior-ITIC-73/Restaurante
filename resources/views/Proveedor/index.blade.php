<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de proveedores</title>
</head>
<body>
    <h1 align="center">Listado de proveedores</h1>
    <table border="1" align="center">
        <thead>
            <tr>  
                <th>Clave</th>
                <th>Razon social</th>
                <th>RFC</th>
                <th>Telefono</th>
                <th>Calle</th>
                <th>Numero interior</th>
                <th>Numero exterior</th>
                <th>Codigo postal</th>
                <th>Localidad</th>
                <th>Opciones</th>
            </tr>
        </thead>
           
          <tfoot>
            <tr>  
                <th>Clave</th>
                <th>Razon social</th>
                <th>RFC</th>
                <th>Telefono</th>
                <th>Calle</th>
                <th>Numero interior</th>
                <th>Numero exterior</th>
                <th>Codigo postal</th>
                <th>Localidad</th>
                <th>Opciones</th>
            </tr>
        </tfoot>
              
          <tbody>
                @foreach ($proveedores as $i => $proveedor)
                <tr id="row{{$proveedor->id}}">
                        <td>{{ $proveedor->id }}</td>
                        <td>{{ $proveedor->razon_social }}</td> 
                        <td>{{ $proveedor->RFC }}</td> 
                        <td>{{ $proveedor->telefono_proveedor }}</td> 
                        <td>{{ $proveedor->calle }}</td> 
                        <td>{{ $proveedor->num_interior }}</td> 
                        <td>{{ $proveedor->num_exterior }}</td> 
                        <td>{{ $proveedor->CP }}</td> 
                        <td>{{ $proveedor->localidad }}</td>
                        <td>
                            <a href="/proveedor/{{$proveedor->id}}/edit"<button>Editar</button></a>
                            <form action="{{route('proveedor.destroy', $proveedor->id)}}" method="POST">
                                    {{method_field('DELETE')}}
                                    {{ csrf_field() }}
                                    <button type="submit">Eliminar</button>
                                </form>
                        </td> 
                </tr>
                @endforeach        
          </tbody>  

    </table>
    <button onclick="window.location.href='/proveedor/create'"  >Agregar proveedor</button>
    
</body>
</html>