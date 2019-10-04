@extends('admin.layout')

@section('content')


                <form action="{{route('alta_menu') }}" method="POST">
                    {{csrf_field()}}

                    <h1>Alta Menu</h1>

                    <p>
                        <label for="nombre_platillo"  >Nombre del Platillo</label>
                        <input name="nombre_platillo" type="text" id="nombre_platillo">
                    </p>

                    <p>
                        <label for="precio_platillo"  > Precio</label>
                        <input name='precio_platillo' type="number" id="precio_platillo" />
                    </p>
                    <p>
                        <label for="descripcion_platillo"  > Descripcion</label>
                        <input id="descripcion_platillo"  name="descripcion_platillo" >
                    </p>
                    <p>
                        <label for="fecha"> Fecha</label>
                        <input id="fecha"  name="fecha" type="date">
                    </p>
                    <p>
                        <input type="submit" name="submit" value="Enviar" />
                    </p>

                </form>

@endsection
