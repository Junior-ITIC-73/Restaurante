@extends('admin.layout')

@section('content')

<center> <h2>Menu Platillo</h2></center>
<div class="container">
    <table id="a1" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>id</th>
            <th>Nombre del Platillo</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Fecha</th>
            <th>Opciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($menu_platillo as $a1)
        <td>{{$a1->id}}</td>
        <td>{{$a1->nombre_platillo}}</td>
        <td>{{$a1->precio_platillo}}</td>
        <td>{{$a1->descripcion_platillo}}</td>
        <td>{{$a1->fecha}}</td>

        <td><a href="{{URL::action('MenuPlatilloController@eliminar',['id'=>$a1->id])}}"><img src="{{asset('img/eliminar.png')}}" width="30" height="30"></a>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="{{URL::action('MenuPlatilloController@edit',['id'=>$a1->id])}}"><img src="{{asset('img/editar.png')}}" width="30" height="30"></a>

        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection

