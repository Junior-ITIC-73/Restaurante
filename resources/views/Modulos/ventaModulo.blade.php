<html>
<head>
	<meta charset="UTF-8">
	<title>Ventas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	  <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}" rel = "stylesheet">
	  <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
	  <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
</head>
<body>
	<div class="container">
		<div class="nav-header">Usuario:
			<select name="user_id" id="user">
				<option value="*">Selecciona Empleado</option>   	
	                        @foreach($users as $user)         
	                        <option value="{{ $user->id }}" >{{ $user->name }}</option>
	                        @endforeach
			</select>
		<form name="formularioventa" method="POST" action="{{url('realizarventa')}}">
		<div class="row" align="center">
			<div class="col-md-12"><p>Realizar venta.... ARBOLEDA RESTAURANTE</p></div> 
		</div>
		<div class="row" align="center">
			<div class="col-md-6"><p>Primera seccion</p>
				<div class="form-group ">
	                <label  class="control-label">Seleccione Categoria</label>
	                    <select id="categorias_1"   name="categoria_id"  class="form-control round" alt="1" >
	                    	<option value="*">Selecciona Categoria</option>   	
	                        @foreach($categorias as $categoria)         
	                        <option value="{{ $categoria->id }}" >{{ $categoria->nombre_categoria }}</option>
	                        @endforeach
	                    </select>
            	</div>
							<script type="text/javascript">
								$(document).ready(function(){
						    		$("#categorias_1").change(function(event){
						    			$.get("menus/"+event.target.value+"",function(response,menu){
						    				$("#menus_1").empty();
						    				for(i=0;i<response.length; i++){
						    					$("#menus_1").append("<option value='"+response[i].id+"'>"+response[i].nombre_platillo+"</option>");
						    				}
						    			});
						    		});
						    	});
							</script>
              <script type="text/javascript">
                  function obtenerId(){
                      var id = document.getElementById("menus_1").value;
                      document.getElementById("info").innerHTML = id;  
                  }
              </script>
			</div>
			<div class="form-group">
			<div class="col-md-6"><p>Segunda seccion</p>
				<div class="form-group">
          <div class="col-md-12">
            <table>
              <thead>
                <tr>
                  <th>
                    Nombre
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($mennus as $i => $men)
                   <tr id="row{{$men->id}}">
                    <th>
                      <td>{{ $men->id }}</td>
                    </th>
                   </tr>
                @endforeach
              </tbody>
            </table>
          </div>
					<div id="info"></div>
				</div>
			</div>
			</div>
		</div>
		<div class="form-group">
		<div class="row" align="center">
			<div class="col-md-12"><p>Tercera seccion</p>
            	<div class="col-md-12">
                <label class="floating-label" for="inputMenus">{{ __('Menu') }}</label>
                  <select id="menus_1" name="menu_id" class="form-control round" onclick="return obtenerId();">
                  	<option value="">Selecciona un menu</option>
                  </select>
              	</div>       
			</div>
		</div>
		</div>
		<button id="sales" type="submit" class="btn btn-primary btn-block registro" >
  			Agregar
        </button>
		</form>
		</div>
	</div>
</body>
</html>

$(document).ready(function(){
                $("#categoria_id").on('change', function(){
                  var id_categoria = $(this).val();
                  if($.trim(id_categoria)!= '0'){
                    $.get("menus/"+event.target.value+"",function(response,menu){
                    $("answer").empty();
                      $.each(response,function(id,nombre_categoria,precio_categoria){
                      $("answer").append("<tr><td>"+ id +"</td><td>"+ nombre_categoria +"</td><td>" + precio_categoria +"</td></tr>");
                      });
                    });
                  }
                });
              });

$(document).on("click",".product",function(e){
                    e.preventDefault();
                    var id = $(this).attr("id");
                    //alert(id);
                    if(id != 0){
                      $("#register").append("<tr><td>"+ id +"</td></tr>");
                    }
                  }); 
                });



<html>
<head>
  <meta charset="UTF-8">
  <title>Agregar productos a venta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}" rel = "stylesheet">
      <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
      <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
</head>
<body>
  <div class="container" align="center">
      <div class="row">
        <div class="form-group">
          <div class="col-md-12">
            <select name="categoria_id" id="categoria_id">
              <option value="*" >Selecciona una categoria</option>
              @foreach($categorias as $categoria)
              <option value="{{ $categoria->id }}">{{ $categoria->nombre_categoria }}</option>
              @endforeach
            </select>
            <script>
              $(document).ready(function(){
                    $("#categoria_id").change(function(event){
                      var val = $(this).val();
                      if(val == "*"){
                        alert("Selecciona una categoria");
                      }
                      else{
                        $.get("menus/"+event.target.value+"",function(response,menu){
                        if(response != '0'){
                          $("#answer").empty();
                          for(i=0;i<response.length; i++){
                            $("#answer").append("<thead><tr><th>Identificador</th><th>Nombre</th><th>Precio</th><th>Accion</th></tr></thead><tr><td>"+ response[i].id +"</td><td>"+ response[i].nombre_platillo +"</td><td>" + response[i].precio_platillo + "</td><td><button class='product' id='"+response[i].id+"'>Agregar</button></td></tr>");
                            }
                          }
                        });
                    }
                      
                });

                  $(document).on("click",".product",function(e){
                    e.preventDefault();
                    var id = $(this).attr("id");
                    //alert(id);
                    if(id != 0){
                      $("#addregister").append("<tr><td>"+ id +"</td><td><button class='deleteProduct'>Eliminar</button></td></tr>");
                    }
                    $("#addregister" ).on( "click", ".deleteProduct", function(){
                    $(this).parent().parent().remove();
                    });
                  }); 
                });
            </script>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <table id="answer" border="1">
              {{-- <thead>
                <tr>
                  <th>Identificador</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Accion</th>
                </tr>
              </thead> --}}
            </table>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <form action="#">
              <table border="1" id="addregister">
                <thead>
                  <tr>
                    <th>I/P</th>
                  </tr>
                </thead>
              </table>
              <div class="form-group">
                <button class="register" id="btn1">Registrar</button>
              </div>  
            </form>
          </div>
        </div>
      </div>
  </div>
</body>
</html>