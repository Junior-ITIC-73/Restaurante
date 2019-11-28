<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<script text="javascript">


  function sololetras(e) {
   key=e.keyCode || e.which;

   teclado=String.fromCharCode(key).toLowerCase();

   letras="qwertyuiopasdfghjklñzxcvbnm ";

   especiales="8-37-38-46-164";

   teclado_especial=false;

   for(var i in especiales){
    if(key==especiales[i]){
     teclado_especial=true;
     break;
   }
 }

 if(letras.indexOf(teclado)==-1 && !teclado_especial){
  return false;
}

}
function solonumeros(e){
  key = e.keyCode || e.which;
  teclado = String.fromCharCode(key);
  numeros = "0123456789";
  especiales = "8-37-38-46";
  teclado_especial = false;

  for(var i in especiales){
    if(key == especiales[i]){
      teclado_especial = true;
    }
  }
  if(numeros.indexOf(teclado) == -1 && !teclado_especial){
    return false;
  } 

}
</script>
<body>

<center>
  <h1>MODIFICACION   DEL PLATILLO</h1>
<form method="POST" action="{{route('menuplatillo.update',$menu_platillo)}}" enctype="multipart/form-data">
  {{method_field('PUT')}}
  {{csrf_field()}}

  CAREGORIA:
  <select name="categoria_id" id="categorias">
    @foreach($categorias as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
    @endforeach
  </select>
  <br>
  NOMBRE<input type="text" name="nombre_platillo" id="nombre_platillo" required value="{{old('nombre_platillo',$menu_platillo->nombre_platillo)}}" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="20"><br>
  PRECIO:<input type="text" name="precio_platillo" id="precio_platillo" required value="{{old('precio_platillo',$menu_platillo->precio_platillo)}}" onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="10" minlength="10"><br>
      DESCRIPCI<br><textarea name="descripcion_platillo" id="descripcion_platillo" required value="{{old('descripcion_platillo',$menu_platillo->descripcion_platillo)}}" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="60">
  </textarea><br>
  IMAGEN<input type="file" name="chooseFile" id="chooseFile" required><br>
  <button type="submit">Enviar</button>
  </form>
</center>


</body>
</html>