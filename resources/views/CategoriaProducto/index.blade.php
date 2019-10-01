<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de categorias</title>
</head>
<body>
    <h1 align="center">Listado de categorias de producto</h1>
    <table border="1" align="center">
        <thead>
            <tr>  
                <th>Clave</th>
                <th>Nombre Categoria</th>
                <th>Opciones</th>
            </tr>
        </thead>
           
          <tfoot>
            <tr>  
                    <th>Clave</th>
                    <th>Nombre Categoria</th>
                    <th>Opciones</th>
            </tr>
        </tfoot>
              
          <tbody>
                @foreach ($categorias as $i => $categoria)
                <tr id="row{{$categoria->id}}">
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombre_categoria }}</td>
                        <td><a href="/categoria/{{$categoria->id}}/edit"<button>Editar</button>
                        </a>
                        <form action="{{route('categoria.destroy', $categoria->id)}}" method="POST">
                                {{method_field('DELETE')}}
                                {{ csrf_field() }}
                                <button type="submit">Eliminar</button>
                            </form>
                        </td> 
                </tr>
                @endforeach        
          </tbody>  
    </table>  
    <button onclick="window.location.href='/categoria/create'"  >Agregar categoria</button>
</body>
</html> 