@extends('admin.layout')

@section('content')


                <form action="{{route('alta_menu') }}" method="POST">
                    {{csrf_field()}}

                    <h1>Alta Menu</h1>

                    <p>
                        <label for="username" class="uname"  >Nombre del Platillo</label>
                        <input name="nombre_platillo "class="w50" type="text" size="20" id="txtNombre"  onkeypress="return sololetras(event)" onpaste="return false"/>
                    </p>

                    <p>
                        <label for="password" class="youpasswd" > Precio</label>
                        <input id="password" name='precio_platillo' type="number" step="any" class='rounded nombre' required=''/>
                    </p>
                    <p>
                        <label for="username" class="uname"  > Descripcion</label>
                        <input id="descripcion"  name="descripcion_platillo" >
                    </p>
                    <p>
                        <label for="username" class="uname"  > Fecha</label>
                        <input id="fecha"  name="fecha" type="date">
                    </p>
                    <p>
                        <input type="submit" name="submit" value="Enviar" />
                    </p>

                </form>

@endsection
