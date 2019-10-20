
<html>
        <head>
                <meta charset="UTF-8" />
                <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
                <title> Editar Menu</title>

        </head>
          <body>

                <center>
                           <form action="{{asset('modificarplatillo')}}" method="POST" enctype="multipart/form-data">
                           {{csrf_field()}}


                              <h1>Editar Menu Platillos</h1>


                                   <p>
                                      <label > ID</label>
                                      <input name="id" type="text" value="{{$menu_platillo->id}}" readonly="">
                                   </p>

                                    <p>
                                       <label> Nombre del Platillo</label>
                                       <input name="nombre_platillo" type="text" value="{{ $menu_platillo->nombre_platillo}}" required>
                                    </p>

                                    <p>
                                            <label>Precio</label>
                                            <input name="precio_platillo" type="text"  value="{{ $menu_platillo->precio_platillo}}"    required>
                                          </p>
                                     <p>
                                        <label>Descripcion</label>
                                        <input  name="descripcion_platillo" type="text" value="{{ $menu_platillo->descripcion_platillo}}"    required>
                                      </p>

                                      <p>
                                        <label>Fecha</label>
                                      <input name="fecha" type="date"  id="texto" value="{{ $menu_platillo->fecha }}"required>
                                      </p>

                                      <p>

                                        <p class="login button">
                                            <input type="submit" name="submit" value="Enviar" />
                                          </p>

          </form>
           </div>
             </div>
               </div>
           </section>
        </center>

              </body>
        </html>
