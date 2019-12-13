<html>
<head>
	<meta charset="UTF-8">
	<title>Prueba de ajax de clase</title>
	<link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}" rel = "stylesheet">
	        <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
	        <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
</head>
<body>
	<label>
		<select name="categoria_id" id="categoria">
			<option value="*">Selecciona una categoria</option>
			@foreach($categorias as $categoria)
			<option value="{{ $categoria->id }}">{{ $categoria->nombre_categoria }}</option>
			@endforeach
		</select>
		<div class="label-text"></div>
	</label>
	<label>
		<select name="grupo" id="grupo">
			<option value="*">Selecciona un grupo</option>
		</select>
		<label class="label-text"></label>
	</label>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#categoria").on('change', function(){
				var id = $(this).val();
				//alert(id);
				if($.trim(id)!= '0'){
					$.get('ajax1',{id : id},function(categorias){
						$("#grupo").empty();
						$("#grupo").append("<option value='0' >Selecciona un grupo </option>");
						$.each(categorias,function(categoria_id , nombre_platillo){
							$("#grupo").append("<option value='"+ categoria_id+"'>"+ nombre_platillo+ "</option>");
						});
					})
				}
				else{
					$("#grupo").empty();
					$("#grupo").append("<option value='0'></option>");
				}
			});
		});
	</script>
</body>
</html>