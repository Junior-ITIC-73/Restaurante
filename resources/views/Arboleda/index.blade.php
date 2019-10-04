<!DOCTYPE html>
<!--
	Resto by GetTemplates.co
	URL: https://gettemplates.co
-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Arboleda Restaurante Café</title>
    <link rel="ICON"  type="IMAGEN/PNG" href="img/logo.ico">
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			Hacienda San Diego de Los Padres 48, Santa Elena, 52100 Toluca de Lerdo, Méx.
		</p>
		<p>
			<span class="fs-16 primary-color">(+68) 120034509</span>
		</p>
		<p>info@yourdomain.com</p>
	</div>
</div>	<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<i class="fas fa-search text-grey" aria-hidden="true"></i>
			    </button>
			  </div>
			</div>

		</form>
	</div>
	
 	
</div>	<div id="canvas-overlay"></div>
	<div class="boxed-page">
		<nav id="navbar-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
            <img src="img/logo.PNG" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item only-desktop">
                    <a class="nav-link" id="side-nav-open" href="">
                        <span class="lnr lnr-menu"></span>
                    </a>
                </li>
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Inicio<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/about')}}">¿Quiénes somos?</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Menú
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{url('/especial')}}">Del día</a>
                          <a class="dropdown-item" href="{{url('/menu')}}">Completo</a>
                        </div>
                    </li>
                </div>
            </ul>
            
            <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="#">
                <img src="img/logo.png" alt="">
            </a>
            <ul class="navbar-nav d-flex justify-content-between">
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{url('/contacto')}}">contacto</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{url('/reservacion')}}">Reservación</a>
                    </li>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/logueo')}}">Acceso de administrador</a>
                </li>
            </ul>
        </div>
    </div>
</nav>		
<div class="hero">
  <div class="container">
	<div class="row d-flex align-items-center">
		<div class="col-lg-6 hero-left">
		    <h1 class="display-4 mb-5">ARBOLEDA <br>un lugar para compartir </h1>
		    <div class="mb-2">
		    	<a class="btn btn-primary btn-shadow btn-lg" href="#" role="button">Explorar Menú</a>
			    <a class="btn btn-icon btn-lg" href="https://player.vimeo.com/video/33110953" data-featherlight="iframe" data-featherlight-iframe-allowfullscreen="true">
			    	<span class="lnr lnr-film-play"></span>
			    	Play Video
			    </a>
		    </div>
		   
		    <ul class="hero-info list-unstyled d-flex text-center mb-0">
		    	<li class="border-right">
		    		<span class="lnr lnr-rocket"></span>
		    		<h5>
		    			Pedido a domicilio
		    		</h5>
		    	</li>
		    </ul>

	    </div>
	    <div class="col-lg-6 hero-right">
	    	<div class="owl-carousel owl-theme hero-carousel">
			    <div class="item">
			    	<img class="img-fluid" src="img/descarga.jpg" alt="">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="img/w.jpg" alt="">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="img/cafe.jpg" alt="">
			    </div>
			</div>
	    </div>
	</div>
  </div>
</div>		<!-- Welcome Section -->
<section id="gtco-welcome" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2" style="background-image: url(img/f.jpg);">
                    
                </div>
                <div class="col-sm-7 py-5 pl-md-0 pl-4">
                    <div class="heading-section pl-lg-5 ml-md-5">
                        <span class="subheading">
                            ¿Quiénes somos?
                        </span>
                        <h2>
                            Bienvenido a la Arboleda 
                        </h2>
                    </div>
                    <div class="pl-lg-5 ml-md-5">
                        <p>Desayunos, Menú ejecutivo, Fines de semana (Pozole, Caldo de Camarón, Birria, Pancita, Cochinita Yucateca), Servicio de cafetería Gourmet y postres.<br> 
                        Comida casera y variedad de caldos mexicanos los fines de semana (Pozole, Birria, Pancita y Caldo de Camarón)</p>
                        <h3 class="mt-5">Especial de caldos mexicanos</h3>
                        <div class="row">
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="img/fg.jpg" />
                                    <h6>Pozole</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="img/c.jpg" />
                                    <h6>Caldo de camarón</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="img/b.jpg"/>
                                    <h6>Birria</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Welcome Section -->		<!-- Special Dishes Section -->
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
<!-- End of Special Dishes Section -->		<!-- Menu Section -->
<section id="gtco-menu" class="section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Especiales
                        </span>
                        <h2>
                            Nuestro Menú
                        </h2>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Desayunos desde $65.00</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Huevos Arboleda (los de la casa)</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$65.00</h4>
                                </div>
                            </div>
                            <p>Base mexicana revueltos con chilorio, machaca ó camarón </p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Omelette</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$60.00</h4>
                                </div>
                            </div>
                            <p>Con 2 ingredientes a elegir jamon,tocino, champiñones, longaniza, manchego, oaxaca ó panela</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Omelette</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$50.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Molletes Arboleda</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$65.00</h4>
                                </div>
                            </div>
                            <p>Preparados con arracherade la casa y queso philadelphia</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Más de nuestro sabor </h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Arrachera</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$85.00</h4>
                                </div>
                            </div>
                            <p>Acompañada de ensalada ó papas a la francesa y frijoles refritos</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Chilaquiles, enchiladas o huaraches Arboleda</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$70.00</h4>
                                </div>
                            </div>
                            <p>Con salsa verde ó roja con arrachera de la casa</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Burritos</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$60.00</h4>
                                </div>
                            </div>
                            <p>Arrachera, bistec, longaniza, champiñones ó huevo</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Tacos o quesadillas</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$20.00</h4>
                                </div>
                            </div>
                            <p>Bistec, pollo, longaniza, champiñones, cecina ó arrachera (Con queso y en tortilla de harina agrega $10.00)</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">¿Antojo de algo diferente?</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Club sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$65.00</h4>
                                </div>
                            </div>
                            <p>El tradicional acompañada de papas a la francesa</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Hamburguesa Arboleda</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$85.00</h4>
                                </div>
                            </div>
                            <p>220grs de carne de rib eye, servida con tocino, jamon de pavo,queso manchego y papas a la francessa</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Hamburgueesa tradicional</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$65.00</h4>
                                </div>
                            </div>
                            <p>150 grs. de carne angus servida con jamonde pavo, queso manchego y papas a la francesa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End of Testimonial Section-->		<!-- Team Section -->
