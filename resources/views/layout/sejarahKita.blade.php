<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="SejarahKita, Web Application, Game Edukasi, Sejarah Indonesia, Informatika Universitas Ciputra Surabaya" />
    <meta name="description" content="SejarahKita Web Application." />
    <meta name="owner" content="Vanness Zhong Anthony, Nathanael Abel Arianto, Probo Krishnacahya, Michael Chandra." />
    <meta name="robots" content="home, follow" />
    <meta name="theme-color" content="#020E3A">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- External CSS --}}
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css" />

    {{-- Google Fonts & Google Icons --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

    {{-- Tab Page Favicon --}}
    <link rel="icon" href="{{ url('assets/img/favicon.png?v=2') }}" type="image/png" />

    {{-- Tab Page Title --}}
    <title>@yield("title")</title>
</head>

<body class="text-white">
    {{-- Header --}}
    <nav class="navbar navbar-dark navbar-expand-lg user-select-none">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('assets/img/logo.png') }}" alt="Logo" class="nav-logo pe-3"><span
                    class="nav-brand">SejarahKita</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ $active_game ?? '' }}" href="/game">Game</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active_leaderboard ?? '' }}" href="/leaderboard">Leaderboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-4 me-0" data-bs-toggle="dropdown" role="button"
                            aria-expanded="false">Profile</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main class="mt-5">
        @yield('content')
    </main>

    {{-- Footer --}}
    {{-- <footer class="navbar bg-dark user-select-none">
        <div class="container">
            <div class="d-flex">
                &copy; 2021<a href="/">&nbsp;<span class="fw-bold">SejarahKita</span></a>
            </div>

            <ul class="justify-content-end list-unstyled d-flex pt-2 mb-1">
                <li><a href="mailto:SejarahKita@gmail.com"><i class="bi bi-envelope-fill contact"></i></a></li>
                <li class="ms-3"><a href="https://twitter.com/SejarahKita"><i class="bi bi-twitter contact"></i></a>
                </li>
                <li class="ms-3"><a href="instagram.com/SejarahKita"><i class="bi bi-instagram contact"></i></a></li>
                <li class="ms-3"><a href="https://www.facebook.com/SejarahKita"><i
                            class="bi bi-facebook contact"></i></a></li>
            </ul>
        </div>
    </footer> --}}

    {{-- External JS --}}
    <script src="{{ asset('assets/js') }}/script.js"></script>
</body>

</html>
