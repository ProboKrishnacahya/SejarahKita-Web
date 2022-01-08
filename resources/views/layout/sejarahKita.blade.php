<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    {{-- HyperText Markup Language Meta Tags --}}
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

    {{-- Laravel Framework CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Bootstrap Framework Content Delivery Network (Cascading Style Sheets, Icon Fonts, JavaScript Bundle with Popper) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- jQuery Library Content Delivery Network --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- jQuery Library's Plugin (DataTables) --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.js"></script>

    {{-- Cascading Style Sheets Library (Animate On Scroll) --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

    {{-- External Cascading Style Sheets --}}
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css" />

    {{-- Tab Page Favicon --}}
    <link rel="icon" href="{{ url('assets/img/favicon.ico?v=2') }}" type="image/ico" />

    {{-- Tab Page Title --}}
    <title>@yield('title')</title>
</head>

<body class="d-flex flex-column h-100 text-white">
    {{-- Web's Header --}}
    <nav class="navbar navbar-dark navbar-expand-lg py-3 user-select-none">
        <div class="container">
            <a class="navbar-brand" href="{{ route('user') }}" data-bs-toggle="tooltip" data-bs-placement="bottom"
                title="Homepage">
                <img src="{{ url('assets/img/logo.svg') }}" alt="Logo" class="nav-logo pe-2">
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
                    <li class="nav-item me-4">
                        <a class="nav-link {{ $active_game ?? '' }}" href="/game">Game</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link {{ $active_leaderboard ?? '' }}" href="/leaderboard">Leaderboard</a>
                    </li>

                    @if (Auth::user() != null)
                        @if (Auth::user()->roles->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link menu-last-child" href="{{ route('admin.profile') }}"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>&emsp;{{ Auth::user()->username }}
                                </a>
                            </li>
                        @elseif (Auth::user()->roles->role == 'user')
                            <li class="nav-item">
                                <a class="nav-link menu-last-child" href="{{ route('profile') }}"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>&emsp;{{ Auth::user()->username }}
                                </a>
                            </li>
                        @endif
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    {{-- Web's Content --}}
    <main class="my-5 flex-shrink-0">
        <div class="container">
            @yield('content')
        </div>
    </main>

    {{-- Web's Footer --}}
    <footer class="navbar text-center py-3 mt-auto user-select-none">
        <div class="mx-auto">
            <span>&copy; 2021</span><a href="{{ url('/') }}" data-bs-toggle="tooltip" title="Homepage">&nbsp;<span
                    class="fw-bold">SejarahKita</span></a>
        </div>
    </footer>

    {{-- External JavaScript --}}
    <script src="{{ url('/assets/js/script.js') }}" type="text/javascript"></script>
    <script src="{{ url('/assets/js/libraries.js') }}" type="text/javascript"></script>
    <script src="{{ url('/assets/js/dataTables.js') }}" type="text/javascript"></script>

    {{-- JavaScript Object Notation Library (Lottie Animation) --}}
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    {{-- Cascading Style Sheets Library (Animate On Scroll) --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>
