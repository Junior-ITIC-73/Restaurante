@extends('admin.admin')

@section('header')
    <h1 align="center">
        Listado de Categorias de Platillos 
    </h1>
@endsection

@section('content')     
  <a href="{{route('categoriaPlatillo.create')}}"><button type="button" class="btn btn-primary">Agregar</button></a>
    <div class="container">
      <div class="col-md-12 col-xs-12">
        <div class="col-md-12">
          <table table border="4" class="table table-striped table-bordered" style="width:100%" id="a" align="center">
            <tr>
              <td><a href="{{URL::action('CategoriaPlatilloController@reportepdf',['criterio'=>$criterio])}}"><button class="btn btn-danger">Reporte PDF</button></a></td>
              <td>
                <a href="{{URL::action('CategoriaPlatilloController@reporteExcel',['criterio'=>$criterio])}}"><button class="btn btn-success">Reporte Excel</button></a>
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
                <form action="{{route('busqueda.categoriaplatillo')}}" method="POST" align="left">
                  @csrf
                  <input type="search" placeholder="Buscar" aria-label="Buscar" name="criterio" placeholder="{{old('criterio')}}">
                  <button class="btn btn-warning" type="submit">BUSCAR</button>
                </form>
              </td>
            </tr>
          </table>
        </div>
        <div class="col-md-12">
        <table table border="4" class="table table-striped table-bordered" style="width:100%" id="a1" align="center">
          <thead style="background-color: #A9D0F5">
            <tr>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
              @foreach($categoriaPlatillos as $categoriaPlatillo)
                <tr>
                  <td>{{$categoriaPlatillo->nombre_categoria}}</td>
                  
                  <td><img style="width:85px; height:85px;" src="{{asset('imag/'.$categoriaPlatillo->imagen)}}"></td>

                  <td><a href="{{route('categoriaPlatillo.edit',$categoriaPlatillo)}}"><img src="{{asset('img/editar.png')}}" width="30" height="30"></a></td>
                  
                  <td>
                      <form action="{{route('categoriaPlatillo.destroy',$categoriaPlatillo)}}" method="POST">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                          <button type="submit" onclick="return confirm('Estas seguro de eliminar al la Categoria {{$categoriaPlatillo->nombre_categoria}}?')"><img src="{{asset('img/eliminar.png')}}" width="30" height="30" ></button>
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
