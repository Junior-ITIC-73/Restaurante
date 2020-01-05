@extends('admin.admin')

@section('header')
    <h1 align="center">
        Listado de Categorias de Productos 
    </h1>
@endsection

@section('content')     

    <div class="container">
        <table border="4" class="table table-striped table-bordered table-hover table-condensed" style="margin-top: 10px" id="a1">
            <thead>
            <tr>
                <th>Clave</th>
                <th>Nombre Categoria</th>
                <th>Opciones</th>
            </tr>
            </thead>
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
    </div>
@endsection

