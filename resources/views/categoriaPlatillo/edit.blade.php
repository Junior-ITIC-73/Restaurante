@extends('admin.admin')

@section('header')
    <h1 align="center">
        Agregar Categoria
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
            
            <form action="{{route('categoriaPlatillo.update',$categoriaPlatillo) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                    {{ method_field('PUT')}}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre_categoria" class="col-sm-0 col-form-label">Nombre categoria</label>
                            <input type="text" name="nombre_categoria" id="nombre_categoria" value="{{old('nombre_categoria',$categoriaPlatillo->nombre_categoria)}}" required>
                            @if($errors->has('nombre_categoria'))
                            <label style="color:red">{{$errors->first('nombre_categoria')}}</label>
                            @endif
                        </div>
                    </div><!-- fin col-md-3 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="descripcion_mesa" class="col-sm-0 col-form-label">Descripcion Mesa</label>
                            <input type="file" name="chooseFile" id="chooseFile" >
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
