@extends('admin.layout')
@section('content')
<section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-warning">
              <div class="box-header with-border">
                <center>  
                    <h3 class="box-title">Agregar Producto</h3>
                </center>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{url('producto')}}">
                    {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="InputName">Nombre Categoria</label>
                    <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" required placeholder="Ejemplo: Lechuga">
                  </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="InputCantidad">Cantidad</label>
                        <input type="num" class="form-control" id="cantidad" name="cantidad" required placeholder="Ejemplo: 76">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="InputCosto">Costo</label>
                        <input type="num" class="form-control" id="costo" name="costo" required placeholder="Ejemplo: $ 80">
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="InputName">Fecha</label>
                        <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label  class="control-label">Seleccione Categoria</label>
                            <select id="categoria_id"   name="categoria_id"  class="form-control round">
                                @foreach($categorias as $categoria)            
                                    <option value="{{ $categoria->id }}" required>{{ $categoria->nombre_categoria }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label  class="control-label">Seleccione Proveedor</label>
                            <select id="proveedor_id"   name="proveedor_id"  class="form-control round">
                                @foreach($proveedores as $proveedor)            
                                    <option value="{{ $proveedor->id }}" required>{{ $proveedor->razon_social }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Activo</label
                            <br>
                        <input type="radio" id="activo" name="activo" value="1" checked>Si
                        <input type='radio' name='activo' value="0" >No                    
                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Añadir</button>
                </div>
              </form>
              <script>	
                    let inputNombreProducto = document.querySelector('#nombre_producto');
                    let patronNombreProducto = /[a-zA-Z+\s]+/;
                    validar(inputNombreProducto,patronNombreProducto,'nombre_producto');

                    let inputCantidad = document.querySelector('#cantidad');
                    let patronCantidad = /[0-9\/]+/;
                    validar(inputCantidad,patronCantidad,'cantidad');

                    let inputCosto = document.querySelector('#costo');
                    let patronCosto = /[0-9\/]+/;
                    validar(inputCosto,patronCosto,'costo');

                    function validar(input,patron,idInput){
                        input.addEventListener('keydown', event => {
                            if(!patron.test(event.key)) {
                                document.getElementById(idInput).style.border = '1px solid #FF0000';
                            }else{
                                document.getElementById(idInput).style.border = '1px solid #00cc00';
                            }
                        });	

                    }
                </script>
            </div>
            <!-- /.box -->
          </div>
        </div>
</section>
     
@endsection