<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar categoria</title>
</head>
<body>
        <form action="{{ route('categoria.update', ['id' => $categoria->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <label class="form-control-label"> Nombre Categoria:</label>
                    <input type="text" class="form-control" value="{{$categoria->nombre_categoria}}" name="nombre_categoria">
                    <br>
                <button type="submit" name="button" class="btn btn-primary">Guardar</button>
        </form>
</body>
</html>