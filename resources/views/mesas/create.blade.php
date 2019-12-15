@extends('admin.admin')

@section('header')
    <h1 align="center">
        Agregar Mesa
    </h1>
@endsection

@section('content')
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
            
            <form method="POST" action="{{route('mesas.store')}}" id="mesas">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="col-sm-0 col-form-label">Numero Mesa</label>
                            <input type="text" name="numero_mesa" id="numero_mesa" value="{{old('numero_mesa')}}" required title="Ingresa numero" class="form-control" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="20" minlength="10">
                            @if($errors->has('numero_mesa'))
                            <label style="color:red">{{$errors->first('numero_mesa')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-3 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="descripcion_mesa" class="col-sm-0 col-form-label">Descripcion Mesa</label>
                            <input type="text" name="descripcion_mesa" id="descripcion_mesa" value="{{old('descripcion_mesa')}}" required title="Ej: Ocupada" class="form-control" onkeypress="return soloLetras(event)" onpaste="return false;" maxlength="38" minlength="6">
                            @if($errors->has('descripcion_mesa'))
                            <label style="color:red">{{$errors->first('descripcion_mesa')}}</label>
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
                        <a href="{{route('mesas.index')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                    </div>
                </div>
                </div><!-- fin row buttons -->
            </form>
        </div>
    </div>
@endsection


   