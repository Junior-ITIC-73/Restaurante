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
	                    <select id="categorias_1"   name="id"  class="form-control round" alt="1" >
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
			</div>
			<div class="form-group">
			<div class="col-md-6"><p>Segunda seccion</p>
				<div class="form-group">
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
                <select id="menus_1" name="id" class="form-control round">
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