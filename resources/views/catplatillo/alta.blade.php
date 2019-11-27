<html>
    <head>
        <title>Alta Categoria</title>
    </head>
        <body>
            <h1>Alta Categoria</h1>
            <form action="{{route('catplatillo.store') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                <label>Nombre Categoria</label>
            <input type="text" name="nombre_categoria"><br>
            <input type="file" name="chooseFile" id="chooseFile" required=""><br>
                <button type="submit">Listo</button>
        </body>
</html>
