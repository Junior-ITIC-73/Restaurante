@extends('admin.layout')

@section('content')

        <link rel="stylesheet" href="{{ asset('datatables/bootstrap.css') }}">
        <link rel="stylesheet" href="{{{ asset('datatables/bootstrap4.min.css')}}}">
        <link rel="stylesheet" href="{{{ asset('datatables/css/jquery.dataTables.min.css')}}}">
        <link rel="stylesheet" href="{{{ asset('datatables/css/estilos.css')}}}">


<center>
    <h1 align="center">Listado de proveedores</h1>
    <button onclick="window.location.href='/proveedor/create'" type="button" class="btn btn-info btn-lg" >Agregar proveedor</button>
    <table border="1" align="center" class="table table-striped table-bordered" style="width:100%" id="a1">
        <thead>
            <tr>  
                <th>Clave</th>
                <th>Razon social</th>
                <th>RFC</th>
                <th>Telefono</th>
                <th>Calle</th>
                <th>Numero interior</th>
                <th>Numero exterior</th>
                <th>Codigo postal</th>
                <th>Localidad</th>
                <th>Opciones</th>
            </tr>
        </thead>
           
          <tfoot>
            <tr>  
                <th>Clave</th>
                <th>Razon social</th>
                <th>RFC</th>
                <th>Telefono</th>
                <th>Calle</th>
                <th>Numero interior</th>
                <th>Numero exterior</th>
                <th>Codigo postal</th>
                <th>Localidad</th>
                <th>Opciones</th>
            </tr>
        </tfoot>
              
          <tbody>
                @foreach ($proveedores as $i => $proveedor)
                <tr id="row{{$proveedor->id}}">
                        <td>{{ $proveedor->id }}</td>
                        <td>{{ $proveedor->razon_social }}</td> 
                        <td>{{ $proveedor->RFC }}</td> 
                        <td>{{ $proveedor->telefono_proveedor }}</td> 
                        <td>{{ $proveedor->calle }}</td> 
                        <td>{{ $proveedor->num_interior }}</td> 
                        <td>{{ $proveedor->num_exterior }}</td> 
                        <td>{{ $proveedor->CP }}</td> 
                        <td>{{ $proveedor->localidad }}</td>
                        <td>
                            <a href="/proveedor/{{$proveedor->id}}/edit"><button><img src="{{asset('img/editar.png')}}" width="30" height="30"></button></a>
                            <form action="{{route('proveedor.destroy', $proveedor->id)}}" method="POST">
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