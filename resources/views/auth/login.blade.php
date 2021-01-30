@extends('layouts.app')
@section('content')
<main id="main-container">
    <div class="hero-static">
        <div class="content mt-4">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="block block-rounded block-themed mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Log in</h3>
                        </div>
                        <div class="block-content">
                            <div class="p-sm-3 px-lg-4 py-lg-5">
                                <h1 class="h2 mb-1">Admin Panel</h1>
                                <p class="text-muted">
                                    Welcome to Admin Panel auth.
                                </p>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="py-3">
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control form-control-alt form-control-lg @error('email') is-invalid @enderror" name="email" placeholder="E-Mail" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input id="password" type="password" class="form-control form-control-alt form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-alt-dark" onclick="showPassword()"><i id="changeicon" class="fa fa-eye-slash"></i></button>
                                                </div>
                                            </div>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-xl-5">
                                            <button type="submit" class="btn btn-block btn-alt-primary">
                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Log In
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content content-full font-size-sm text-muted text-center">
            <strong>Admin Panel</strong> &copy; 2021
        </div>
    </div>
</main>
@endsection
