@extends('layout.sejarahKita')

@section('title', 'SejarahKita')

@section('content')
    <div class="row my-5 hero">
        <div class="col-md-8 align-self-center">
            <div class="mb-5">
                <span class="fs-3">Mari Berlatih <strong>Sejarah Indonesia</strong></span>
                <p class="fs-1">Bersama <a href="{{ url('/') }}"><span
                            class="fw-bold fs-1">SejarahKita</span></a></p>
                <p id="typewriting"></p>
            </div>
            <a href="game">
                <button class="btn btn-lg btn-primary px-3 me-3">
                    <i class="bi bi-controller"></i>&emsp;{{ __('Mulai Permainan') }}
                </button>
            </a>
            <a href="leaderboard">
                <button class="btn btn-lg btn-outline-primary px-3">
                    <i class="bi bi-bar-chart"></i>&emsp;{{ __('Lihat Peringkat') }}
                </button>
            </a>
        </div>
        <div class="col-md-4">
            <img src="https://static.vecteezy.com/system/resources/previews/002/406/486/non_2x/an-intelligent-and-proud-owl-with-a-graduation-cap-free-vector.jpg"
                alt="Jumbotron" loading="lazy" class="jumbotron-img" />
        </div>
    </div>

    <div class="card my-5">
        <p><strong>SejarahKita</strong> adalah Aplikasi tentang Game Edukasi berupa Anagram dengan topik mata
            pelajaran Sejarah Indonesia Kelas 12 yang berfokus pada bab-bab berikut:</p>
        <ul>
            <li>Perjuangan Bangsa Indonesia dalam Menghadapi Ancaman Disintegrasi dari Ideologi, Kepentingan, dan Sistem
                Pemerintahan.
            </li>
            <li>Peran dan Nilai-nilai Perjuangan Tokoh Nasional serta Tokoh Daerah dalam Mempertahankan Keutuhan Negara
                dan Bangsa Indonesia pada Masa 1945–1965.
            </li>
        </ul>

        <p>Terdapat 2 mode permainan, yaitu</p>
        <ol>
            <li>Casual</li>
            <li>Ranked (memiliki 2 pilihan level yang setiap perolehan Ranked Point nya diakumulasi pada masing-masing
                Leaderboard):</li>
            <ul>
                <li>Easy</li>
                <li>Hard</li>
            </ul>
        </ol>
    </div>

    <div id="carouselExample" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner bg-dark">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="{{ url('assets/img/logo.png') }}" alt="Carousel" loading="lazy" class="img-fluid" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ url('assets/img/logo.png') }}" alt="Carousel" loading="lazy" class="img-fluid" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ url('assets/img/logo.png') }}" alt="Carousel" loading="lazy" class="img-fluid" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ url('assets/img/logo.png') }}" alt="Carousel" loading="lazy" class="img-fluid" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fourth slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div>
                <h2>Universitas Ciputra</h2>
                <q>Creating World Class <strong>Entrepreneurs</strong></q>
                <br><br>
                <a href="https://goo.gl/maps/kcKtWyQcjksTkcy18">
                    <i
                        class="bi bi-compass"></i>&emsp;{{ 'Citraland CBD Boulevard, Made, Kec. Sambikerep, Surabaya, Jawa Timur, 60219.' }}
                </a>
                <br>
                <a href="https://www.uc.ac.id/">
                    <button class="btn btn-primary mt-5 px-3">
                        <i class="bi bi-globe2"></i>&emsp;{{ __('Kunjungi Situs Web UC') }}
                    </button>
                </a>
            </div>
        </div>
        <div class="col-md-7 mapouter">
            <div class="gmap_canvas">
                <iframe id="gmap_canvas"
                    src="https://maps.google.com/maps?q=universitas%20ciputra%20surabaya&t=k&z=15&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
    <i class="bi bi-arrow-up-circle-fill scrollToTopBtn fs-1" data-bs-toggle="tooltip" title="Scroll to Top Page"></i>

    {{-- JS Library (TypewriterJS) --}}
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
@endsection

@section('footer')
