@extends('admin.admin')

@section('header')
    <h1 align="center">
        Listado de Menu Platillos 
    </h1>
@endsection

@section('content')     
  <center><a href="{{route('menuplatillo.create')}}"><button type="button" class="btn btn-primary">Agregar Platillo</button></a></center>
    <div class="container">
        <div class="col-md-12 col-xs-12">
            <div class="col-md-12">
                <table table border="4" class="table table-striped table-bordered" style="width:100%" id="a" align="center">
            <tr>
              <td><a href="{{URL::action('MenuPlatilloController@reportepdf',['criterio'=>$criterio])}}" target="somewhere_new"><i class="fa fa-fw fa-file-pdf-o"></i>PDF</a></td>
              <td>
                <a href="{{URL::action('MenuPlatilloController@reporteExcel',['criterio'=>$criterio])}}"><i class="fa fa-fw fa-file-excel-o"></i>EXCEL</a>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <form action="{{route('busqueda.menu_platillo')}}" method="POST">
                @csrf
                <input type="search" placeholder="Buscar" aria-label="Buscar" name="criterio" placeholder="{{old('criterio')}}">
                  <button class="btn btn-warning" type="submit">BUSCAR</button>
                </form>
              </td>
            </tr>
          </table>
            </div>
            <div class="col-md-12">
                <table border="4" class="table table-striped table-bordered" style="width:100%" id="a1" align="center">
                    <thead style="background-color: #A9D0F5">
                        <tr align="center">
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
            </div>
        </div>
    </div> 
@endsection

