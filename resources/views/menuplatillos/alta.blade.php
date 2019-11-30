<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"
  rel = "stylesheet">
  <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
  <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script type="text/javascript">
 $(document).ready(function(){
  $('input').keyup(function(){
    /* Obtengo el valor contenido dentro del input */
    var value = $(this).val();
    /* Elimino todos los espacios en blanco que tenga la cadena delante y detrás */
    var value_without_space = $.trim(value);
   });
 });

 function soloLetras(e){
                key = e.keyCode || e.which;
                teclado = String.fromCharCode(key).toLowerCase();
                letras = " abcdefghijklmnñopqrstuvwxyz";
                especiales = "8-37-38-46-164";
                teclado_especial = false;
                
                for(var i in especiales){
                    if(key == especiales[i]){
                        teclado_especial = true; break;
                    }
                }
                if(letras.indexOf(teclado) == -1 && !teclado_especial){
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
</head>
<body>

<center>
  <h1>ALTA DEL PLATILLO</h1>
  <form method="POST" action="{{route('menuplatillo.alta')}}" enctype="multipart/form-data">
    
    {{csrf_field()}}

  CAREGORIA:
  <select name="categoria_id" id="categorias">
    @foreach($categorias as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>
    @endforeach
  </select>
  <br>
  NOMBRE<input type="text" name="nombre_platillo" id="nombre_platillo" required value="{{old('nombre_platillo')}}" onkeypress="return soloLetras(event)" onpaste="return false;"><br>
  PRECIO:<input type="text" name="precio_platillo" id="precio_platillo" required value="{{old('precio_platillo')}}" onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="5"><br>
    DESCRIPCION<br><textarea name="descripcion_platillo" id="descripcion_platillo" required value="{{old('descripcion_platillo')}}" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="60">
  </textarea>
  <br>
  IMAGEN<input type="file" name="chooseFile" id="chooseFile" required><br>
  <button type="submit">Enviar</button>
  </form>
</center>


</body>
</html>