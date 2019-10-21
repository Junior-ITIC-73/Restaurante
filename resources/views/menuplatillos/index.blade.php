@extends('admin.layout')

@section('content')


        <link rel="stylesheet" href="{{ asset('datatables/bootstrap.css') }}">
        <link rel="stylesheet" href="{{{ asset('datatables/bootstrap4.min.css')}}}">
        <link rel="stylesheet" href="{{{ asset('datatables/css/jquery.dataTables.min.css')}}}">
        <link rel="stylesheet" href="{{{ asset('datatables/css/estilos.css')}}}">


<center> <h2>Menu Platillo</h2>
    <a href="{{url('menuplatillo/create')}}"><button type="button" class="btn btn-info btn-lg">Agregar Plantillo</button></BUTTON></a></center>

<div class="container">
    <table id="a1" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>id</th>
            <th>Nombre del Platillo</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Fecha</th>
            <th>Opciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($menu_platillo as $a1)
        <td>{{$a1->id}}</td>
        <td>{{$a1->nombre_platillo}}</td>
        <td>{{$a1->precio_platillo}}</td>
        <td>{{$a1->descripcion_platillo}}</td>
        <td>{{$a1->fecha}}</td>

        <td><a href="{{URL::action('MenuPlatilloController@eliminar',['id'=>$a1->id])}}"><img src="{{asset('img/eliminar.png')}}" width="30" height="30"></a>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="{{URL::action('MenuPlatilloController@edit',['id'=>$a1->id])}}"><img src="{{asset('img/editar.png')}}" width="30" height="30"></a>

        </tr>
        @endforeach
    </tbody>
</table>
</div>

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

