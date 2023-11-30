@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'LAPHAR | Admin Login')
@section('content')
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

                <form action="{{ route('admin.login_handler') }}" method="post">
                    @csrf
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="login_id"
                            value="{{ old('login_id') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @error('login_id')
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
@endsection
