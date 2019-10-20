<!DOCTYPE html>
<html lang="en">
<head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
         integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                        <meta charset="UTF-8" />
                        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
                        <title>Alta Menu Platillos</title>


                    </head>
                    <body>



                                            <form action="{{route('alta_menu')}}" method="POST">
                                                {{csrf_field()}}

                                                   <center> <h1>Alta Menu</h1> </center>
                                                    <form>
                                                            <div class="form-group row">
                                                              <label for="nombre_platillo" class="col-sm-2 col-form-label">Nombre del Platillo</label>
                                                              <div class="col-sm-5">
                                                             <input id="ta" name="nombre_platillo"  class="form-control" size="20" type="text" placeholder="Nombre del Platillo"  onkeypress="return sololetras(event)"required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                                <label for="precio" class="col-sm-2 col-form-label">precio</label>
                                                                <div class="col-sm-10">
                                                        <input id="cantidad" min="1" class="form-cotrol" size="20" name='precio_platillo' type="text"  placeholder="precio" required=>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                            <label for="descripcion" class="col-sm-2 col-form-label">Descripcio</label>
                                                            <div class="col-sm-5">
                                                        <input id="descripcion_platillo" class="form-control" size="20"  placeholder="Una breve descripcion" name="descripcion_platillo" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                                <label for="descripcion" class="col-sm-2 col-form-label">Fecha</label>
                                                                <div class="col-sm-2">
                                                            <input id="fecha" class="form-control" name="fecha" type="date" required>
                                                        <br>

                                                        <button  type="submit"   class="btn btn-primary" name="submit" value="Enviar"> Guardar</button>
                                                    <br>

                                                </form>

                                            </div>



                                        </div>
                                    </div>
                                </section>

                                <script>

                                             function el(el) {
                                          return document.getElementById(el);
                                                                }

                                    el('cantidad').addEventListener('input',function() {
                                     var val = this.value;
                                        this.value = val.replace(/\D|\-/,'');
                                                });
                                    // creamos el evento para cada tecla pulsada
                                    document.getElementById("ta").addEventListener("keypress",verificar);
                                    function verificar(e) {

                                        // comprovamos con una expresion regular que el caracter pulsado sea
                                        // una letra, numero o un espacio
                                        if(e.key.match(/[a-z0-9ñçáéíóú\s]/i)===null) {

                                            // Si la tecla pulsada no es la correcta, eliminado la pulsación
                                            e.preventDefault();
                                        }
                                    }
                                            /////////////////////////////
                                    // creamos el evento para cada tecla pulsada
                                    document.getElementById("descripcion_platillo").addEventListener("keypress",check);
                                    function check(e) {

                                        // comprovamos con una expresion regular que el caracter pulsado sea
                                        // una letra, numero o un espacio
                                        if(e.key.match(/[a-z0-9ñçáéíóú\s]/i)===null) {

                                            // Si la tecla pulsada no es la correcta, eliminado la pulsación
                                            e.preventDefault();
                                        }
                                    }

                                    </script>
</body>
</html>
