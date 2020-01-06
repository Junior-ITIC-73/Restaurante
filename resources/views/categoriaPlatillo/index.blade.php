@extends('admin.admin')

@section('header')
    <h1 align="center">
        Listado de Categorias de Platillos 
    </h1>
@endsection

@section('content')     
  <center><a href="{{route('categoriaPlatillo.create')}}"><button type="button" class="btn btn-primary">Agregar Categoria de Platillo</button></a></center>
    <div class="container">
      <div class="col-md-12 col-xs-12">
        <div class="col-md-12">
          <table table border="4" class="table table-striped table-bordered" style="width:90%" id="a" align="left">
            <tr>
              <td><a href="{{URL::action('CategoriaPlatilloController@reportepdf',['criterio'=>$criterio])}}" target="somewhere_new"><i class="fa fa-fw fa-file-pdf-o"></i>PDF</a></td>
              <td>
                <a href="{{URL::action('CategoriaPlatilloController@reporteExcel',['criterio'=>$criterio])}}"><i class="fa fa-fw fa-file-excel-o"></i>EXCEL</a>
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
        <table border="4" class="table table-striped table-bordered" style="width:90%" id="a1" align="left">
          <thead  style="background-color: #A9D0F5">
            <tr>
                <th>Nombre</th>
                <th>Imagen</th>
                @if(auth()->user()->rol_user == 1 or auth()->user()->rol_user == 0)
                    <th>Modificar</th>
                    <th>Eliminar</th>
                @endif
            </tr>
          </thead>
          <tbody>
              @foreach($categoriaPlatillos as $categoriaPlatillo)
                <tr>
                  <td>{{$categoriaPlatillo->nombre_categoria}}</td>
                  
                  <td><img style="width:85px; height:85px;" src="{{asset('imag/'.$categoriaPlatillo->imagen)}}"></td>
                   @if(auth()->user()->rol_user == 1 or auth()->user()->rol_user == 0)
                          <td><a href="{{route('categoriaPlatillo.edit',$categoriaPlatillo)}}"><img src="{{asset('img/editar.png')}}" width="30" height="30"></a></td>
                          <td>
                              <form action="{{route('categoriaPlatillo.destroy',$categoriaPlatillo)}}" method="POST">
                                  {{csrf_field()}}
                                  {{method_field('DELETE')}}
                                  <button type="submit" onclick="return confirm('Estas seguro de eliminar al la Categoria {{$categoriaPlatillo->nombre_categoria}}?')"><img src="{{asset('img/eliminar.png')}}" width="30" height="30" ></button>
                              </form>
                          </td>
                  @endif
                </tr>
              @endforeach
          </tbody> 
        </table>
       </div>
       <center>{{$categoriaPlatillos->links()}}</center>
      </div>
    </div>
@endsection
