<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle')</title>

    <link rel="icon" href="{{ asset('assets/dist/img/Logo_PLN.png') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    @stack('stylesheets')
</head>

<body class="login-page" style="min-height: 463.333px;">
    {{-- @yield('content') --}}
    <!-- /.login-box -->
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-info">
                <img src="{{ asset('assets/dist/img/Logo_PLN.png') }}" alt="Logo PLN"
                    style="width: 15%; display: flex; margin-left: 150px; padding-top: 25px">
                <div class="card-header text-center">
                    <a href="../../index2.html" class="h1"><b>LAPHAR</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Silakan masuk untuk mulai aktivitas anda</p>

                    <form action="{{ route('login.store') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" name="username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        @error('username')
                            <div class="d-block text-danger" style="margin-top: -16px;margin-bottom: 15px">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @error('password')
                            <div class="d-block text-danger" style="margin-top: -16px;margin-bottom: 15px">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Ingat saya!
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-info btn-block">Masuk</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                    <p class="mb-1">
                        <a href="forgot-password.html">Lupa password</a>
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
