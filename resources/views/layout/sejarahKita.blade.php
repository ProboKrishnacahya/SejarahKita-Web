<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- HTML Meta Tags --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="SejarahKita, Web Application, Game Edukasi Anagram, Sejarah Indonesia, Informatika Universitas Ciputra Surabaya" />
    <meta name="description"
        content="SejarahKita adalah Aplikasi Web tentang Game Edukasi berupa Anagram dengan topik mata pelajaran Sejarah Indonesia Kelas 12." />
    <meta name="owner" content="Vanness Zhong Anthony, Nathanael Abel Arianto, Probo Krishnacahya, Michael Chandra." />
    <meta name="robots" content="home, follow" />
    <meta name="theme-color" content="#020E3A">

    {{-- Laravel CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Bootstrap Content Delivery Network (CSS, JS with Popper, Icon Fonts) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- jQuery Content Delivery Network --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- External CSS --}}
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css" />

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

    {{-- Tab Page Favicon --}}
    <link rel="icon" href="{{ url('assets/img/favicon.png?v=2') }}" type="image/png" />

    {{-- Tab Page Title --}}
    <title>@yield('title')</title>
</head>

<body class="text-white">
    {{-- Header --}}
    <nav class="navbar navbar-dark navbar-expand-lg user-select-none">
        <div class="container">
            <a class="navbar-brand" href="{{ route('user') }}" data-bs-toggle="tooltip" data-bs-placement="bottom"
                title="Homepage">
                <img src="{{ url('assets/img/logo.png') }}" alt="Logo" class="nav-logo pe-3">
                <span class="nav-brand">SejarahKita</span>
            </a>
            <button class="navbar-toggler collapsed border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
                <div class="bi bi-x-lg fs-1"></div>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <a class="nav-link {{ $active_game ?? '' }}" href="/game">Game</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link {{ $active_leaderboard ?? '' }}" href="/leaderboard">Leaderboard</a>
                    </li>

                    @if (Auth::user() != null)
                        @if (Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.profile') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>&emsp;{{ Auth::user()->username }}
                                </a>
                            </li>
                        @elseif (Auth::user()->role == 'user')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>&emsp;{{ Auth::user()->username }}
                                </a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle me-0" data-bs-toggle="dropdown" role="button"
                                aria-expanded="false">Profile</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main class="mt-5">
        <div class="container">@yield('content')</div>
    </main>

    {{-- Footer --}}
    <footer class="navbar mt-5 user-select-none">
        <div class="container">
            <div class="d-flex">
                &copy; 2021<a href="{{ url('/') }}" target="_blank" data-bs-toggle="tooltip"
                    title="Homepage">&nbsp;<span class="fw-bold">SejarahKita</span></a>
            </div>

            <div class="justify-content-center"><q>Creating World Class Entrepreneurs</q></div>
            <ul class="justify-content-end list-unstyled d-flex pt-2 mb-1">
                <li>
                    <a href="mailto:info@ciputra.ac.id" data-bs-toggle="tooltip" title="Email">
                        <i class="bi bi-envelope icon-font"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a href="https://api.whatsapp.com/send?phone=6282234941824" target="_blank"
                        rel="noopener noreferrer" data-bs-toggle="tooltip" title="WhatsApp">
                        <i class="bi bi-whatsapp icon-font"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a href="http://line.me/ti/p/~@ucpeople" target="_blank" rel="noopener noreferrer"
                        data-bs-toggle="tooltip" title="Line">
                        <i class="bi bi-line icon-font"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a href="https://www.facebook.com/univ.ciputra/" target="_blank" rel="noopener noreferrer"
                        data-bs-toggle="tooltip" title="Facebook">
                        <i class="bi bi-facebook icon-font"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a href="https://twitter.com/UCPeople" target="_blank" rel="noopener noreferrer"
                        data-bs-toggle="tooltip" title="Twitter">
                        <i class="bi bi-twitter icon-font"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a href="https://www.youtube.com/channel/UCi7krrB8kCs8VYZoaODBVAA" target="_blank"
                        rel="noopener noreferrer" data-bs-toggle="tooltip" title="YouTube">
                        <i class="bi bi-youtube icon-font"></i>
                    </a>
                </li>
                <li class="ms-3" target="_blank" rel="noopener noreferrer" data-bs-toggle="tooltip"
                    title="Instagram">
                    <a href="https://www.instagram.com/universitasciputra/">
                        <i class="bi bi-instagram icon-font"></i>
                    </a>
                </li>
            </ul>
        </div>
    </footer>

    {{-- External JS --}}
    <script src="{{ url('/assets/js') }}/script.js"></script>
</body>

</html>
