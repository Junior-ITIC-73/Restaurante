@extends('admin.admin')

@section('header')
    <h1 align="center">
        Agregar Usuario
    </h1>
    <link href = "{{asset('js/jquery-ui-1.12.1/jquery-ui.css')}}"
    rel = "stylesheet">
    <script src = "{{asset('js/jquery-3.4.1.js')}}"></script>
    <script src = "{{asset('js/jquery-ui-1.12.1/jquery-ui.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/messages_es.js')}}"></script> 
    <style type="text/css">
        .error {
            border: 2px solid #f00;
        }

        .valid {
            border: 2px solid #0ff;
        }

        form, input {
            margin: 10px;
        }
        #docs {
            display: block;
            position: fixed;
            bottom: 0;
            right: 0;
        }
        .uitooltip{
            padding: 8px;
            background:#00D500;
            position: absolute;
            max-width: 300px;
            -webkit-box-shadow: 0 0 5px #aaa;
            box-shadow: 0 0 5px #aaa;
            font-size: 13px;
            white-space: pre-line;
            border-radius: 10px;
        }
    </style>
@endsection

@section('content')
<script type="text/javascript">
        $(document).ready(function () {
        // VALIDACIONES PERSONALIZADAS
        $.validator.addMethod("alpha", function(value, element) {
            return /^[a-z]*$/i.test(value);
        });
        $.validator.addMethod("password", function(value, element) {
            return /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/i.test(value);
        });

        //-END VALIDACIONES PERSONALIZADAS

        //-ACTIVAR TOOLTIP EN TODAS LOS INPUT 
        $(document).tooltip({
            tooltipClass: "uitooltip",
            position: {
                my: "left top",
                at: "right+5 top-5"
            }
        });

        //-FORMULARIO A VALIDAR CON JQUERY
        $('#usuarios').validate({ // initialize the plugin
            rules: {
                name: {
                    required: true,
                    minlength: 4
                },
                email: {
                    required: true,
                    email: true
                },
                password:{
                    required:true,
                    password: true
                },
                telefono_user: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength:10
                },
                calle:{
                    required: true,
                },
                num_interior:{
                    required: true,
                    number: true,
                },
                num_exterior:{
                    required: true,
                    number: true,
                },
                CP:{
                    required: true,
                    minlength:5
                },
                localidad:{
                    required: true,
                    minlength: 4
                }
            },
            errorPlacement: function(){
                return false;
            }
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
            
            <form method="POST" action="{{route('users.store')}}" id="usuarios">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                
                <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name" class="col-sm-0 col-form-label">Nombre</label>
                        <input type="text" name="name" id="name" value="{{old('name')}}" required title="Introduce tu nombre" placeholder="Nombre de Usuario" class="form-control" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="25">
                        @if($errors->has('name'))
                        <label style="color:red">{{$errors->first('name')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-3 -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="email" class="col-sm-0 col-form-label">Correo Electronico</label>
                        <input type="email" name="email" id="email" value="{{old('email')}}" required title="Introduce tu email" placeholder="Email" class="form-control" maxlength="40">
                        @if($errors->has('email'))
                        <label style="color:red">{{$errors->first('email')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-3 -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" minlength="8"  required title="Introduce una Contraseña
                        1.-Debe ser mayor a 8 caracteres
                        2.-Debe contener numeros y letras" class="form-control" placeholder="Password">
                        @if($errors->has('password'))
                        <label style="color:red">{{$errors->first('password')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-3 -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="password_confirmation">Confirma tu Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required title="Confirma tu contraseña" placeholder="Confirma tu Contraseña" class="form-control">
                        @if($errors->has('password_confirmation'))
                        <label style="color:red">{{$errors->first('password_confirmation')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-3 -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label><b>Sexo</b></label><br>
                        <label for="hombre">Hombre</label><input type="radio" name="sexo" value="0" checked id="hombre">
                        <label for="mujer">Mujer</label><input type="radio" name="sexo" value="1" id="mujer">
                        @if($errors->has('sexo'))
                        <label style="color:red">{{$errors->first('sexo')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-3 -->
                 <div class="col-md-3">
                    <div class="form-group">
                        <label><b>Rol:</b></label><br>
                        <label for="hombre">Admin</label><input type="radio" name="rol_user" value="1"  id="hombre">
                        <label for="mujer">Empleado</label><input type="radio" name="rol_user" value="2" id="mujer">
                        <label for="mujer">Invitado</label><input type="radio" name="rol_user" value="3" id="mujer" checked>
                        @if($errors->has('rol_user'))
                        <label style="color:red">{{$errors->first('rol_user')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-3 -->

                </div><!-- fin row cabecera -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono_user" id="telefono" value="{{old('telefono_user')}}" required title="Ingresa los 10 digitos de tu telefono" class="form-control" placeholder="Telefono" onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="10" minlength="10">
                            @if($errors->has('telefono_user'))
                            <label style="color:red">{{$errors->first('telefono_user')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="calle">Calle</label>
                            <input type="text" name="calle" id="calle" value="{{old('calle')}}" title="Nombre de la Calle" class="form-control" placeholder="Calle" maxlength="25">
                            @if($errors->has('calle'))
                            <label style="color:red">{{$errors->first('calle')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="num_interior">Numero Interior</label>
                            <input type="text" name="num_interior" id="num_interior" value="{{old('num_interior')}}" required class="form-control" placeholder="Numero Interior" onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="5">
                            @if($errors->has('num_interior'))
                            <label style="color:red">{{$errors->first('num_interior')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="num_exterior">Numero Exterior</label>
                            <input type="text" name="num_exterior" id="num_exterior" value="{{old('num_exterior')}}" required class="form-control" placeholder="Numero Exterior" onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="5">
                            @if($errors->has('num_exterior'))
                            <label style="color:red">{{$errors->first('num_exterior')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-4 -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="CP">Codigo Postal</label>
                            <input type="text" name="CP" id="CP" value="{{old('CP')}}" required title="Introduzca su Codigo Postal" class="form-control" placeholder="CP" onkeypress="return solonumeros(event)" onpaste="return false;" maxlength="5" minlength="5"> 
                            @if($errors->has('CP'))
                            <label style="color:red">{{$errors->first('CP')}}</label>
                            @endif
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