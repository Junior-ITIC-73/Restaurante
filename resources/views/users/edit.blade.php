<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>



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

<script type="text/javascript"> 
 $(document).ready(function () {
     // --------------VALIDACIONES PERSONALIZADAS---------------------
     $.validator.addMethod("alpha", function(value, element) {
          return /^[a-z]*$/i.test(value);
     });
     $.validator.addMethod("password", function(value, element) {
          return /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/i.test(value);
     });

     //---------------END VALIDACIONES PERSONALIZADAS

    //----ACTIVAR TOOLTIP EN TODAS LOS INPUT 
    $(document).tooltip({
       tooltipClass: "uitooltip",
       position: {
          my: "left top",
          at: "right+5 top-5"
     }
});

    //------FORMULARIO A VALIDAR CON JQUERY
    $('#usuarios').validate({ // initialize the plugin
     rules: {
          name: {
               required: true,
               alpha: false,
               minlength: 4,
               number:false
          },
          telefono_user: {
               required: true,
               number: true,
               minlength: 10,
               maxlength:10
          },
          calle:{
               required: true,
               alpha: true
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
     // ,
     // submitHandler: function (form) { // for demo
     //        alert('valid form submitted'); // for demo
     //        return true; // for demo
     //   }
  });
});
</script>


<center>
   <h1>MODIFICAR USUARIO</h1>
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
  <label for="name">Nombre</label>
  <input type="num" name="name" id="name" value="{{old('name',$user->name)}}" required title="Introduce tu nombre">
  <br>
  SEXO:
  Hombre<input type="radio" name="sexo" value="0" checked="">
  Mujer<input type="radio" name="sexo" value="1">
  <br>
  <label for="telefono_user">Telefono</label>
  <input type="num" name="telefono_user" id="telefono_user" value="{{old('telefono_user',$user->telefono_user)}}" required title="Ingresa los 10 digitos de tu telefono">
  <br>
  <label for="calle">Calle</label>
  <input type="text" name="calle" id="calle" value="{{old('calle',$user->calle)}}" required title="Nombre de la Calle">
  <br>
  <label for="num_interior">Num Interior</label>
  <input type="num" name="num_interior" id="num_interior" value="{{old('num_interior',$user->num_interior)}}" required>
  <br>
  <label for="num_exterior">Num Exterior</label>
  <input type="num" name="num_exterior" id="num_exterior" value="{{old('num_exterior',$user->num_exterior)}}" required>
  <br>
  <label for="CP">CP</label>
  <input type="num" name="CP" id="telefono_user" value="{{old('CP',$user->telefono_user)}}" required title="Introduzca su Codigo Postal">
  <br>
  <label for="localidad">Localidad</label>
  <input type="text" name="localidad" id="localidad" value="{{old('localidad',$user->localidad)}}" requiredd title="Introduzca su localidad">
  <br>
  <button type="submit">GUARDAR</button>
</form>
</center>
<a href="{{route('users.index')}}">Regresar al listado</a>

</body>
</html>