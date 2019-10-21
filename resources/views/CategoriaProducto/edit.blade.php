@extends('admin.layout')

@section('content')
<h1>ACTUALIZAR CATEGORIA</h1>
        <form action="{{ route('categoria.update', ['id' => $categoria->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                <label class="form-control-label"> Nombre Categoria:</label>
                    <input type="text" class="form-control" value="{{$categoria->nombre_categoria}}" name="nombre_categoria">
                    <br>
                <button type="submit" name="button" class="btn btn-primary">Guardar</button>
        </form>

        
        <script src="{{{ asset('datatables/js/jquery-3.3.1.js')}}}"></script>
@endsection