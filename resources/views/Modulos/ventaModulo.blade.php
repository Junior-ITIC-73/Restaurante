<html>
<head>
	<meta charset="UTF-8">
	<title>Ventas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row" align="center">
			<div class="col-md-12"><p>Realizar venta.... ARBOLEDA RESTAURANTE</p></div>
		</div>
		<div class="row" align="center">
			<div class="col-md-6"><p>Primera seccion</p>
				<div class="form-group ">
	                <label  class="control-label">Seleccione Categoria</label>
	                    <select id="categoria_id"   name="categoria_id"  class="form-control round" onclick="return obtenerId();">
	                    	<option value=" ">Selecciona Categoria</option>   	
	                        @foreach($categorias as $categoria)         
	                        <option value="{{ $categoria->id }}" >{{ $categoria->nombre_categoria }}</option>
	                        @endforeach
	                    </select>
            	</div>
				<table border="1">
				<tr>
					<th>Encabezados Categorias</th>
				</tr>	
				</table>
				<script type="text/javascript">
					            function obtenerId(){

					                var texto;
					                var btn1 = document.getElementById('categoria_id').value;
			                		document.getElementById("info").innerHTML = btn1;

					               }
					              	               
					        </script>		
			</div>
			<div class="col-md-6"><p>Segunda seccion</p>
				
				<table border="1">
					
				<tr>
					<th>Encabezados de ventas</th>
				</tr>	
				</table>
			</div>
		</div>
		<div class="row" align="center">
			<div class="col-md-12"><p>Tercera seccion</p>
					<table border="1">
						<tr>
							<th>Encabezados Tipos de Categorias</th>
						</tr>	
					</table>
					<br><br>
						<div id="info"></div>
					        <input type="submit">Obtener id de respuesta
			</div>
		</div>
	</div>
</body>
</html>