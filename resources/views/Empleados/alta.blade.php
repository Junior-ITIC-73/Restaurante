@extends('admin.admin')

@section('header')
    <h1 align="center">
        Alta Empleados
    </h1>
@endsection

@section('content')
<script>
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
            
            <form method="POST" action="{{route('empleado.alta')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name" class="col-sm-0 col-form-label">Nombre</label>
                        <input type="text" name="name" id="telefono" value="{{old('name')}}" required title="Ingresa tu telefono" class="form-control" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="20">
                        @if($errors->has('name'))
                        <label style="color:red">{{$errors->first('name')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-3 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="app" class="col-sm-0 col-form-label">Apellido Paterno</label>
                        <input type="text" name="apellido_paterno" id="apellido_paterno" value="{{old('apellido_paterno')}}" required title="Ingresa Apellido Paterno" class="form-control" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="10">
                        @if($errors->has('apellido_paterno'))
                        <label style="color:red">{{$errors->first('apellido_paterno')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apm" class="col-sm-0 col-form-label">Apellido Materno</label>
                        <input type="text" name="apellido_materno" id="apellido_materno" value="{{old('apellido_materno')}}" required title="Ingresa Apellido Materno" class="form-control" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="10">
                        @if($errors->has('apellido_materno'))
                        <label style="color:red">{{$errors->first('apellido_materno')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-4 -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label><b>Sexo</b></label>
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
                            <input type="text" name="telefono_user" id="telefono" value="{{old('telefono_user')}}" required title="Ingresa los 10 digitos de tu telefono" class="form-control" placeholder="Telefono" onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="10">
                            @if($errors->has('telefono_user'))
                            <label style="color:red">{{$errors->first('telefono_user')}}</label>
                            @endif
                    </div>
                </div><!-- fin col-md-3 -->
                </div><!-- fin row cabecera -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <select name="id_estado" id="id_estado" class="form-control selectpicker" data-live-search="true">
                                {{-- @foreach($empleados as $emp)
                                <option value="{{ $emp->id }}">
                                    {{ $emp->name }}
                                </option>
                                @endforeach --}}
                                <option>Mexico</option>
                            </select>
                        </div>
                    </div><!-- fin col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="municipio">Municipio</label>
                            <select name="id_municipio" id="id_municipio" class="form-control selectpicker" data-live-search="true">
                                {{-- @foreach($empleados as $emp)
                                <option value="{{ $emp->id }}">
                                    {{ $emp->name }}
                                </option>
                                @endforeach --}}
                                <option>Lerma</option>
                            </select>
                        </div>
                    </div><!-- fin col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="localidad">Localidad</label>
                            <input type="text" name="localidad" id="localidad" value="{{old('localidad')}}" required title="Introduzca su localidad" class="form-control" placeholder="Localidad" onkeypress="return soloLetras(event)" onpaste="return false;">
                            @if($errors->has('localidad'))
                            <label style="color:red">{{$errors->first('localidad')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-4 -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="calle">Calle</label>
                            <input type="text" name="calle" id="calle" value="{{old('calle')}}" title="Nombre de la Calle" class="form-control" placeholder="Calle" maxlength="25">
                            @if($errors->has('calle'))
                            <label style="color:red">{{$errors->first('calle')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-4 -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="num_interior">Numero Interior</label>
                            <input type="text" name="num_interior" id="num_interior" value="{{old('num_interior')}}" required class="form-control" placeholder="Numero Interior" onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="5">
                            @if($errors->has('num_interior'))
                            <label style="color:red">{{$errors->first('num_interior')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-4 -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="num_exterior">Numero Exterior</label>
                            <input type="text" name="num_exterior" id="num_exterior" value="{{old('num_exterior')}}" required class="form-control" placeholder="Numero Exterior" onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="5">
                            @if($errors->has('num_exterior'))
                            <label style="color:red">{{$errors->first('num_exterior')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-4 -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="CP">Codigo Postal</label>
                            <input type="text" name="CP" id="CP" value="{{old('CP')}}" required title="Introduzca su Codigo Postal" class="form-control" placeholder="CP" onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="5" minlength="5"> 
                            @if($errors->has('CP'))
                            <label style="color:red">{{$errors->first('CP')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-4 -->
                </div>
                <div class="row">
                <div class="col-md-12" id="guardar">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"> 
                            Guardar
                        </button>
                        <a href="{{route('users.index')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                    </div>
                </div>
                </div><!-- fin row buttons -->
            </form>
        </div>
    </div>
@endsection

