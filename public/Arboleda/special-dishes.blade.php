@extends('Arboleda.principal')

@section('contenido')
	<!-- Special Dishes Section -->
<section id="gtco-special-dishes" class="bg-grey section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Comienza bien tu día
                </span>
                <h2>
                    Completos
                </h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">01.</h2>
                    <div class="dishes-text">
                        <h3><span>Desayuno completo </span><br>Elije: </h3>
                        <p class="pt-3">Café de olla, americano o té<br>
                            Jugo, fruta o cereal <br>
                            Huevos al gusto, hot cakes, chilaquiles, enchiladas, huaraches, sincronizadas, molletes</p>
                        <h3 class="special-dishes-price">$65.00</h3>
                        <a href="#" class="btn-primary mt-3">Hacer pedido</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="img/des.jpg" alt="" class="img-fluid shadow w-100">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="img/e.jpg" alt="" class="img-fluid shadow w-100">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                    <h2 class="special-number">02.</h2>
                    <div class="dishes-text">
                        <h3><span>Menú ejecutivo</span><br>Incluye:</h3>
                        <p class="pt-3">Sopa del día ó consomé, sopa seca ó ensalada, guisado del día, agua y postre.<br>
                        O convierte tu antojo de la carta  en comida completa por $30.00 adicionales (sopa ó consomé, sopa seca ó ensalada,agua y postre). </p>
                        <h3 class="special-dishes-price">$60.00</h3>
                        <a href="#" class="btn-primary mt-3">Hacer pedido <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop