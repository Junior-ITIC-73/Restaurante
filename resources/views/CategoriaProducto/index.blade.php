@extends('admin.layout')

@section('content')
        <link rel="stylesheet" href="{{ asset('datatables/bootstrap.css') }}">
        <link rel="stylesheet" href="{{{ asset('datatables/bootstrap4.min.css')}}}">
        <link rel="stylesheet" href="{{{ asset('datatables/css/jquery.dataTables.min.css')}}}">
        <link rel="stylesheet" href="{{{ asset('datatables/css/estilos.css')}}}">

<center>
    <h1 align="center">Listado de categorias de producto</h1>
     <button onclick="window.location.href='/categoria/create'" type="button" class="btn btn-info btn-lg" >Agregar categoria</button>
    <table border="1" align="center" class="table table-striped table-bordered" style="width:100%" id="a1">
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


<script src="{{{ asset('datatables/js/jquery-3.3.1.js')}}}"></script>
<script src="{{{ asset('datatables/js/jquery.dataTables.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/dataTables.bootstrap4.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/dataTables.buttons.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/jszip.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/pdfmake.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/vfs_fonts.js')}}}"></script>
<script src="{{{ asset('datatables/js/buttons.html5.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/buttons.print.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/buttons.print.min.js')}}}"></script>
<script src="{{{ asset('datatables/js/buttons.colVis.min.js')}}}"></script>
<script src="{{{ asset('js/datatables.js')}}}"></script>





@endsection