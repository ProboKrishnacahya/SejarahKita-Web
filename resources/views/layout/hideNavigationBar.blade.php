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
    <link rel="icon" href="{{ url('assets/img/favicon.ico?v=2') }}" type="image/ico" />

    {{-- Tab Page Title --}}
    <title>@yield('title')</title>
</head>

<body class="d-flex flex-column h-100 text-white">
    {{-- Web's Content --}}
    <main class="my-5 flex-shrink-0">
        <div class="container">@yield('content')</div>
    </main>

    {{-- External JavaScript --}}
    <script src="{{ url('/assets/js/script.js') }}"></script>
    <script src="{{ url('/assets/js/libraries.js') }}"></script>
    <script src="{{ url('/assets/js/dataTables.js') }}"></script>
</body>

</html>
