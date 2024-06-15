<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-learning | @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('lte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('lte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('lte/plugins/summernote/summernote-bs4.min.css')}}">
   <!-- DataTables -->
   <link rel="stylesheet" href="{{asset('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{asset('lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{asset('lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="background: #ccefe7; ">
<div class="wrapper">



  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('e-learning')}}" class="nav-link {{ Route::currentRouteName() == 'e-learning' ? 'active' : '' }}">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('finances.index')}}" class="nav-link">Kelola Uang</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Landing Page</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
        <div class="nav-link " href="#" id="">
          {{Auth::user()->profile->name}}
        </div>
        @if(Auth::user()->profile->photo_path)
      <img src="{{ asset('storage/' . Auth::user()->profile->photo_path) }}" class="img-fluid rounded-circle" alt="User Image" style="height: 40px; width:40px;">
      @endif
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-success elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open mb-3">
            <a href="{{route('admin.dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Fundamental Level
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item mb-3">
                <a href="{{route('funda1')}}" class="nav-link {{ Route::currentRouteName() == 'funda1' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Pengantar 1.....</p>
                </a>
              </li>
              <li class="nav-item mb-3">
                <a href="{{route('funda2')}}" class="nav-link {{ Route::currentRouteName() == 'funda2' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Pengantar 2.....</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('funda3')}}" class="nav-link {{ Route::currentRouteName() == 'funda3' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Pengantar 3.....</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('funda4')}}" class="nav-link {{ Route::currentRouteName() == 'funda4' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Pengantar 4.....</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('funda5')}}" class="nav-link {{ Route::currentRouteName() == 'funda5' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Pengantar 5.....</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open mb-3">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Intermediate Level
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item mb-3">
                <a href="{{route('inter1')}}" class="nav-link {{ Route::currentRouteName() == 'inter1' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Menengah 1.....</p>
                </a>
              </li>
              <li class="nav-item mb-3">
                <a href="{{route('inter2')}}" class="nav-link {{ Route::currentRouteName() == 'inter2' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Menengah 2.....</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('inter3')}}" class="nav-link {{ Route::currentRouteName() == 'inter3' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Menengah 3.....</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('inter4')}}" class="nav-link {{ Route::currentRouteName() == 'inter4' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Menengah 4.....</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('inter5')}}" class="nav-link {{ Route::currentRouteName() == 'inter5' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Menengah 5.....</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open mb-3">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Advance Level
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item mb-3">
                <a href="{{route('adv1')}}" class="nav-link {{ Route::currentRouteName() == 'adv1' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Advance 1.....</p>
                </a>
              </li>
              <li class="nav-item mb-3">
                <a href="{{route('adv2')}}" class="nav-link {{ Route::currentRouteName() == 'adv2' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Advance 2.....</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('adv3')}}" class="nav-link {{ Route::currentRouteName() == 'adv3' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Advance 3.....</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('adv4')}}" class="nav-link {{ Route::currentRouteName() == 'adv4' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Advence 4.....</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('adv5')}}" class="nav-link {{ Route::currentRouteName() == 'adv5' ? 'active' : '' }}">
                    <i class="far fa-dot-circle nav-icon"></i>
                  <p>Advance 5.....</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item mb-3">
            <a href="{{route('home')}}" class="nav-link">
              <i class="fas fa-arrow-left"></i>
              <p>
                Back
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('lte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('lte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('lte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('lte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('lte/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('lte/dist/js/pages/dashboard.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('lte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('lte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('lte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
</body>
</html>
