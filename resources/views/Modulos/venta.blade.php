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
          {{-- <script type="text/javascript">
            function obtener(){
              // var fila = document.getElementsByTagName("tr");
              // var i ;
              // for(i=0;i<fila.length;i++){
              //   fila[i].style.backgroundColor = "red";
              // }
              var fila = document.getElementsByClassName('fila');
              alert(fila);
              
            }
              
          </script> --}}
  </head>
    <body>
      <div class="container">
      	<div class="row">
          <form name="formularioorden" method="POST" action="{{url('orden')}}">
            {{ csrf_field() }}
          <div class="col-md-12" style="margin-top:20px;">
              <table class="table table-bordered table-striped">
                <tr>
                   <td align="center">Modulo de ventas</td>
                   <td>Folio orden: <input type="text" name="folio_orden" placeholder="Asignar Folio"></td>
                </tr>
                <tr>
                  <td id="mod">
                    <p align="center" style="color: blue;">Datos de la orden</p>
                     <select name="user_id" id="usuario">
                      <option value="*">Selecciona Usuario</option>
                      @foreach($usuarios as $usuario)
                      <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                      @endforeach
                    </select> 
                    <select name="mesa_id" id="mesa">
                      <option value="*">Selecciona Mesa</option>
                      @foreach($mesas as $mesa)
                      <option value="{{$mesa->id}}">{{$mesa->numero_mesa}}</option>
                      @endforeach
                    </select>     
                  </td>
                  <td>
                    Total de la orden: <input type="text" name="total_orden" placeholder="Cantidad">
                  </td>
                </tr>         
              </table>
              <button type="submit" value="enviar">Guardar orden</button>
          </div>
          </form>
      		{{-- <div class="col-md-6" style="margin-top:20px;">
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
          </div> --}}
          <div class="col-md-12" style="margin-top:20px;">
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
                    <select name="orden_id" id="orden">
                      <option value="*">Selecciona la FolioOrden</option>
                    @foreach($ordenes as $orden)
                      <option value="{{ $orden->id }}">{{ $orden->folio_orden }}</option>
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
                           <td>Cantidad</td>
                           <td>Accion</td>
                         </tr>
                       </thead>
                       <tbody id="answer">
                         
                       </tbody>
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
                           <td>Sub-Total</td>
                           <td>Accion</td>
                         </tr>
                       </thead>
                       <tbody id="addregister">
                            
                       </tbody>
              </table>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" style="margin-top:20px;">
                <table class="table table-bordered table-striped">
                  <thead>
                         <tr>
                           <td>Total:</td>
                         </tr>
                       </thead>
                       <tbody id="total">
                            
                       </tbody>        
                </table>
          </div>
        </div>
      </div>
      <script>	
		  $(document).ready(function(){
        //------------Primer script-------------------------
          $("#category").change(function(event){
            $.get("menus/"+event.target.value+"",function(response,menu){
                          $.get("menus/"+event.target.value+"",function(response,menu){
                          if(response != '0'){
                            $("#answer").empty();
                            for(i=0;i<response.length; i++){
                              $("#answer").append("<tr class='fila' id='"+response[i]+"'><td>"+ response[i].id +"</td><td>"+ response[i].nombre_platillo +"</td><td>" + '<input type="text" value="$'+response[i].precio_platillo+'" id="precio" readonly>'+ "</td><td>"+'<input type="text" value="1" class="cantidad">'+"</td><td><button class='product' id='"+response[i].id+"' >Agregar</button></td></tr>");
                              }
                              //$(".totorden").append("<p>"+200+"</p>");
                            }
                          });          
            });
          });
          //-----------Comentario-----------------------
          //Revisar el porque solo multiplica por la primer cantidad del primer resultado
          //Los productos se multiplican solo por la primera contidad(todos)
          // $(document).on("change",".cantidad",function(e){
          //   e.preventDefault();
          //   var cantidad = $(this).val();
          // });
          //----------Segundo Script-----------------------

        $(document).on("click",".product",function(e){
          e.preventDefault();
          var valor = $(this).attr("id");
          //var cantidad = 8;
          $.get("menusadd/"+valor+"",function(response){
            //console.log(response);
            if(response != '0'){
                        //$("#addregister").empty();
                        for(i=0;i<response.length; i++){
                              //alert(resultado);
                            $("#addregister").append("<tr><td>"+ response[i].id +"</td><td>"+ response[i].nombre_platillo +"</td><td>" + '<input type="text" value="$'+response[i].precio_platillo+'" class="subtotal" readonly>'+"</td><td><button class='deleteProduct'>Eliminar</button></td></tr>");
                            // var i =0;
                            // var subtotal = response[i].precio_platillo;
                            // total = subtotal + i;
                            // $("#total").append("<span>"+total+"</span>");
                            //var impresionTotal = subtotal + response[i].precio_platillo;
                            // var num1 = parseInt(jQuery('.cantidad').val(),10);
                            // var platillo = response[i].precio_platillo;
                            // var total = platillo * num1;
                            // //alert(total);
                            // //$("#total").append("<tr><td>"+"$"+response[i].precio_platillo+".00"+"</td></tr>");
                            // $("#total").append("<tr><td>"+"$"+total+".00"+"</td></tr>");

                            }
                      }
                      $("#addregister" ).on( "click", ".deleteProduct", function(){
                      $(this).parent().parent().remove();
                      });
          });
        });
          //--------------Tercer script-------------------
          //
        //--------------------------------------------------
          
        //--------------------------------------------------  
      } );
      </script>
{{--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 --}}  </body>
</html>