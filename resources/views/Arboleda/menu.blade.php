@extends('Arboleda.principal')

@section('contenido')
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('tasty/images/cafe.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
              <h1 class="mb-3">Menu de la casa</h1>
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
            <h2>Disfruta de nuestro gran menu</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 dish-menu">

            <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link py-3 px-4 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="flaticon-meat"></span>  Màs de nuestro sabor</a>
              <a class="nav-link py-3 px-4" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="flaticon-cutlery"></span> ¿Antojo de algo diferente?</a>
              <a class="nav-link py-3 px-4" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="flaticon-cheers"></span> Bebidas</a>
            </div>

            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/salmon.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Salmón</h3>
                          <p><span>Sellado en aceite de oliva acompañado de ensalada</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$110</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/carnitasatun.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Carnitas de atún</h3>
                          <p><span>Sellado en aceite de oliva acompañado de ensalada</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$90</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/arrachera.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Arrachera</h3>
                          <p><span>Acompañada de ensala ó papas a la francesa y frijoles refritos</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$85</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/3.JPEG);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Bistec,pechuga ó filetes de pescado</h3>
                          <p><span>Acompañada de ensala ó papas a la francesa y frijoles refritos</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$60</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/4.JPEG);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Chilaquiles, enchiladas ó huaraches arboleda</h3>
                          <p><span>Con salsa roja ó verde con arrachera de la casa</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$70</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/hua.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Huarache de masa ó nopal</h3>
                          <p><span>Pollo</span>, <span>Bistec</span>, <span>Longaniza</span>, <span>Champiñones</span>,<span>Huevo</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$60</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/chila.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Chilaquiles o enchiladas verdes o rojas</h3>
                          <p><span>Pollo</span>, <span>Bistec</span>, <span>Longaniza</span>, <span>Champiñones</span>,<span>Huevo</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$60</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/sui.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Enchiladas suizas ó enmoladas</h3>
                          <p><span>Pollo</span>, <span>Bistec</span>, <span>Longaniza</span>, <span>Champiñones</span>,<span>Huevo</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$70</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/bur.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Burritos</h3>
                          <p><span>Arrachera</span>, <span>Bistec</span>, <span>Longaniza</span>, <span>Pollo</span>, <span>Huevo ó Cecina</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$60</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/tacos.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Tacos ó quesadillas</h3>
                          <p><span>Arrachera</span>, <span>Bistec</span>, <span>Longaniza</span>, <span>Pollo</span>, <span> Cecina</span> <br><span>Con queso y en tortilla de harina agrega $10</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$50</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/to.JPEG);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Tortas</h3>
                          <p><span>Arrachera</span>, <span>Bistec</span>, <span>Longaniza</span>, <span>Pollo</span>, <span> Huevo</span> </p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$40</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- END -->

              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/club.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Club sandwich</h3>
                          <p><span>El tradicional acompañado de papas a la francesa</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$65</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/alitas.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Alitas</h3>
                          <p><span>BBQ ó tradicional</span><p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$70</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/h1.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Hamburguesa Arboleda</h3>
                          <p><span>220grs de carne de rib eye, servida con tocino, jamon de pavo,queso manchego y papas a la francesa</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$85</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/h2.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Hamburguesa tradicional</h3>
                          <p><span>150 grs. de carne angus servida con jamonde pavo, queso manchego y papas a la francesa</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$65</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/hf.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Hamburguesa infantil</h3>
                          <p><span>60 grs. servida con jamón de pavo, queso manchego y papas a la francesa </span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$45</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/nug.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Nuggets de pollo (6)</h3>
                          <p><span>Tradicionales con papas a la francesa</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$45</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/extra.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Extras para tu hamburguesa</h3>
                          <p><span>Jamón</span>, <span>Salchicha</span>, <span>Longaniza</span>, <span>Manchego ó Oaxaca</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">$15c/u</span>
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
                      <div class="menu-img" style="background-image: url(tasty/images/ref.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Refresco</h3>
                        </div>
                        <div class="one-forth">
                          <span class="price">$18</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/jugo.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Jugo</h3>
                          <p>Grande   $25</p> <br> <p>Chico     $15</p>
                        </div>
                        <div class="one-forth">
                          
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/lic.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Licuados</h3>
                          <p>Grande   $25</p> <br> <p>Chico     $15</p>
                        </div>
                        <div class="one-forth">
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/mal.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Malteada</h3>
                        </div>
                        <div class="one-forth">
                          <span class="price">$40</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/f.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Café de olla, americano ó te</h3>
                        </div>
                        <div class="one-forth">
                          <span class="price">$20</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/lat.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Capuchino, latte ó chocolate</h3>
                        </div>
                        <div class="one-forth">
                          <span class="price">$30</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/agua.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Agua de sabor (1L)</h3>
                        </div>
                        <div class="one-forth">
                          <span class="price">$35</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/cer.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Cerveza</h3>
                        </div>
                        <div class="one-forth">
                          <span class="price">$30</span> 
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(tasty/images/mic.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Micheladas</h3>
                        </div>
                        <div class="one-forth">
                          <span class="price">$35</span>
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