<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

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

    {{-- Framework Bootstrap Content Delivery Network (Cascading Style Sheets, Icon Fonts, JavaScript Bundle with Popper) --}}
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

    {{-- jQuery Plugin (DataTables) --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.js"></script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

    {{-- External Cascading Style Sheets --}}
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css" />

    {{-- Tab Page Favicon --}}
    <link rel="icon" href="{{ url('assets/img/favicon.png?v=2') }}" type="image/png" />

    {{-- Tab Page Title --}}
    <title>@yield('title')</title>
</head>

<body class="d-flex flex-column h-100 text-white">
    {{-- Web's Header --}}
    <nav class="navbar navbar-dark navbar-expand-lg py-3 user-select-none">
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
                    <li class="nav-item me-4">
                        <a class="nav-link {{ $active_game ?? '' }}" href="/game">Game</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link {{ $active_leaderboard ?? '' }}" href="/leaderboard">Leaderboard</a>
                    </li>

                    @if (Auth::user() != null)
                        @if (Auth::user()->role == 'admin')
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
                        @elseif (Auth::user()->role == 'user')
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
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle menu-last-child" data-bs-toggle="dropdown" role="button"
                                aria-expanded="false">Authentication</a>
                            <ul class="dropdown-menu dropdown-menu-end">
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

    {{-- Web's Content --}}
    <main class="my-5 flex-shrink-0">
        <div class="container">@yield('content')</div>
    </main>

    {{-- Web's Footer --}}
    <footer class="navbar mt-auto user-select-none">
        <div class="container">
            <div class="d-flex">
                &copy; 2021<a href="{{ url('/') }}" data-bs-toggle="tooltip" title="Homepage">&nbsp;<span
                        class="fw-bold">SejarahKita</span></a>
            </div>

            {{-- <div class="justify-content-center">
                <q>Creating World Class Entrepreneurs</q>
            </div> --}}

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

                <li class="ms-3 mt-1">
                    <a href="http://line.me/ti/p/~@ucpeople" target="_blank" rel="noopener noreferrer"
                        data-bs-toggle="tooltip" title="Line">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-line" viewBox="0 0 16 16">
                            <path
                                d="M8 0c4.411 0 8 2.912 8 6.492 0 1.433-.555 2.723-1.715 3.994-1.678 1.932-5.431 4.285-6.285 4.645-.83.35-.734-.197-.696-.413l.003-.018.114-.685c.027-.204.055-.521-.026-.723-.09-.223-.444-.339-.704-.395C2.846 12.39 0 9.701 0 6.492 0 2.912 3.59 0 8 0ZM5.022 7.686H3.497V4.918a.156.156 0 0 0-.155-.156H2.78a.156.156 0 0 0-.156.156v3.486c0 .041.017.08.044.107v.001l.002.002.002.002a.154.154 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157Zm.791-2.924a.156.156 0 0 0-.156.156v3.486c0 .086.07.155.156.155h.562c.086 0 .155-.07.155-.155V4.918a.156.156 0 0 0-.155-.156h-.562Zm3.863 0a.156.156 0 0 0-.156.156v2.07L7.923 4.832a.17.17 0 0 0-.013-.015v-.001a.139.139 0 0 0-.01-.01l-.003-.003a.092.092 0 0 0-.011-.009h-.001L7.88 4.79l-.003-.002a.029.029 0 0 0-.005-.003l-.008-.005h-.002l-.003-.002-.01-.004-.004-.002a.093.093 0 0 0-.01-.003h-.002l-.003-.001-.009-.002h-.006l-.003-.001h-.004l-.002-.001h-.574a.156.156 0 0 0-.156.155v3.486c0 .086.07.155.156.155h.56c.087 0 .157-.07.157-.155v-2.07l1.6 2.16a.154.154 0 0 0 .039.038l.001.001.01.006.004.002a.066.066 0 0 0 .008.004l.007.003.005.002a.168.168 0 0 0 .01.003h.003a.155.155 0 0 0 .04.006h.56c.087 0 .157-.07.157-.155V4.918a.156.156 0 0 0-.156-.156h-.561Zm3.815.717v-.56a.156.156 0 0 0-.155-.157h-2.242a.155.155 0 0 0-.108.044h-.001l-.001.002-.002.003a.155.155 0 0 0-.044.107v3.486c0 .041.017.08.044.107l.002.003.002.002a.155.155 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156Z" />
                        </svg>
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

    {{-- External JavaScript --}}
    <script src="{{ url('/assets/js/script.js') }}"></script>
    <script src="{{ url('/assets/js/libraries.js') }}"></script>
    <script src="{{ url('/assets/js/dataTables.js') }}"></script>
</body>

</html>
