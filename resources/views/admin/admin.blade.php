<!DOCTYPE html>
<html>
<head>
  <link rel="ICON"  type="IMAGEN/PNG" href="tasty/images/logo1.ico">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Restaurante | Arboleda</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/skin-blue.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

{{-- ROLES DE USUARIOS COLORES--}}
@if(auth()->user()->rol_user == 0)
    <style type="text/css">
      .skin-blue .main-header .navbar{
        background-color: #222d32 ;
      }
      .skin-blue .main-header .logo{
         background-color: #222d32 ;
      }
      .navbar-nav>.user-menu>.dropdown-menu>li.user-header {
         background-color: #222d32 ;
      }
    </style>
@endif

@if(auth()->user()->rol_user == 1)
    <style type="text/css">
      .skin-blue .main-header .navbar{
        background-color: #153144;
      }
      .skin-blue .main-header .logo{
         background-color: #153144;
      }
       .navbar-nav>.user-menu>.dropdown-menu>li.user-header {
         background-color: #153144 ;
      }
    </style>
@endif

@if(auth()->user()->rol_user == 2)
    <style type="text/css">
      .skin-blue .main-header .navbar{
        background-color: #1D6FA7;
      }
      .skin-blue .main-header .logo{
         background-color: #1D6FA7;
      }
       .navbar-nav>.user-menu>.dropdown-menu>li.user-header {
         background-color: #1D6FA7 ;
      }
    </style>
@endif

@if(auth()->user()->rol_user == 3)
    <style type="text/css">
      .skin-blue .main-header .navbar{
        background-color: #2099EA;
      }
      .skin-blue .main-header .logo{
         background-color: #2099EA;
      }
       .navbar-nav>.user-menu>.dropdown-menu>li.user-header {
         background-color: #2099EA ;
      }
    </style>
@endif
{{-- Final roles de usuarios --}}



</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      {{-- <span class="logo-mini"><b>A</b>RC</span> --}}
      {{-- <img src="tasty/images/logo1.ico" width="20px" height="20px"> --}}
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Arboleda</b>Restaurante<br>Hola</span>
      {{-- <center><img src="tasty/images/logo1.ico" width="230px" height="230px"></center> --}}
      {{-- <span class="logo-lg"><img src="tasty/images/logo1.ico" width="60px" height="60px"></span> --}}
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{ asset('image/user.png') }}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ auth()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{ asset('image/user.png') }}" class="img-circle" alt="User Image">

                <p>
                   {{ auth()->user()->name }} 
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  {{-- <a href="#" class="btn btn-default btn-flat">Profile</a> --}}
                </div>
                <div class="pull-right">
                  <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>



  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->

      <ul class="sidebar-menu" data-widget="tree">
        {{-- Roles para los Admin --}}
        @if(auth()->user()->rol_user == 1 or auth()->user()->rol_user == 0)
            <li class="treeview active menu-open">
              <a href="#">
                <i class="fa fa-link"></i> <span>Usuarios</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="/usuarios">
                    <i class="fa fa-circle-o"></i>
                    Usuarios
                  </a>
                </li>
                <li>
                  <a href="/empleado">
                    <i class="fa fa-circle-o"></i>
                    Empleado
                  </a>
                </li>
              </ul>
            </li>
        @endif


        <li class="treeview active menu-open">
          <a href="#">
            <i class="fa fa-link"></i> <span>Mesas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="/mesas">
                <i class="fa fa-circle-o"></i>
                Mesas
              </a>
            </li>
             @if(auth()->user()->rol_user == 1 or auth()->user()->rol_user == 0 or auth()->user()->rol_user == 2)
                  <li>
                    <a href="/categoriaPlatillo">
                      <i class="fa fa-circle-o"></i>
                      Categoria Platillos
                    </a>
                  </li>
            @endif
            <li>
              <a href="/menuplatillo">
                <i class="fa fa-circle-o"></i>
                Menu Platillos
              </a>
            </li>
          </ul>
        </li>
 @if(auth()->user()->rol_user == 1 or auth()->user()->rol_user == 0 or auth()->user()->rol_user == 2)
        <li class="treeview active menu-open">
          <a href="#">
            <i class="fa fa-link"></i> <span>Ventas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="{{url('/realizarventa')}}">
                <i class="fa fa-circle-o"></i>
                Realizar venta
              </a>
            </li>
          </ul>
        </li>
@endif
         @if(auth()->user()->rol_user == 1 or auth()->user()->rol_user == 0)
            <li class="treeview active menu-open">
              <a href="#">
                <i class="fa fa-link"></i> <span>Corte Caja</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{url('/corteCaja')}}">
                    <i class="fa fa-circle-o"></i>
                    Corte Caja
                  </a>
                </li>
              </ul>
            </li>
        @endif

        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-link"></i><span>Corte Caja</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="/corteCaja">
                <i class="fa fa-circle-o"></i>
                Corte de caja
              </a>
            </li>
          </ul>
        </li>
      </ul> --}}
      <br><br>
     
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('header')
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="col-md-12">

        @yield('content')

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <!-- 2018 -->
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">Arboleda Restaurante</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
@stack('scripts')
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>


</body>
</html>