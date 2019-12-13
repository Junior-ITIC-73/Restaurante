<html lang="en">
  <head>
    <title>Add Sales</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
            <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}" rel = "stylesheet">
            <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
            <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
  </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="margin-top:20px;">
              <table class="table table-bordered table-striped">
                <tr>
                   <td align="center">Modulo de ventas</td>
                </tr>
                <tr>
                  <td id="mod">
                    <p align="center" style="color: blue;">Selecciona productos a vender</p>    
                  </td>
                </tr>         
              </table>
          </div>
            <div class="col-md-6" style="margin-top:20px;">
              <table class="table table-bordered table-striped">
                <tr>
                   <td>Empleado</td>
                </tr>
                <tr>
                  <td id="empleado_num">
                    <select name="empleado_id" id="empleado">
                        <option value="*">Selecciona una opcion</option>
                        @foreach($empleados as $empleado)
                        <option value="{{$empleado->id}}">{{$empleado->name}}</option>
                        @endforeach
                    </select>                    
                  </td>
                </tr>         
              </table>
          </div>
          <div class="col-md-6" style="margin-top:20px;">
              <table class="table table-bordered table-striped">
                <tr>
                   <td>Categorias</td>
                </tr>
                <tr>
                  <td id="menu_id">
                    <select name="categoria__id" id="category" class="cat">
                      <option value="*">Selecciona una opcion</option>
                      @foreach($categorias as $categoria)
                      <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
                      @endforeach
                    </select>                    
                  </td>
                </tr>         
              </table>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" style="margin-top:20px;">
              <table class="table table-bordered table-striped">
                       <thead>
                         <tr>
                           <td>Identificador</td>
                           <td>Nombre</td>
                           <td>Precio</td>
                           <td>Accion</td>
                         </tr>
                       </thead>
                       <tbody id="answer">
                         
                       </tbody>
              </table>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered table-striped">
                       <thead>
                         <tr>
                           <td>Identificador</td>
                           <td>Nombre</td>
                           <td>Precio</td>
                           <td>Accion</td>
                         </tr>
                       </thead>
                       <tbody id="addregister">
                            
                       </tbody>
              </table>
          </div>
        </div>
      </div>
      <script>  
      $(document).ready(function(){
        $("#categoria").on('change', function(){
          var id = $(this).val();
          //alert(id);
          if($.trim(id)!= '0'){
            $.get('ajax1',{id : id},function(categorias){
              alert(categorias);
              //$("#answer").empty();
              // $.each(categorias,function(categoria_id , nombre_platillo, precio_platillo){
              //   //$("#answer").append("<option value='"+ categoria_id+"'>"+ nombre_platillo+ "</option>");
              //   $("#answer").append("<tr><td>"+id+"</td><td>"+nombre_platillo+"</td></tr>");
              // });
            })
          }
          else{
            $("#answer").empty();
          }
        });
    });
      </script>
{{--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 --}}  
</body>
</html>