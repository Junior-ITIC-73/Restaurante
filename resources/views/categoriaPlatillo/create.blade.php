<html>
    <head>
        <title>Alta Categoria</title>
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
  </script>
    </head>
        <body>
            <center>
            <h1>Alta Categoria</h1>
            <form action="{{route('categoriaPlatillo.alta') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
            <label>Nombre Categoria</label>
            <input type="text" name="nombre_categoria" required onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="10"><br>
            <input type="file" name="chooseFile" id="chooseFile" required><br>
                <button type="submit">Listo</button>
            </form>
            </center>
        </body>
</html>
