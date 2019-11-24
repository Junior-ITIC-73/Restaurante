@extends('Arboleda.principal')

@section('contenido')
    <title>Tasty - Free Bootstrap 4 Template by Colorlib</title>
   
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('tasty/images/conta.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Contacto</span></p>
              <h1 class="mb-3">Contactanos</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9 mb-4">
          <div class="col-md-6 pr-md-5 flex-column">
            <div class="row d-block flex-row">
              <h2 class="h4 mb-4">Información de contacto</h2>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>Dirección:</span> Hacienda San Diego de Los Padres 48, Santa Elena, 52100 Toluca de Lerdo, Méx.</p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>Telefono:</span> <a href="tel://5518465917">+52 1 5518465917</a></p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>Email:</span> <a href=""></a></p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>Website</span> <a href="#">Arboledarestaurante.com</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Asunto">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12" ><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15063.882950955562!2d-99.5434357!3d19.2836387!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x367eeefae91b8fd8!2sRestaurante%20Caf%C3%A9%20Arboleda!5e0!3m2!1ses!2smx!4v1571289270437!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
        </div>
      </div>
    </section>
@stop