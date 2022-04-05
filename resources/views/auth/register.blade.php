@extends('layouts.main')
@section('content')

<head>
    <title>Register Page</title>
</head>

<body>
    <div class="header home">
        <div class="container-fluid">
            <div class="hero row align-items-center">
                <div class="container d-flex justify-content-between">
                    <div class="side-kiri">
                        <h1 class="text-white"><b>Register</b></h1>
                        <form action="#" class="form-register" method="POST">
                            <input class="form-control shadow-sm" name="username" id="username" type="text" placeholder="Username">
                            <input class="form-control shadow-sm" name="email" id="email" type="email" placeholder="Alamat Email">
                            <input class="form-control shadow-sm" name="password" id="password" type="password" placeholder="Password">
                            <input class="form-control shadow-sm" name="password" id="password" type="password" placeholder="Konfirmasi Password">
                            <div class="d-flex justify-content-start">
                                <div class="form-check col">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="Customer" />
                                    <label class="form-check-label" for="Customer"> Customer </label>
                                </div>
                                <div class="form-check col">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="Teknisi" />
                                    <label class="form-check-label" for="Teknisi"> Teknisi </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success shadow-sm border-0">Register</button>
                        </form>
                        <p id="teks-bawah-register">Sudah punya akun? <a href="/login_">Login</a></p>
                    </div>
                    <div class="side-kanan">
                        <img src="/img/technician-illustration1.png" alt="ilustrasi1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection