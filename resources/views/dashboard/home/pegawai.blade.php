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
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar  elevation-4" style="background-color: #24afc1">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{ asset('assets/dist/img/Logo_PLN.png') }}" alt="PLN Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
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
                    <li class="nav-item">
                        <a href="" class="nav-link" style="background-color: white">
                            <i class="nav-icon fas fa-tachometer-alt" style="color: black"></i>
                            <p style="color: black">
                                Dashboard
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="" class="nav-link ">
                            <i class="nav-icon far fa-file-alt" style="color: white"></i>
                            <p style="color: white">
                                Laporan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('loket.loket')}}" class="nav-link" >
                                    <i class="far fa-circle nav-icon" style="color: white"></i>
                                    <p style="color: white">Loket</p>
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
                            <li class="nav-item">
                                @if (Route::has('login'))
                                    @auth
                                        <form action="/logout" method="post">
                                            @csrf
                                            <i></i>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); this.closest('form').submit();">Keluar</a>
                                        </form>
                                    @endauth
                                @endif
                            </li>


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
