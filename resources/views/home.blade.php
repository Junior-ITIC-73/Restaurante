@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>DATOS DEL CLIENTE</h1>
                    @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
                </div>
                <form method="POST" action="{{route('users.datos',Auth::user()->id)}}">
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    SEXO:
                    Hombre<input type="radio" name="sexo" value="0" checked="">
                    Mujer<input type="radio" name="sexo" value="1">
                    <br>
                    <label for="telefono_user">Telefono</label>
                    <input type="num" name="telefono_user" id="telefono_user" value="{{old('telefono_user',Auth::user()->telefono_user)}}">
                    <br>
                    <label for="calle">Calle</label>
                    <input type="text" name="calle" id="calle" value="{{old('calle',Auth::user()->calle)}}">
                    <br>
                    <label for="num_interior">Num Interior</label>
                    <input type="num" name="num_interior" id="num_interior" value="{{old('num_interior',Auth::user()->num_interior)}}">
                    <br>
                    <label for="num_exterior">Num Exterior</label>
                    <input type="num" name="num_exterior" id="num_exterior" value="{{old('num_exterior',Auth::user()->num_exterior)}}">
                    <br>
                    <label for="CP">CP</label>
                    <input type="num" name="CP" id="telefono_user" value="{{old('CP',Auth::user()->telefono_user)}}">
                    <br>
                    <label for="localidad">Localidad</label>
                    <input type="text" name="localidad" id="localidad" value="{{old('localidad',Auth::user()->localidad)}}">
                    <br>
                    <button type="submit">GUARDAR</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
