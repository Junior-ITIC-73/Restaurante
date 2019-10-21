@extends('admin.layout')

@section('content')

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Menu Platillos</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
         crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('datatables/bootstrap.css')}}">
        <link rel="stylesheet" href="{{{ asset('datatables/bootstrap4.min.css')}}}">
        <link rel="stylesheet" href="{{{ asset('datatables/css/jquery.dataTables.min.css')}}}">
        <link rel="stylesheet" href="{{{ asset('datatables/css/estilos.css')}}}">

    </head>

	<center>
		<h1>LISTADO DE USUARIOS</h1>
        <a href="{{route('users.create')}}" class="btn btn-primary">New</a>
        <div class="container">
                <table id="a1" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Datos del Cliente</th>
                        <th>Opciones</th>

                        </tr>
                        </thead>
                            <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <ul>
                                                <li><b>TEL:</b> {{$user->telefono_user}}</li>
                                                <li><b>CALLE:</b> {{$user->calle}}</li>
                                                <li><b>LOCALIDAD:</b> {{$user->localidad}}</li>
                                                <li><b>CP:</b> {{$user->CP}}</li>
                                            </ul>
                                        </td>


                                        <td><a href="{{route('users.edit',$user)}}"><img src="{{asset('img/editar.png')}}" width="30" height="30"></a>
                                            &nbsp; &nbsp; &nbsp; &nbsp;
                                            <<a href="{{route('users.destroy',$user)}}"><img src="{{asset('img/eliminar.png')}}" width="30" height="30"></a></td>              </tr>
                @endforeach
                </tbody>
                  </table>
                  </div>
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

@endsection
