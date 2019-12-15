@extends('admin.admin')

@section('header')
    <h1 align="center">
        Detalle de ventas en efectivo
    </h1>
    <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"
  rel = "stylesheet">
  <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
  <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
@endsection

@section('content')

<script type="text/javascript">
 $(document).ready(function(){
    var total_venta=0;
    $(".total").each(function(){
        total_venta+=parseInt($(this).html()) || 0;
    });
    $("#total").html('<b>'+total_venta+'</b>');
</script>

<div class="container"> 
    <div class="row">
        <div class="col-md-12">
            <table table border="4" class="table table-striped table-bordered" style="width:100%" id="a" align="center">
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
                        <td>Efectivo</td>
                        <td>{{$venta->propina}}</td>
                        <td>{{$venta->created_at}}</td>
                        <td id="total_venta" class="total">{{$venta->total_venta}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="right">TOTAL:</td>
                        <td colspan="2" id="total"></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection