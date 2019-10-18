<!DOCTYPE html>
<html lang="en">
<head>


                        <meta charset="UTF-8" />
                        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
                        <title>Alta Menu Platillos</title>

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
                    </head>
                    <body>


                                <div id="container_demo" >
                                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                                    <a class="hiddenanchor" id="toregister"></a>
                                    <a class="hiddenanchor" id="tologin"></a>
                                    <div id="wrapper">
                                        <div id="login" class="animate form">

                                            <form action="{{route('alta_menu') }}" method="POST">
                                                {{csrf_field()}}

                                                <h1>Alta Menu</h1>

                                                <p>
                                                    <label for="username" class="uname"  >Nombre del Platillo</label>
                                                    <input name="nombre_platillo "class="w50" type="text" size="20" id="txtNombre"  onkeypress="return sololetras(event)" onpaste="return false"/ required>
                                                </p>

                                                <p>
                                                    <label for="precio" class="precio" > Precio</label>
                                                    <input id="precio" name='precio_platillo' type="number" step="any" class='rounded nombre' required=''/>
                                                </p>
                                                 <p>
                                                    <label for="username" class="uname"  > Descripcion</label>
                                                    <input id="descripcion"  name="descripcion_platillo" required>
                                                </p>
                                                <p>
                                                        <label for="username" class="uname"> Fecha</label>
                                                        <input id="fecha"  name="fecha" type="date" required>
                                                    </p>
                                                <p>
                                                    <input type="submit" name="submit" value="Enviar" />
                                                </p>

                                            </form>

                                        </div>



                                    </div>
                                </div>
                            </section>

                <head>

</body>
</html>
