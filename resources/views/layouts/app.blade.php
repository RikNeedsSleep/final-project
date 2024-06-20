<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Pemesanan  Makanan Online')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style media="screen">
        body {
            background-image: url('{{ asset('img/makanan.jpg') }}'); /* Ganti dengan path gambar makanan Anda */
            background-size: cover;
            background-repeat: no-repeat;
            transition: 2s;
        }

        .navbar {
            background-color: transparent; /* Navbar transparan */
            border: none; /* Menghilangkan border */
        }

        .navbar-toggler {
            background-color: blue; /* Warna latar belakang biru pada tombol navbar */
            border-radius: 4px; /* Membuat tombol lebih bulat */
            border: 1px solid blue; /* Border biru pada tombol */
            color: white; /* Warna teks tombol */
        }

        .navbar-brand {
            color: white; /* Warna putih pada logo */
            font-family: 'Source Sans Pro', sans-serif; /* Ubah jenis font navbar brand */
            font-size: 1.5rem; /* Ubah ukuran font navbar brand */
            font-weight: bold; /* Buat teks bold */
        }

        .nav-link.login-link {
            background-color: rgb(2, 112, 255); /* Background biru untuk login */
            color: white; /* Teks putih untuk login */
            font-weight: bold; /* Teks bold */
            border-radius: 4px; /* Membulatkan sudut tombol */
            padding: 5px 10px; /* Menambahkan padding */
        }

        .nav-link.register-link {
            background-color: white; /* Background putih untuk register */
            color: rgb(0, 0, 0); /* Teks hitam untuk register */
            font-weight: bold; /* Teks bold */
            border-radius: 4px; /* Membulatkan sudut tombol */
            padding: 5px 10px; /* Menambahkan padding */
            margin-left: 15px; /* Menambahkan margin kiri untuk spasi */
        }

        .navbar-nav.ml-auto {
            margin-right: -60px; /* Mengatur margin kanan untuk memindahkan tombol lebih dekat ke sisi kanan */
        }
    </style>
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color:white">
                    PEMESANAN MAKANAN ONLINE <!-- Ubah teks sesuai dengan keinginan Anda -->
                </a>
                <!-- Toggler button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar content -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right navbar links -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link login-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link register-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main content -->
        <main class="py-4">
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('user/js/main.js') }}"></script>
</body>
</html>
