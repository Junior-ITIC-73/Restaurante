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
                    <h3 class="box-title">Agregar categoria de producto</h3>
                </center>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{url('categoria')}}">
                    {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="InputName">Nombre Categoria</label>
                    <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" placeholder="Ejemplo: Lacteos">
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Añadir</button>
                </div>
              </form>
              <script>	
                    
                    let inputNombre = document.querySelector('#nombre_categoria');
                    let patronNombre = /[a-zA-Z+\s]+/;
                    validar(inputNombre,patronNombre,'nombre_categoria');
            
            
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