@extends('admin.admin')

@section('header')
    <h1 align="center">
        Modificacion de Platillo
    </h1>

  <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"
  rel = "stylesheet">
  <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
  <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>

@endsection

@section('content')

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
            
            <form method="POST" action="{{route('menuplatillo.update',$menu_platillo)}}" enctype="multipart/form-data">
               {{method_field('PUT')}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                
                <div class="row">
                  <div class="col-md-3">
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select name="categoria_id" id="categoria_id" class="form-control selectpicker" data-live-search="true">
                                @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">
                                    {{ $categoria->nombre_categoria }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div><!-- fin col-md-4 -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="nombre_platillo" class="col-sm-0 col-form-label">Nombre Platillo</label>
                            <input type="text" name="nombre_platillo" id="nombre_platillo" value="{{old('nombre_platillo',$menu_platillo->nombre_platillo)}}" required title="Ingresa platillo" class="form-control" onkeypress="return soloLetras(event)" onpaste="return false;">
                            @if($errors->has('nombre_platillo'))
                            <label style="color:red">{{$errors->first('nombre_platillo')}}</label>
                            @endif
                            <br>
                            <label for="chooseFile" class="col-sm-0 col-form-label">Imagen Platillo</label>
                            <input type="file" name="chooseFile" id="chooseFile" required>
                        </div>
                    </div><!-- fin col-md-3 -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="precio_platillo" class="col-sm-0 col-form-label">Precio Platillo</label>
                            <input type="text" name="precio_platillo" id="precio_platillo" value="{{old('precio_platillo',$menu_platillo->precio_platillo)}}" required title="Ej: Ocupada" class="form-control" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="38" minlength="6">
                            @if($errors->has('precio_platillo'))
                            <label style="color:red">{{$errors->first('precio_platillo')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-4 -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="descripcion_platillo" class="col-sm-0 col-form-label">Descripcion</label>
                            <input type="text" name="descripcion_platillo" id="descripcion_platillo" value="{{old('descripcion_platillo',$menu_platillo->descripcion_platillo)}}" required title="Ej: Ocupada" class="form-control" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="60" minlength="6">
                            @if($errors->has('descripcion_platillo'))
                            <label style="color:red">{{$errors->first('descripcion_platillo')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-4 -->
                </div><!-- fin row cabecera -->
                <div class="row">
                <div class="col-md-12" id="guardar">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"> 
                            Guardar
                        </button>
                        <a href="{{route('menuplatillo.index')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                    </div>
                </div>
                </div><!-- fin row buttons -->
            </form>
        </div>
    </div>
@endsection