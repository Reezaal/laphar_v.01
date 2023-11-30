<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle')</title>

    <link rel="icon" href="{{ asset('assets/dist/img/Logo_PLN.png') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
    @stack('stylesheets')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('assets/dist/img/Logo_PLN.png') }}" alt="PLN Logo" height="60"
                width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light" style="background-color: #24afc1">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar  elevation-4" style="background-color: #24afc1">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('assets/dist/img/Logo_PLN.png') }}" alt="PLN Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text" style="color: white; font-weight: bold; letter-spacing: 1px">LAPHAR</span>
            </a>

            <hr style="background-color: #fccf47; height: 1px; margin-top: 0px">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <hr style="background-color: white">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            @if (Route::is('admin.*'))
                            <li class="nav-item">
                                <a href="{{ route('admin.home')}}" class="nav-link" style="background-color: white">
                                    <i class="nav-icon fas fa-tachometer-alt" style="color: black"></i>
                                    <p style="color: black">
                                        Dashboard
                                        <span class="right badge badge-danger">New</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item menu-open">
                                <a href="{{ route('admin.loket') }}" class="nav-link " >
                                    <i class="nav-icon far fa-file-alt" style="color: white"></i>
                                    <p style="color: white">
                                        Laporan
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="loket" class="nav-link" style="background-color: #1795a8">
                                            <i class="far fa-circle nav-icon" style="color: #fccf47"></i>
                                            <p style="color: #fccf47">Loket</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./index2.html" class="nav-link">
                                            <i class="far fa-circle nav-icon" style="color: white"></i>
                                            <p style="color: white">Material</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./index3.html" class="nav-link">
                                            <i class="far fa-circle nav-icon" style="color: white"></i>
                                            <p style="color: white">Peremajaan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tsOpen" class="nav-link">
                                            <i class="far fa-circle nav-icon" style="color: white"></i>
                                            <p style="color: white">TS Open</p>
                                        </a>
                                    </li>
                            @else
                            <li class="nav-item">
                                <a href="{{ route('.home')}}" class="nav-link" style="background-color: white">
                                    <i class="nav-icon fas fa-tachometer-alt" style="color: black"></i>
                                    <p style="color: black">
                                        Dashboard
                                        <span class="right badge badge-danger">New</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item menu-open">
                                <a href="{{ route('.loket')}}" class="nav-link " >
                                    <i class="nav-icon far fa-file-alt" style="color: white"></i>
                                    <p style="color: white">
                                        Laporan
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="loket" class="nav-link" style="background-color: #1795a8">
                                            <i class="far fa-circle nav-icon" style="color: #fccf47"></i>
                                            <p style="color: #fccf47">Loket</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./index2.html" class="nav-link">
                                            <i class="far fa-circle nav-icon" style="color: white"></i>
                                            <p style="color: white">Material</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./index3.html" class="nav-link">
                                            <i class="far fa-circle nav-icon" style="color: white"></i>
                                            <p style="color: white">Peremajaan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tsOpen" class="nav-link">
                                            <i class="far fa-circle nav-icon" style="color: white"></i>
                                            <p style="color: white">TS Open</p>
                                        </a>
                                    </li>
                            @endif
                        
                            </ul>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="#">R&R</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('assets/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>\
    @stack('scripts')
</body>

</html>
