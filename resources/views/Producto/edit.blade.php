@extends('admin.layout')

@section('content')
    <h1>ACTUALIZAR PRODUCTO</h1>
        <form action="{{ route('producto.update', ['id' => $producto->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <label class="form-control-label"> Nombre Producto:</label>
                    <input type="text" class="form-control" value="{{$producto->nombre_producto}}" name="nombre_producto">
                    <br>
                <label class="form-control-label"> Cantidad:</label>
                    <input type="text" class="form-control" value="{{$producto->cantidad}}" name="cantidad">
                    <br>
                <label class="form-control-label"> Costo:</label>
                    <input type="text" class="form-control" value="{{$producto->costo}}" name="costo">
                    <br>
                <label  class="control-label">Seleccione Categoria</label>
                    <select id="categoria_id"   name="categoria_id"  class="form-control round">
                        @foreach($categorias as $categoria)            
                        <option value="{{ $categoria->id }}" required>{{ $categoria->nombre_categoria }}</option>
                        @endforeach
                    </select>
              <br>
              <label  class="control-label">Seleccione Proveedor</label>
                    <select id="proveedor_id"   name="proveedor_id"  class="form-control round">
                        @foreach($proveedores as $proveedor)            
                        <option value="{{ $proveedor->id }}" required>{{ $proveedor->razon_social }}</option>
                        @endforeach
                    </select>
                <br>
                <label class="form-control-label"> Fecha de ingreso:</label>
                    <input type="date" class="form-control" value="{{$producto->fecha_ingreso}}" name="fecha_ingreso">
                    <br>
                <label class="form-control-label"> Activo:</label>
                    <input type="radio" class="form-control" value="{{$producto->activo}}" name="activo">
                <button type="submit" name="button" class="btn btn-primary">Guardar</button>
        </form>
@endsection