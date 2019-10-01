<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar categoria/producto</title>
</head>
<body>
        <h1>Registra una Categoria de Producto</h1>
        <form method="POST" action="{{url('categoria')}}">
            {{ csrf_field() }}
            <div class="form-group ">
                <input type="text" id="nombre_categoria" name="nombre_categoria" required> Nombre de la categoria del producto
                <br>
                <input type="submit">
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
    
</body>
</html>