@extends('admin.admin')

@section('header')
    <h1 align="center">
        Agregar Categoria
    </h1>
@endsection

@section('content')
<script type="text/javascript">
    
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
    <div class="row">
        <div class="col-md-12 col-xs-12">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <form action="{{route('categoriaPlatillo.alta') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre_categoria" class="col-sm-0 col-form-label">Nombre categoria</label>
                            <input type="text" name="nombre_categoria" id="nombre_categoria" value="{{old('nombre_categoria')}}" required title="Ingresa numero" class="form-control" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="20" minlength="5">
                            @if($errors->has('nombre_categoria'))
                            <label style="color:red">{{$errors->first('nombre_categoria')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-3 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="chooseFile" class="col-sm-0 col-form-label">Imagen categoria</label>
                            <input type="file" name="chooseFile" id="chooseFile" required>
                        </div>
                    </div><!-- fin col-md-4 -->
                </div><!-- fin row cabecera -->
                <div class="row">
                <div class="col-md-12" id="guardar">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"> 
                            Guardar
                        </button>
                        <a href="{{route('categoriaPlatillo.index')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                    </div>
                </div>
                </div><!-- fin row buttons -->
            </form>
        </div>
    </div>
@endsection