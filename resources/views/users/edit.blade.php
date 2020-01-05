@extends('admin.admin')

@section('header')
  <h1 align="center">
    Modificar Usuarios
  </h1>
@endsection

@section('content')
        <script src="{{{ asset('datatables/js/jquery-3.3.1.js')}}}"></script>
        <script>
          function validar(e) {
          tecla = (document.all) ? e.keyCode : e.which;
          if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
          // dejar la línea de patron que se necesite y borrar el resto
          patron =/[A-Za-z\sáéíóú]/; // Solo acepta letras
          //patron = /\d/; // Solo acepta números
          //patron = /\w/; // Acepta números y letras
          //patron = /\D/; // No acepta números
          //
          te = String.fromCharCode(tecla);
          return patron.test(te);
          }
           function validarNumeros(e) {
          tecla = (document.all) ? e.keyCode : e.which;
          if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
          // dejar la línea de patron que se necesite y borrar el resto
          // patron =/[A-Za-z\sáéíóú]/; // Solo acepta letras
          patron = /\d/; // Solo acepta números
          //patron = /\w/; // Acepta números y letras
          //patron = /\D/; // No acepta números
          //
          te = String.fromCharCode(tecla);
          return patron.test(te);
        }
        </script>

   @if($errors->any())
     <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
   </ul>
   @endif

 <form method="POST" action="{{route('users.update',$user)}}" id="usuarios">
  {{method_field('PUT')}}
  {{csrf_field()}}
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
                <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" value="{{old('name',$user->name)}}" required title="Introduce tu nombre" placeholder="Nombre de Usuario" class="form-control" onkeypress="return validar(event)">
                        @if($errors->has('name'))
                        <label style="color:red">{{$errors->first('name')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-3 -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Sexo</label>
                        <label for="hombre">Hombre</label><input type="radio" name="sexo" value="0" checked id="hombre">
                        <label for="mujer">Mujer</label><input type="radio" name="sexo" value="1" id="mujer">
                        @if($errors->has('sexo'))
                        <label style="color:red">{{$errors->first('sexo')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-3 -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" name="telefono_user" id="telefono" value="{{old('telefono_user',$user->telefono_user)}}" required title="Ingresa los 10 digitos de tu telefono" class="form-control" placeholder="Telefono" onkeypress="return validarNumeros(event)">
                        @if($errors->has('telefono_user'))
                        <label style="color:red">{{$errors->first('telefono_user')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-3 -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="calle">Calle</label>
                        <input type="text" name="calle" id="calle" value="{{old('calle',$user->calle)}}" title="Nombre de la Calle" class="form-control" placeholder="Calle">
                        @if($errors->has('calle'))
                        <label style="color:red">{{$errors->first('calle')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-3 -->
                </div><!-- fin row cabecera -->
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                        <label for="num_interior">Numero Interior</label>
                        <input type="text" name="num_interior" id="num_interior" value="{{old('num_interior',$user->num_interior)}}" required class="form-control" placeholder="Numero Interior" >
                        @if($errors->has('num_interior'))
                        <label style="color:red">{{$errors->first('num_interior')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-3 -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="num_exterior">Numero Exterior</label>
                            <input type="text" name="num_exterior" id="num_exterior"  value="{{old('num_exterior',$user->num_exterior)}}" required class="form-control" placeholder="Numero Exterior">
                            @if($errors->has('num_exterior'))
                            <label style="color:red">{{$errors->first('num_exterior')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-3 -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="CP">Codigo Postal</label>
                            <input type="text" name="CP" id="CP" value="{{old('CP',$user->telefono_user)}}" required title="Introduzca su Codigo Postal" class="form-control" placeholder="CP"> 
                            @if($errors->has('CP'))
                            <label style="color:red">{{$errors->first('CP')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-3 -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="localidad">Localidad</label>
                            <input type="text" name="localidad" id="localidad"  value="{{old('localidad',$user->localidad)}}" required title="Introduzca su localidad" class="form-control" placeholder="Localidad">
                            @if($errors->has('localidad'))
                            <label style="color:red">{{$errors->first('localidad')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-4 -->
                </div>
                <div class="row">
                <div class="col-md-12" id="guardar">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"> 
                            Modificar
                        </button>
                          <a href="{{route('users.index')}}"><button type="button" class="btn btn-danger">Regresar</button></a>
                    </div>
                </div>
                </div><!-- fin row buttons -->
            </form>
        </div>
    </div>
</form>

@endsection

