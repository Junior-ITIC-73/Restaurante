@extends('admin.layout')

@section('content')
<h1>ACTUALIZAR PROVEEDOR</h1>
        <form action="{{ route('proveedor.update', ['id' => $proveedor->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <label class="form-control-label"> Razon social:</label>
                    <input type="text" class="form-control" value="{{$proveedor->razon_social}}" name="razon_social">
                    <br>
                <label class="form-control-label"> RFC:</label>
                    <input type="text" class="form-control" value="{{$proveedor->RFC}}" name="RFC">
                    <br>
                <label class="form-control-label"> Telefono:</label>
                    <input type="text" class="form-control" value="{{$proveedor->telefono_proveedor}}" name="telefono_proveedor">
                    <br>
                <label class="form-control-label"> Calle:</label>
                    <input type="text" class="form-control" value="{{$proveedor->calle}}" name="calle">
                    <br>
                <label class="form-control-label"> Numero Interior:</label>
                    <input type="text" class="form-control" value="{{$proveedor->num_interior}}" name="num_interior">
                    <br>
                <label class="form-control-label"> Numero Exterior:</label>
                    <input type="text" class="form-control" value="{{$proveedor->num_exterior}}" name="num_exterior">
                    <br>
                <label class="form-control-label"> Codigo postal:</label>
                    <input type="text" class="form-control" value="{{$proveedor->CP}}" name="CP">
                    <br>
                <label class="form-control-label"> Localidad:</label>
                    <input type="text" class="form-control" value="{{$proveedor->localidad}}" name="localidad">
                    <br>
                  <button type="submit" class="btn btn-success btn-lg btn-block">MODIFICAR</button>
        </form>
                        <script src="{{{ asset('datatables/js/jquery-3.3.1.js')}}}"></script>   
@endsection