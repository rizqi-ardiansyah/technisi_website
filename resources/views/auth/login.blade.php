@extends('layouts.main')
@section('content')

<head>
    <title>Login Page</title>
</head>

<body>
    <div class="header home">
        <div class="container-fluid">
            <div class="hero row align-items-center">
                <div class="container" id="containerlogin">
                    <img src="/img/logo_technician.png" class="mx-auto d-block">
                    <form action="{{ route('login') }}" class="form-login" method="POST" autocomplete="off">
                        @csrf
                        <input id="email" type="email" class="form-control shadow-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                        <input class="form-control shadow-sm" name="password" id="password" type="password" placeholder="Password">
                        <button type="submit" name="submit" class="btn btn-success shadow-sm border-0">{{ __('Login') }}</button>
                    </form>
                    <div class="d-flex justify-content-between text-bawah">
                        <div class="mt-2"><a href="/register_">Register</a></div>
                        <div class="mt-2"><a href="#">Forgot Password?</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