<section id="gtco-team" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Postres
                </span>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        
                        <div class="team-desc">
                            <h4 class="mb-0">Crepas</h4>
                            <p class="mb-1">Lechera, cajeta, mermelada ó jamon y queso</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-5">
                       
                        <div class="team-desc">
                            <h4 class="mb-0">Postres de la casa</h4>
                            <p class="mb-1">panques, studel y más</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        
                        <div class="team-desc">
                            <h4 class="mb-0">Orden de fruta</h4>
                            <p class="mb-1">250grs de fruta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Team Section -->		<!-- Reservation Section -->
<section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url(img/sx.jpg);">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-content bg-white p-5 shadow" align="center">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Reservación
                        </span>
                        <h2>
                            Reserva ahora
                        </h2>
                    </div>
                    <form method="post" name="contact-us" action="">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Telefono">
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" placeholder="llegada" />
                                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                        <div class="input-group-text">
                                            <span class="lnr lnr-calendar-full"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 form-group">
                                <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3" placeholder="salida" />
                                    <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                        <div class="input-group-text">
                                            <span class="lnr lnr-clock"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <select class="form-control" id="selectPerson">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>+5</option>
                                </select>
                            </div>
                 
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Tu mensaje ..."></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Enviar reservación</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- End of Reservation Section -->		
<footer class="mastfoot pb-5 bg-white section-padding pb-0">
    <div class="inner container">
         <div class="row">
            <div class="col-lg-4">
                <div class="footer-widget pr-lg-5 pr-0">
                    <img src="img/logo.png" class="img-fluid footer-logo mb-3" alt="">
                    <p>Comienza bien tu día con nosotros en Arboleda restaurante café, con nuestros desayunos, menú ejecutivo, fines de semana (pozole, caldo de camarón, birria, pancita, cochinita yucateca), servicio de cafetería gourmet y postres. </p>
                    <nav class="nav nav-mastfoot justify-content-start">
                        <a class="nav-link" href="https://www.facebook.com/CafeArboleda/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="nav-link" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="nav-link" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </nav>
                </div>
                
            </div>
            <div class="col-lg-4">
                <div class="footer-widget px-lg-5 px-0">
                    <h4>Horario</h4>
                    <ul class="list-unstyled open-hours">
                        <li class="d-flex justify-content-between"><span>Lunes</span><span>07:00 – 21:00</span></li>
                        <li class="d-flex justify-content-between"><span>Martes</span><span>07:00 – 21:00</span></li>
                        <li class="d-flex justify-content-between"><span>Miercoles</span><span>07:00 – 21:00</span></li>
                        <li class="d-flex justify-content-between"><span>Jueves</span><span>07:00 – 21:00</span></li>
                        <li class="d-flex justify-content-between"><span>Viernes</span><span>07:00 – 21:00</span></li>
                        <li class="d-flex justify-content-between"><span>Sabado</span><span>08:00 – 19:00</span></li>
                        <li class="d-flex justify-content-between"><span>Domingo</span><span>08:00 – 18:00</span></li>
                      </ul>
                </div>
                
            </div>

            <div class="col-lg-4">
                <div class="footer-widget pl-lg-5 pl-0">
                    <h4>Para mas información</h4>
                    <p>mandanos tu email y nosotros nos comunicamos contigo</p>
                    <form id="newsletter">
                        <div class="form-group">
                            <input type="email" class="form-control" id="emailNewsletter" aria-describedby="emailNewsletter" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
	</div>
</div>
	<!-- External JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Main JS -->
	<script src="js/app.min.js "></script>
</body>
</html>