<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"
  rel = "stylesheet">
  <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
  <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>

   <link rel="stylesheet" href="{{asset('datatables/bootstrap.css')}}">
   <link rel="stylesheet" href="{{asset('datatables/bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{asset('datatables/css/jquery.dataTables.min.css')}}">
   <link rel="stylesheet" href="{{asset('datatables/css/estilos.css')}}">

  <script type="text/javascript">
 $(document).ready(function(){
	var total_venta=0;
	$(".total").each(function(){
		total_venta+=parseInt($(this).html()) || 0;
	});
	$("#total").html('<b>'+total_venta+'</b>');

	$('#a1').DataTable( {
        "lengthMenu": [4],
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                title: 'CORTE DE CAJA' + '{{$date}}',
                exportOptions: {
                    columns: [ 0,':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                title: 'CORTE DE CAJA' + '{{$date}}',
                exportOptions: {
                    columns: ':visible'
                }
            },

            {
                extend: 'pdfHtml5',
                title: 'CORTE DE CAJA' + '{{$date}}',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'print',
                title: 'CORTE DE CAJA' + '{{$date}}',
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
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],  
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior",
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
 });
  </script>
</head>
<body>
<center>
<H1>DETALLES</H1>
<div class="container">
<table border="4" id="a1" class="table table-striped table-bordered" style="width:100%" >
		<thead>
		<tr align="center">
			<th colspan="5" > VENTAS DEL DIA <b>{{$date}}</b></th>
		</tr>
		<tr>
			<th><b>FOLIO VENTA</b></th>
			<th><b>TIPO PAGO</b></th>
			<th><b>PROPINA</b></th>
			<th><b>FECHA</b></th>
			<th><b>IMPORTE</b></th>
		</tr>
		</thead>
		<tbody>
		@foreach($ventas as $venta)
		<tr>
			<td>000{{$venta->folio_venta}}</td>
			@if($venta->tipo_de_pago == 0)
				<td>Efectivo</td>
			@else
				@if($venta->tipo_de_pago == 1)
					<td>Tarjeta</td>
				@endif
			@endif
			<td>{{$venta->propina}}</td>
			<td>{{$venta->created_at}}</td>
			<td id="total_venta" class="total">{{$venta->total_venta}}</td>
		</tr>
		@endforeach
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td align="right">TOTAL:</td>
			<td colspan="2" id="total"></td>
		</tr>
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
</body>
</html>