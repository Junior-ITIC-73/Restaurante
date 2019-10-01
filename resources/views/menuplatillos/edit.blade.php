
<html>
        <head>
                <meta charset="UTF-8" />
                <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
                <title> Editar Menu</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
                <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
                <meta name="author" content="Codrops" />
                <link rel="stylesheet" href="{{asset('css/demo.css')}}">
                <link rel="stylesheet" href="{{asset('css/style.css')}}">
                <link rel="stylesheet" href="{{asset('css/animate-custom.css')}}">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
                <link rel="stylesheet" href="{{asset('css/maquina.css')}}">
                <link rel="stylesheet" href="{{asset('MDB/css/mdb.min.css')}}">
                <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

        </head>
          <body>
            <center>
              <section>
                 <div id="container_demo" >
                  <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                       <div id="wrapper">
                         <div id="login" class="animate form">

                           <form action="{{asset('modificarplatillo')}}" method="POST" enctype="multipart/form-data">
                           {{csrf_field()}}


                              <h1>Editar Menu Platillos</h1>


                                   <p>
                                      <label for="username" class="uname"  > ID</label>
                                      <input id="username" name="id" type="text"  id="texto" value="{{$menu_platillo->id}}" readonly="">
                                   </p>

                                    <p>
                                       <label for="username" class="uname"  > Nombre del Platillo</label>
                                       <input id="username" name="nombre_platillo" type="text"  id="texto" value="{{ $menu_platillo->nombre_platillo}}"    required>
                                    </p>

                                    <p>
                                            <label for="username" class="uname"  >Precio</label>
                                            <input id="username" name="precio_platillo" type="text"  id="texto" value="{{ $menu_platillo->precio_platillo}}"    required>
                                          </p>
                                     <p>
                                        <label for="username" class="uname"  >Descripcion</label>
                                        <input id="username" name="descripcion_platillo" type="text"  id="texto" value="{{ $menu_platillo->descripcion_platillo}}"    required>
                                      </p>

                                      <p>
                                        <label for="username" class="uname"  > Fecha</label>
                                      <input id="username" name="fecha" type="date"  id="texto" value="{{$menu_platillo->fecha}}"required>
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

                         <script src="mix.js('js/jquery-2.1.0.min.js')"></script>
                         <script src="mix.js('js/select.js')"></script>
                         <script src="mix.js('js/mod.js')"></script>

              </body>
        </html>
