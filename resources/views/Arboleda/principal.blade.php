<!DOCTYPE html>
<html lang="en">
  <head> 

    <title>Arboleda-Restaurante cafe</title> 
    <link rel="ICON"  type="IMAGEN/PNG" href="tasty/images/logo1.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('tasty/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('tasty/css/animate.css') }}">
    
    <link rel="stylesheet" href="tasty/css/owl.carousel.min.css">
    <link rel="stylesheet" href="tasty/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="tasty/css/magnific-popup.css">

    <link rel="stylesheet" href="tasty/css/aos.css">

    <link rel="stylesheet" href="tasty/css/ionicons.min.css">

    <link rel="stylesheet" href="tasty/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="tasty/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="tasty/css/flaticon.css">
    <link rel="stylesheet" href="tasty/css/icomoon.css">
    <link rel="stylesheet" href="tasty/css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{url('/logueo')}}">Accede</a>
         <a class="navbar-brand" href="{{url('/registro')}}">Registrate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{url('/menu')}}" class="nav-link">Menu completo</a></li>
            <li class="nav-item"><a href="{{url('/specialties')}}" class="nav-link">Especiales</a></li>
            <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">Nosotros</a></li>
            <li class="nav-item"><a href="{{url('/test')}}" class="nav-link">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->


<center>
<div id = 'Contenido'>
@yield('contenido')
</div>
</center>



    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Galeria</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="tasty/images/cafe.jpg" class="insta-img image-popup" style="background-image: url(tasty/images/cafe.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="tasty/images/hua.jpg" class="insta-img image-popup" style="background-image: url(tasty/images/hua.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="tasty/images/logo1.jpeg" class="insta-img image-popup" style="background-image: url(tasty/images/logo1.jpeg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="tasty/images/sx.jpg" class="insta-img image-popup" style="background-image: url(tasty/images/sx.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="tasty/images/lic.jpg" class="insta-img image-popup" style="background-image: url(tasty/images/lic.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Arboleda-Restaurante Cafe</h2>
              <p>Arboleda Restaurante Café nace del deseo por hacer comunidad, basada en un comercio justo y sustentable, cuidando cada uno de los detalles, desde el productor, el grano y la taza.<br>
                        Amamos el buen café y la buena comida. Buscamos conectar, crear y lograr.</p>
          
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Horario</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Lunes: <span>07:00 - 21:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Martes: <span>07:00 - 21:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Miercoles: <span>07:00 - 21:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Jueves: <span>07:00 - 21:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Viernes: <span>07:00 - 21:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Sabado: <span>08:00 - 19:00</span></a></li>
                <li><a href="#" class="py-2 d-block">Domingo: <span>08:00 - 18:00</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contacto</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Hacienda San Diego de Los Padres 48, Santa Elena, 52100 Toluca de Lerdo, Méx.</a></li>
                <li><a href="#" class="py-2 d-block">+52 1 5518465917</a></li>
                <li><a href="#" class="py-2 d-block">arboledarestaurante.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Redes sociales</h2>
               <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="https://www.facebook.com/CafeArboleda/"><span class="icon-facebook"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ URL::asset('tasty/js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('tasty/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ URL::asset('tasty/js/popper.min.js') }}"></script>
  <script src="{{ URL::asset('tasty/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('tasty/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ URL::asset('tasty/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ URL::asset('tasty/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ URL::asset('tasty/js/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('tasty/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ URL::asset('tasty/js/aos.js') }}"></script>
  <script src="{{ URL::asset('tasty/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ URL::asset('tasty/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ URL::asset('tasty/js/jquery.timepicker.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ URL::asset('tasty/js/google-map.js') }}"></script>
  <script src="{{ URL::asset('tasty/js/main.js') }}"></script>
    
  </body>
</html>