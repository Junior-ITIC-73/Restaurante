@extends('admin.layout')

@section('content')
<center>
    <h1 align="center">Listado de categorias de producto</h1>
     <button onclick="window.location.href='/categoria/create'" type="button" class="btn btn-success" >Agregar categoria</button>
    <table border="1" align="center" class="table table-striped table-bordered" style="width:80%">
        <thead>
            <tr>  
                <th>Clave</th>
                <th>Nombre Categoria</th>
                <th>Opciones</th>
            </tr>
        </thead>
           
          <tfoot>
            <tr>  
                    <th>Clave</th>
                    <th>Nombre Categoria</th>
                    <th>Opciones</th>
            </tr>
        </tfoot>
              
          <tbody>
                @foreach ($categorias as $i => $categoria)
                <tr id="row{{$categoria->id}}">
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombre_categoria }}</td>
                        <td><a href="/categoria/{{$categoria->id}}/edit"><button><img src="{{asset('img/editar.png')}}" width="30" height="30"></button>
                        </a>
                        <form action="{{route('categoria.destroy', $categoria->id)}}" method="POST">
                                {{method_field('DELETE')}}
                                {{ csrf_field() }}
                                <button type="submit"><img src="{{asset('img/eliminar.png')}}" width="30" height="30"></button>
                            </form>
                        </td> 
                </tr>
                @endforeach        
          </tbody>  
    </table>  
</center>
@endsection