<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Menu Platillos</title>
    <link rel="stylesheet" href="{{ asset('datatables/bootstrap.css')}}">
    <link rel="stylesheet" href="{{{ asset('datatables/bootstrap4.min.css')}}}">
    <link rel="stylesheet" href="{{{ asset('datatables/css/jquery.dataTables.min.css')}}}">
    <link rel="stylesheet" href="{{{ asset('datatables/css/estilos.css')}}}">
    @extends('layouts.template')

    @section('MDB')
    @endsection

</head>

<body>

    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Platillos</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('menuplatillo.store') }}" method="POST">
            @csrf
            <div class="modal-body mx-3">
              <div class="md-form mb-5">
                <i class="fas fa-utensils prefix grey-text"></i>
                <input type="text" id="cantidad" name="nombre_platillo" class="form-control validate"  required>
                <label data-error="wrong" data-success="right" for="orangeForm-name">Nombre</label>
              </div>
              <div class="md-form mb-5">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="text" id="orangeForm-email" name="precio_platillo" class="form-control validate" onKeyPress="return soloNumeros(event)" required>
                <label data-error="wrong" data-success="right" for="orangeForm-email">Precio</label>
              </div>

              <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <input type="text" id="orangeForm-pass" name="descripcion_platillo" class="form-control validate">
                <label data-error="wrong" data-success="right" for="orangeForm-pass">Descripcion</label>
              </div>

              <div class="md-form mb-4">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="date" id="orangeForm-pass" name="fecha" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">Fecha</label>
                  </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-deep-orange">Registrar</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      <div class="text-center">
        <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Alta</a>
      </div>

    <a href="{{ URL('/menuplatillo/create')}}" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">
        Alta
    </a>

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

<script>
function soloNumeros(e)
{
  var key = window.Event ? e.which : e.keyCode
  return ((key >= 48 && key <= 57) || (key==8))
}
</script>

<script>

        function el(el) {
     return document.getElementById(el);
                           }

el('cantidad').addEventListener('input',function() {
var val = this.value;
   this.value = val.replace(/\D|\-/,'');
           });
// creamos el evento para cada tecla pulsada
document.getElementById("ta").addEventListener("keypress",verificar);
function verificar(e) {

   // comprovamos con una expresion regular que el caracter pulsado sea
   // una letra, numero o un espacio
   if(e.key.match(/[a-z0-9ñçáéíóú\s]/i)===null) {

       // Si la tecla pulsada no es la correcta, eliminado la pulsación
       e.preventDefault();
   }
}
       /////////////////////////////
// creamos el evento para cada tecla pulsada
document.getElementById("descripcion_platillo").addEventListener("keypress",check);
function check(e) {

   // comprovamos con una expresion regular que el caracter pulsado sea
   // una letra, numero o un espacio
   if(e.key.match(/[a-z0-9ñçáéíóú\s]/i)===null) {

       // Si la tecla pulsada no es la correcta, eliminado la pulsación
       e.preventDefault();
   }
}

</script>

</body>

</html>

