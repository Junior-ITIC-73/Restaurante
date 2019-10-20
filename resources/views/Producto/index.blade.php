@extends('admin.layout')

@section('content')

      <link rel="stylesheet" href="{{ asset('datatables/bootstrap.css') }}">
        <link rel="stylesheet" href="{{{ asset('datatables/bootstrap4.min.css')}}}">
        <link rel="stylesheet" href="{{{ asset('datatables/css/jquery.dataTables.min.css')}}}">
        <link rel="stylesheet" href="{{{ asset('datatables/css/estilos.css')}}}">

    <center>
    <h1 align="center">Listado de productos</h1>
    <button onclick="window.location.href='/producto/create'" type="button" class="btn btn-success" >New producto</button>
    <table border="1" align="center" class="table table-striped table-bordered" style="width:80%" id="a1">
        <thead>
            <tr>  
                <th>Clave</th>
                <th>Nombre Producto</th>
                <th>Cantidad</th>
                <th>Costo</th>
                <th>Fecha de Ingreso</th>
                <th>Categoria de producto</th>
                <th>Proveedor</th>
                <th>Activo</th>
                <th>Opciones</th>
            </tr>
        </thead>
           
{{--           <tfoot>
            <tr>  
                <th>Clave</th>
                <th>Nombre Producto</th>
                <th>Cantidad</th>
                <th>Costo</th>
                <th>Fecha de Ingreso</th>
                <th>Categoria de producto</th>
                <th>Proveedor</th>
                <th>Activo</th>
                <th>Opciones</th>
            </tr>
        </tfoot> --}}
              
          <tbody>
                @foreach ($productos as $i => $producto)
                <tr id="row{{$producto->id}}">
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre_producto }}</td> 
                        <td>{{ $producto->cantidad }}</td> 
                        <td>{{ $producto->costo }}</td> 
                        <td>{{ $producto->fecha_ingreso }}</td> 
                        <td>{{ $producto->categoria->nombre_categoria}}</td> 
                        <td>{{ $producto->proveedor->razon_social }}</td> 
                        <td>{{ $producto->activo }}</td>
                        <td>
                            <a href="/producto/{{$producto->id}}/edit"><button><img src="{{asset('img/editar.png')}}" width="30" height="30"></button>
                        </a>
                        <form action="{{route('producto.destroy', $producto->id)}}" method="POST">
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