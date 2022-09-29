<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <!-- act as assurance if template doesn't link load properly -->
  <!-- <base href="{{ \URL::to('/') }}"> -->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  @yield('head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-black navbar-dark bg-dark" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <!--
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li> -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('')}}" class="nav-link"></a>
      </li>
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="{{url('')}}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Pemantau Energi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander The Great</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('overview')}}" class="nav-link {{ (request()->is('overview')) ? 'active' : ''}} ">
              <i class="far fa-circle nav-icon"></i>
              <p>Overview</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('genset')}}" class="nav-link {{ (request()->is('genset')) ? 'active' : ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Genset</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('tangki')}}" class="nav-link {{ (request()->is('tangki')) ? 'active' : ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Tangki</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('motor')}}" class="nav-link {{ (request()->is('motor')) ? 'active' : ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Motor</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="baterai" class="nav-link {{ (request()->is('baterai')) ? 'active' : ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Baterai</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="gasfill" class="nav-link {{ (request()->is('baterai')) ? 'active' : ''}}">
              <i class="far fa-circle nav-icon"></i>
              <p>Pengisian Tangki</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#454d55">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer bg-secondary">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 <a href="#">Some Corporation</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

@yield('scripts')
</body>
</html>
