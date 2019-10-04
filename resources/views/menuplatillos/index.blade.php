@extends('admin.layout')

@section('content')


<center> <h2>Menu Platillo</h2>
<button onclick="window.location.href='/menuplatillo/create'" type="button" class="btn btn-success" >NUEVO PLATILLO</button></center>
<div class="container">
    <table id="a1" class="table table-striped table-bordered" style="width:80%">
        <thead>
            <th>id</th>
            <th>Nombre del Platillo</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Fecha</th>
            <th>Eliminar</th>
            <th>Modificar</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($menu_platillo as $a1)
        <td>{{$a1->id}}</td>
        <td>{{$a1->nombre_platillo}}</td>
        <td>{{$a1->precio_platillo}}</td>
        <td>{{$a1->descripcion_platillo}}</td>
        <td>{{$a1->fecha}}</td>
        <td><a href="{{URL::action('MenuPlatilloController@eliminar',['id'=>$a1->id])}}"><img src="img/eliminar.png" width="30" height="30"></a></td>
            &nbsp; &nbsp; &nbsp; &nbsp;
         <td><a href="{{URL::action('MenuPlatilloController@edit',['id'=>$a1->id])}}"><img src="img/editar.png" width="30" height="30"></a></td>

        </tr>
        @endforeach
    </tbody>
</table>
</div>


{{-- <script src="{{{ asset('datatables/js/jquery-3.3.1.js')}}}"></script>
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



<script>

    $(document).ready(function() {
        $('#a1').DataTable( {
            dom: 'Bfrtip',
            buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0,':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'csv',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: [0, ':visible' ]
                }
            },
            'colvis'
            ],
            "language": {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "buttons":{
                    "copy" : 'Copiar',
                    "csv" : 'Exportar a CSV',
                    "print" : 'Imprimir',
                    copyTitle: 'Los datos fueron copiados',
                    copySuccess: {
                        _: '%d lineas copiadas',
                        1: '1 línea copiada'
                    },
                    "colvis" : 'Filtrar Columnas'

                }

            }
        } );
    } );


</script>
<button onclick="window.location.href='/menuplatillo/create'"  >Agregar categoria</button> --}}


@endsection

