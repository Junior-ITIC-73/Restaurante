@extends('Arboleda.principal')

@section('contenido')
    <title>Arboleda-Restaurante cafe</title>
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('tasty/images/sx.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Especiales</span></p>
              <h1 class="mb-3">Nuestros Especiales</h1>
            </div>
          </div>
        </div>
      </div> 
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Nuestro menu</span>
            <h2>Disfruta de nuestros especiales</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 dish-menu">

            <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link py-3 px-4 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="flaticon-cutlery"></span>  Desayuno completo</a>
              <a class="nav-link py-3 px-4" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="flaticon-cutlery"></span> Menu ejecutivo</a>
              <a class="nav-link py-3 px-4" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="flaticon-cutlery"></span> ¿Antojo de algo dulce?</a>
            </div>


            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/2.JPEG);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Huevos Arboleda los de la casa</h3>
                          <p><span>Base mexicana revueltos con chilorio,machaca ó camarón</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$65</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/om.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Omelette de claras</h3>
                          <p><span>Con 2 ingredientes a elegir jamón, tocino, champiñones, longaniza, manchego, oaxaca ó panela</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$60</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/2.JPEG);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Huevos al gusto (revueltos ó estrellados)</h3>
                          <p><span>Jamón,tocino, salchicha, longaniza, a la mexicana, rancheros ó divorciados</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$40</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/ma.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Molletes arboleda (2)</h3>
                          <p><span>Preparados con arrachera de la casa y queso philadelphia</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$65</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/mollete.JPG);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Molletes (2)</h3>
                          <p><span>Jamón, tocino, pepperoni, longaniza ó champiñones </span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$40</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/h.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Hotcakes ó waffles</h3>
                          <p><span>Con mermelada, lechera, chocolate ó miel </span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$45</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/Omelette1.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Omelette</h3>
                        </div>
                        <div class="one-forth">
                          <span class="price">$50</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/sin.JPG    );"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Sincronizadas (2)</h3>
                          <p><span>En tortilla de harina con queso manchego y jamón de pavo</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$40</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/cafe.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Completa tu desayuno por $25 adicionales<br>Incluye:</h3>
                          <p><span>Café americano, de olla ó té</span><br> <span>Fruta, licuado ó jugo chico</span>
                          </p>
                        </div>
                        <div class="one-forth">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- END -->

              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <br><h1>INCLUYE:</h1>
                <div class="row">
                  <div class="col-lg-6">

                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/sopa.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Sopa del día o consome </h3>
                        </div>
                        <div class="one-forth">
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/pas.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Sopa seca ó ensalada</h3>
                        </div>
                        <div class="one-forth">
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/3.JPEG);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Guisado del día</h3>
                        </div>
                        <div class="one-forth">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/ja.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Agua</h3>
                        </div>
                        <div class="one-forth">
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/fl.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Postre</h3>
                        </div>
                        <div class="one-forth">
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Convierte tu antojo de la carta en comida completa por $30 adicionales</h3>
                        </div>
                        <div class="one-forth">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- END -->

              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/cn.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Conchas de nata</h3>
                        </div>
                        <div class="one-forth">
                          <span class="price">$30</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/a5.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Crepas (2)</h3><br>
                          <p>Lechera, cajta, mermelada ó jamon y queso</p> 
                        </div>
                        <div class="one-forth">
                          <span class="price">$50</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/pan.jfif);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Postres de la casa</h3><br>
                          <p>Panques, strudel y más...</p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$30</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/u.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Orden de fruta</h3>
                        </div>
                        <div class="one-forth">
                          <span class="price">$30</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @stop