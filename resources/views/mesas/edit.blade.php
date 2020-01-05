@extends('admin.admin')

@section('header')
    <h1 align="center">
        Modificar Mesas
    </h1>
@endsection

@section('content')
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

	<script type="text/javascript"> 
		$(document).ready(function () {
    //----ACTIVAR TOOLTIP EN TODAS LOS INPUT 
    $(document).tooltip({
    	tooltipClass: "uitooltip",
    	position: {
    		my: "left top",
    		at: "right+5 top-5"
    	}
    });

    //------FORMULARIO A VALIDAR CON JQUERY
    $('#mesas').validate({ // initialize the plugin
    	rules: {
    		numero_mesa: {
    			required: true,
    			digits: true
    		},
    		descripcion_mesa:{
    			required: true,

    		}
    	},
    	errorPlacement: function(){
    		return false;
    	}
    });
});
</script>
		@if($errors->any())
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif

		<form method="POST" action="{{route('mesas.update',$mesa)}}" align="center">
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
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="numero_mesa">Numero Mesa</label>
                        <input type="text" name="numero_mesa" id="numero_mesa" value="{{old('numero_mesa',$mesa->numero_mesa)}}" required title="Introduce numero de mesa" placeholder="Nombre de Usuario" class="form-control" onkeypress="return validar(event)">
                        @if($errors->has('numero_mesa'))
                        <label style="color:red">{{$errors->first('numero_mesa')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-3 -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="descripcion_mesa">Descripcion Mesa</label>
                        <input type="text" name="descripcion_mesa" id="descripcion_mesa" value="{{old('descripcion_mesa',$mesa->descripcion_mesa)}}" required title="Ingresa descripcion" class="form-control" placeholder="Telefono" onkeypress="return validarNumeros(event)">
                        @if($errors->has('descripcion_mesa'))
                        <label style="color:red">{{$errors->first('descripcion_mesa')}}</label>
                        @endif
                    </div>
                </div><!-- fin col-md-3 -->
                </div><!-- fin row cabecera -->
                <div class="row">
                <div class="col-md-12" id="guardar">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"> 
                            Modificar
                        </button>
                          <a href="{{route('mesas.index')}}"><button type="button" class="btn btn-danger">Regresar</button></a>
                    </div>
                </div>
                </div><!-- fin row buttons -->
            </form>
        </div>
    </div>
@endsection

