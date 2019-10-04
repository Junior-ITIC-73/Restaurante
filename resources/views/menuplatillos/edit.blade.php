
@extends('admin.layout')

@section('content')



         <form action="{{asset('modificarplatillo')}}" method="POST" enctype="multipart/form-data">
           {{csrf_field()}}


           <h1>Editar Menu Platillos</h1>


           <p>
            <label for="username" class="uname"  > ID</label>
            <input id="username" name="id" type="text"  id="texto" value="{{$menu_platillo->id}}" readonly="">
          </p>

          <p>
           <label for="username" class="uname"  > Nombre del Platillo</label>
           <input id="username" name="nombre_platillo" type="text"  id="texto" value="{{ $menu_platillo->nombre_platillo}}"    required>
         </p>

         <p>
          <label for="username" class="uname"  >Precio</label>
          <input id="username" name="precio_platillo" type="text"  id="texto" value="{{ $menu_platillo->precio_platillo}}"    required>
        </p>
        <p>
          <label for="username" class="uname"  >Descripcion</label>
          <input id="username" name="descripcion_platillo" type="text"  id="texto" value="{{ $menu_platillo->descripcion_platillo}}"    required>
        </p>

        <p>
          <label for="username" class="uname"  > Fecha</label>
          <input id="username" name="fecha" type="date"  id="texto" value="{{$menu_platillo->fecha}}"required>
        </p>

        <p>

          <p class="login button">
            <input type="submit" name="submit" value="Enviar" />
          </p>

        </form>
@endsection