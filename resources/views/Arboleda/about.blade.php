@extends('Arboleda.principal')

@section('contenido')
    <title>Tasty - Free Bootstrap 4 Template by Colorlib</title>
    
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('tasty/images/sx.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Nosotros</span></p>
              <h1 class="mb-3">¿Quiénes somos?</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section-2">
      <div class="container d-flex">
        <div class="section-2-blocks-wrapper row">
         <div class="img col-sm-12 col-lg-6" style="background-image: url('tasty/images/logo1.jpeg');">
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              <span class="subheading">Bienvenido a la Arboleda</span>
              <h3 class="heading">Arboleda Restaurante Café nace en el 2016 de un deseo por servir la mejor taza de café y la mejor comida posible en un ambiente bonito y relajado.<br><br> Nace del deseo por hacer comunidad, basada en un comercio justo y sustentable, cuidando cada uno de los detalles, desde el productor, el grano y la taza.<br><br>
                        Amamos el buen café y la buena comida. Buscamos conectar, crear y lograr.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    
@stop