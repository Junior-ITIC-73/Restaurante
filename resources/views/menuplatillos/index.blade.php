<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<center> <h2>Menu Platillo</h2>
    <table border="2">
        <thead>
            <th>Categoria</th>
            <th>Nombre del Platillo</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Imagen Platillo</th>
            <th>Fecha</th>
            <th>Modificar</th>
            <th>Eliminar</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($menu_platillos as $menu_platillo)
            <td>{{$menu_platillo->categoria->nombre_categoria}}<br>
                <img style="width:85px; height:85px;" src="{{asset('imag/'.$menu_platillo->categoria->imagen)}}">
            </td>
            <td>{{$menu_platillo->nombre_platillo}}</td>
            <td>{{$menu_platillo->precio_platillo}}</td>
            <td>{{$menu_platillo->descripcion_platillo}}</td>
            <td><img style="width:85px; height:85px;" src="{{asset('imag/'.$menu_platillo->imagen)}}"></td>
            <td>{{$menu_platillo->created_at}}</td>
            <td><a href="{{route('menuplatillo.edit',$menu_platillo)}}"><img src="{{asset('img/editar.png')}}" width="30" height="30"></a></td>
            <td>
                <form action="{{route('menuplatillo.destroy',$menu_platillo)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('Estas seguro de eliminar al platillo {{$menu_platillo->nombre_platillo}}?')"><img src="{{asset('img/eliminar.png')}}" width="30" height="30" ></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


</body>
</html>