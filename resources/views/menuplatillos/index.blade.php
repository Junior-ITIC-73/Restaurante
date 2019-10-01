<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Platillos</title>

    <link rel="stylesheet" href="datatables/bootstrap.css">
        <link rel="stylesheet" href="{{{ asset('datatables/bootstrap4.min.css')}}}">
        <link rel="stylesheet" href="{{{ asset('datatables/css/jquery.dataTables.min.css')}}}">
        <link rel="stylesheet" href="{{{ asset('datatables/css/estilos.css')}}}">

</head>

<body>
    <center> <h2>Menu Platillo</h2></center>
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

                <td><a href="{{URL::action('MenuPlatilloController@eliminar',['id'=>$a1->id])}}"><img src="img/eliminar.png" width="30" height="30"></a>
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    <a href="{{URL::action('MenuPlatilloController@edit',['id'=>$a1->id])}}"><img src="img/editar.png" width="30" height="30"></a>

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
</body>

</html>

