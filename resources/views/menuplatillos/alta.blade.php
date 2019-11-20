<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<script text="javascript">


    function sololetras(e) {
       key=e.keyCode || e.which;

       teclado=String.fromCharCode(key).toLowerCase();

       letras="qwertyuiopasdfghjklñzxcvbnm ";

       especiales="8-37-38-46-164";

       teclado_especial=false;

       for(var i in especiales){
          if(key==especiales[i]){
             teclado_especial=true;
             break;
         }
     }

     if(letras.indexOf(teclado)==-1 && !teclado_especial){
      return false;
  }

}
</script>



    <div id="container_demo" >
        <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
        <div id="wrapper">
            <div id="login" class="animate form">
<a href="{{url('/menuplatillo')}}"><button type="button" class="btn btn-primary">Regresar</button></a>
                <form action="{{route('alta_menu') }}" method="POST">
                    {{csrf_field()}}

                  <center><h1>Alta Menu</h1></center>
                    @if($errors->any())
                    <ul>
                      @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                  </ul>
                  @endif

                  <div class="form-group">
                    <p>
                        <label for="username" class="uname"  >Nombre del Platillo</label>
                        <input name="nombre_platillo"class="form-control" type="text" size="20" id="txtNombre"  onkeypress="return sololetras(event)" onpaste="return false"/ required>
                    </p>
                  </div>
                  <div class="form-group">
                    <p>
                        <label for="precio" class="precio" > Precio</label>
                        <input id="precio" name='precio_platillo' type="number" step="any" class="form-control" required=''/>
                    </p>
                  </div>
               <div class="form-group">
                  <p>
                        <label for="username" class="uname"  > Descripcion</label>
                        <input id="descripcion"  name="descripcion_platillo" required class="form-control">
                    </p>
               </div>
               <div class="form-group">              
                    <p>
                        <label for="username" class="uname"> Fecha</label>
                        <input id="fecha"  name="fecha" type="date" required class="form-control">
                    </p>
               </div>

                    <p>
                         <button type="submit" class="btn btn-success btn-lg btn-block">GUARDAR</button>  
                    </p>

                </form>

            </div>



        </div>
    </div>
</section>

<script src="{{{ asset('datatables/js/jquery-3.3.1.js')}}}"></script>



</body>
</html>