@extends('admin.layout')

@section('content')
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
@endsection