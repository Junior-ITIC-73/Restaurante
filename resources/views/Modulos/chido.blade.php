<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito chido</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	    <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}" rel = "stylesheet">
	    <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
	    <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
</head>
<body>
    <div class="container">
        <form name="formularioorden" method="POST" action="{{url('ventas')}}">
        {{ csrf_field() }}
                <div class="nav-header">
                    <h1 align="center" style="color: blue;">Modulo de ventas</h1>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <select name="categoria_id" id="categoria">
                            <option value="*">Seleccione categoria</option>
                            @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                    <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <td>Identificador</td>
                                <td>Nombre</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($menus as $menu)
                                <tr id="row{{$menu->id}}">
                                    <td>{{ $menu->id }}</td>
                                    <td>{{ $menu->nombre_platillo }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <p>{{$categoria_id}}</p>
                    </div>
                </div>
            <button type="submit" value="enviar">Guardar Venta</button>
        </form>
    </div>
</body>
</html>