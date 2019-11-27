<html>
    <head>
        <title>Alta Categoria</title>
    </head>
        <body>
            <center>
            <h1>Alta Categoria</h1>
            <form action="{{route('categoriaPlatillo.alta') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
            <label>Nombre Categoria</label>
            <input type="text" name="nombre_categoria" required><br>
            <input type="file" name="chooseFile" id="chooseFile" required><br>
                <button type="submit">Listo</button>
            </form>
            </center>
        </body>
</html>
