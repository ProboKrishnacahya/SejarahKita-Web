@extends('layout.sejarahKita')

@section('title', 'SejarahKita')

@section('content')

    <div class="container">

        <div class="row my-5 py-3 hero">
            <div class="col-md-8">
                <div>
                    <span class="fs-5">Mari Berlatih Sejarah Indonesia</span>
                    <p class="fs-3">Bersama <a href="{{ url('/') }}"><span
                                class="fw-bold fs-3">SejarahKita</span></a>.</p>
                    <br>
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
            </div>
            <div class="col-md-4">
                <img src="https://image.freepik.com/free-vector/cute-owl-cartoon-animal-sticker_1308-65973.jpg"
                    alt="Jumbotron" loading="lazy" class="jumbotron-img" />
            </div>
        </div>

        <div class="card my-5">
            <p><strong>SejarahKita-Web</strong> adalah Aplikasi Web tentang Game Edukasi berupa Anagram dengan topik mata
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

        <div id="carouselExampleDark" class="carousel carousel-dark slide mb-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="https://image.freepik.com/free-vector/cute-owl-cartoon-animal-sticker_1308-65973.jpg"
                        alt="Jumbotron" loading="lazy" class="d-block w-100" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://image.freepik.com/free-vector/cute-owl-cartoon-animal-sticker_1308-65973.jpg"
                        alt="Jumbotron" loading="lazy" class="d-block w-100" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://image.freepik.com/free-vector/cute-owl-cartoon-animal-sticker_1308-65973.jpg"
                        alt="Jumbotron" loading="lazy" class="d-block w-100" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://image.freepik.com/free-vector/cute-owl-cartoon-animal-sticker_1308-65973.jpg"
                        alt="Jumbotron" loading="lazy" class="d-block w-100" />
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fourth slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
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
    </div>

@endsection

@section('footer')
