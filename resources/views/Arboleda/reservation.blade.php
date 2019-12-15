@extends('Arboleda.principal')

@section('contenido')
    <title>Arboleda-Restaurante cafe</title>
    
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('tasty/images/te.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>Reservación</span></p>
              <h1 class="mb-3">Realiza tu reservación</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Realiza tu reservación</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 ftco-animate img" style="background-image: url(tasty/images/r.jpg);"></div>
          <div class="col-md-8 ftco-animate makereservation p-5 bg-light">
            <form action="#">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control" placeholder="Telefono">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Fecha</label>
                    <input type="text" class="form-control" id="book_date" placeholder="Fecha">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Hora</label>
                    <input type="text" class="form-control" id="book_time" placeholder="Hora">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Personas</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Personas</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <input type="submit" value="Realizar reservación" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    @stop