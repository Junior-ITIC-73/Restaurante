<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ARBOLEDA ADMIN</title>


<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'><link rel="stylesheet" href="{{asset('css/style.css')}}">



</head>
<body>
<!-- partial:index.partial.html -->
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">PANEL DE ADMINISTRACIÓN</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Andres
            <strong>Sanchez</strong>
          </span>
          <span class="user-role">Administrador</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Buscar...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              {{-- <i class="fa fa-tachometer-alt"></i> --}}
              <i class="fas fa-users"></i>
              <span>USUARIOS</span>
              {{-- <span class="badge badge-pill badge-warning">NEW</span> --}}
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{route('users.index')}}">MOSTRAR USUARIOS</a>
                </li>
                <li>
                  <a href="{{route('users.create')}}">ALTA USUARIOS
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              {{-- <i class="fa fa-shopping-cart"></i> --}}
               <i class="fas fa-utensils"></i>
              <span>PLATILLOS DEL DIA</span>
              {{-- <span class="badge badge-pill badge-danger">3</span> --}}
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{url('menuplatillo/')}}">MONSTRAR PLATILLOS</a>
                </li>
                <li>
                  <a href="{{url('menuplatillo/create')}}">ALTA DE PLATILLO
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              {{-- <i class="far fa-gem"></i> --}}

              <i class="fa fa-shopping-cart"></i>
              <span>PEDIDOS</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{route('pedidos.index')}}">MOSTRAR PEDIDOS</a>
                </li>
                <li>
                  <a href="{{route('pedidos.create')}}">ALTA PEDIDO</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              {{-- <i class="far fa-gem"></i> --}}
              <i class="fas fa-parachute-box"></i>
              <span>PROVEEDORES</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{url('proveedor/')}}">MOSTRAR PROVEEDORES</a>
                </li>
                 <li>
                  <a href="{{url('proveedor/create')}}">ALTA PROVEEDOR</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              {{-- <i class="fa fa-chart-line"></i> --}}
              <i class="fas fa-box-open"></i>
              <span>PRODUCTOS</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{url('categoria/')}}">ALTA DE CATEGORIA</a>
                </li>
                <li>
                  <a href="{{url('producto/')}}">MOSTRA PRODUCTOS</a>
                </li>
                <li>
                  <a href="{{url('producto/create')}}">ALTA PRODUCTO</a>
                </li>
              </ul>
            </div>
          </li>
{{--           <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li> --}}
          {{-- <li class="header-menu">
            <span>Extra</span>
          </li> --}}
   {{--        <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li> --}}
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="{{route('arboleda.index')}}">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    @yield('content')
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
<!-- partial -->
{{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script> --}}
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js'></script><script  src="{{asset('js/script.js')}}"></script>





</body>
</html
