@extends('Arboleda.principal')

@section('contenido')
    <title>Arboleda-Restaurante cafe</title>
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('tasty/images/buf.jpeg');" data-stellar-background-ratio="0.5">
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
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Nuestros especiales</h2>
          </div>
        </div>
        <div class="row d-flex no-gutters">
          <div class="col-lg-6">
            <div class="block-3 d-md-flex ftco-animate">
              <div class="image order-last" style="background-image: url(tasty/images/hu.jpg);"></div>
              <div class="text text-center order-first">
                <h2 class="heading">Huevos Arboleda (los de la casa)</h2>
                <p>Base mexicana revueltos con chilorio, machaca ó camarón</p>
                <span class="price">$65.00</span>
              </div>
            </div>
            <div class="block-3 d-md-flex ftco-animate">
              <div class="image order-first" style="background-image: url(tasty/images/omelette1.jpg);"></div>
              <div class="text text-center order-first">
                <h2 class="heading">Omelette</h2>
                <p>Con 2 ingredientes a elegir jamon,tocino, champiñones, longaniza, manchego, oaxaca ó panela</p>
                <span class="price">$60.00</span><br>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="block-3 d-md-flex ftco-animate">
              <div class="image order-last" style="background-image: url(tasty/images/mollete.jpg);"></div>
              <div class="text text-center order-first">
                <h2 class="heading">Molletes Arboleda</h2><br>
                <p>Preparados con arracherade la casa y queso philadelphia</p>
                <span class="price">$65.00</span>
              </div>
            </div>
            <div class="block-3 d-md-flex ftco-animate">
              <div class="image order-first" style="background-image: url(tasty/images/h1.jpg);"></div>
              <div class="text text-center order-first">
                <h2 class="heading">Hamburguesa Arboleda</h2>
                <p>220grs de carne de rib eye, servida con tocino, jamon de pavo,queso manchego y papas a la francesa</p>
                <span class="price">$85.00</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="block-3 d-md-flex ftco-animate">
              <div class="image order-last" style="background-image: url(tasty/images/hot.jpg);"></div>
              <div class="text text-center order-first">
                <h2 class="heading">Hot cakes ó waffles</h2>
                <p>Con mermelada, lechera, chocolate o miel</p><br>
                <span class="price">$45.00</span><br>
              </div>
            </div>
            <div class="block-3 d-md-flex ftco-animate">
              <div class="image order-first" style="background-image: url(tasty/images/images.jpg);"></div>
              <div class="text text-center order-first">
                <h2 class="heading">Menú ejecutivo incluye:</h2>
                <p>Sopa del día ó consomé, sopa seca ó ensalada, guisado del día, agua y postre.</p>
                <span class="price">$60.00</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="block-3 d-md-flex ftco-animate">
              <div class="image order-last" style="background-image: url(tasty/images/a5.jpg);"></div>
              <div class="text text-center order-first">
                <h2 class="heading">Crepas (2)</h2>
                <p>Lechera, cajeta, mermelada ó jamon y queso</p>
                <span class="price"> $50.00</span>
              </div>
            </div>
            <div class="block-3 d-md-flex ftco-animate">
              <div class="image order-first" style="background-image: url(tasty/images/dessert-9.jpg);"></div>
              <div class="text text-center order-first">
                <h2 class="heading">Postres de la casa</h2><br>
                <p>Panques, studel y más</p><br>
                <span class="price">$30.00</span><br><br>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </section>
    @stop