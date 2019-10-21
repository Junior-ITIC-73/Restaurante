
@extends('admin.layout')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"


         <form action="{{asset('modificarplatillo')}}" method="POST" enctype="multipart/form-data">
           {{csrf_field()}}


           <h1>Editar Menu Platillos</h1>

            <form>
                <div class="form-group-row">
            <label for="id" class="col-sm-2 col-form-label"> ID</label>
            <div class="col-sm-5">
            <input id="username" name="id" class="form-control" size="20" type="text"  id="texto" value="{{$menu_platillo->id}}" readonly="">
            </div>
                </div>

                <div class="form-group-row">
                        <div class="col-sm-5">
                        <label for="nombre_platillo" class="col-sm-10 col-form-label">Nombre del Platillo</label>
           <input id="username" name="nombre_platillo" class="form-control" size="20" type="text"  id="texto" value="{{ $menu_platillo->nombre_platillo}}"    required>
                        </div>
                </div>
                <div class="form-group-row">
                        <div class="col-sm-5">
                        <label for="precio_platillo" class="col-sm-10 col-form-label">Precio</label>
          <input id="username" name="precio_platillo" type="text"  class="form-control" size="20" id="texto" value="{{ $menu_platillo->precio_platillo}}"    required>
                        </div>
                </div>
                <div class="form-group-row">
                        <div class="col-sm-5">
                        <label for="descripcion_platillo" class="col-sm-10 col-form-label">Descripcion del Platillo</label>
          <input id="username" class="form-control" size="20" name="descripcion_platillo" type="text"  id="texto" value="{{ $menu_platillo->descripcion_platillo}}"    required>
                        </div>
                </div>
                <div class="form-group-row">
                        <div class="col-sm-5">
                        <label for="fecha" class="col-sm-10 col-form-label">Fecha</label>
              <input id="username" name="fecha" type="date" class="form-control" size="20"  id="texto" value="{{$menu_platillo->fecha}}"required>
                        </div>
                </div>

        <p>

          <p class="login button">
            <input type="submit" class="btn btn-primary" name="submit" value="Enviar" />
          </p>

        </form>
        <script src="{{{ asset('datatables/js/jquery-3.3.1.js')}}}"></script>
@endsection
