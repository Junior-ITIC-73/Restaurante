<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>HELLO WORLD</h3>
    <table border="2px">
        <tr>
        <th>id</th>
        <th>Nombre Categoria</th>
        <th>Imagen</th>
        <th>Opciones</th>
        </tr>
        @foreach ($a1 as $a2)
        <tr>
        <td>{{$a2->id}}</td>
        <td>{{$a2->nombre_categoria}}</td>
        <td> <img style="width:85px; height:85px;" src="{{ asset('imag/'.$a2->imagen) }}"></td>
        <td><a href="{{URL::action('CategoriaPlatilloController@eliminar',['id'=>$a2->id])}}">Eliminar</a>

        </tr>
        @endforeach
    </table>
</body>
</html>
