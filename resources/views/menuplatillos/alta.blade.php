<!DOCTYPE html>
<html lang="en">
<head>


                        <meta charset="UTF-8" />
                        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
                        <title>Alta Menu Platillos</title>

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
                                                    <input id="username" name="nombre_platillo" required="required">
                                                </p>

                                                <p>
                                                    <label for="password" class="youpasswd" > Precio</label>
                                                    <input id="password" name='precio_platillo' type="number" step="any" class='rounded nombre' required=''/>
                                                </p>
                                                 <p>
                                                    <label for="username" class="uname"  > Descripcion</label>
                                                    <input id="descripcion"  name="descripcion_platillo" >
                                                </p>
                                                <p>
                                                        <label for="username" class="uname"  > Fecha</label>
                                                        <input id="fecha"  name="fecha" type="date">
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
