@extends('layout.sejarahKita')

@section('title', 'SejarahKita')

@section('content')
    <div class="row mb-5 pb-5">
        <div class="col-md-8 align-self-center">
            <div class="mb-5 pb-5">
                <span class="fs-3">Mari Berlatih <strong>Sejarah Indonesia</strong></span>
                <p class="fs-1">Bersama <a href="{{ url('/') }}"><span
                            class="fw-bold fs-1">SejarahKita</span></a></p>
                <p id="typewriting"></p>
            </div>
            <a href="{{ url('game') }}">
                <button class="btn btn-lg btn-primary px-3 me-3">
                    <i class="bi bi-controller"></i>&emsp;{{ __('Mulai Permainan') }}
                </button>
            </a>
            <a href="{{ url('leaderboard') }}">
                <button class="btn btn-lg btn-outline-primary px-3">
                    <i class="bi bi-bar-chart"></i>&emsp;{{ __('Lihat Peringkat') }}
                </button>
            </a>
        </div>
        <div class="col-md-4 d-none d-sm-block">
            <img src="https://static.vecteezy.com/system/resources/previews/002/406/486/non_2x/an-intelligent-and-proud-owl-with-a-graduation-cap-free-vector.jpg"
                alt="Jumbotron" loading="lazy" class="jumbotron-img" />
        </div>
    </div>

    <div class="card my-5">
        <div class="card-header text-center fw-bold fs-5 pb-3">{{ 'Tentang SejarahKita' }}</div>
        <div class="card-body">
            <p><strong>SejarahKita</strong> adalah Aplikasi tentang Game Edukasi berupa Anagram dengan topik mata
                pelajaran Sejarah Indonesia Kelas 12 yang berfokus pada bab-bab berikut:</p>
            <ul class="square">
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
    </div>

    <div id="carouselExample" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner bg-dark">
            <div class="card-header text-center fw-bold fs-5 py-4">{{ 'Cara Bermain' }}</div>
            <div class="carousel-item py-3 active">
                <img src="{{ url('assets/img/logo.png') }}" alt="Carousel" loading="lazy"
                    class="img-fluid mx-auto d-block" />
                <div class="carousel-caption">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item py-3">
                <img src="{{ url('assets/img/logo.png') }}" alt="Carousel" loading="lazy"
                    class="img-fluid mx-auto d-block" />
                <div class="carousel-caption">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item py-3">
                <img src="{{ url('assets/img/logo.png') }}" alt="Carousel" loading="lazy"
                    class="img-fluid mx-auto d-block" />
                <div class="carousel-caption">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item py-3">
                <img src="{{ url('assets/img/logo.png') }}" alt="Carousel" loading="lazy"
                    class="img-fluid mx-auto d-block" />
                <div class="carousel-caption">
                    <h5>Fourth slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" data-bs-toggle="tooltip" title="Previous"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" data-bs-toggle="tooltip" title="Next"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="my-5">
        <p class="fw-bold fs-5 text-center">Tentang Pengembang</p>
        <br>
        <div class="row row-cols-1 row-cols-md-4">
            <div class="col">
                <div class="card illustration-card">
                    <img src="https://media-exp1.licdn.com/dms/image/C4E03AQF-u1y1m-rmxQ/profile-displayphoto-shrink_400_400/0/1632289194582?e=1645056000&v=beta&t=KLzww_viTRL6r4L1PuKI-A_OJ9T26hFRMgfW7dUckq8"
                        alt="Vanness Zhong Anthony" loading="lazy" class="img-fluid mx-auto d-block rounded-circle p-2" />
                    <strong class="text-center my-2">
                        <a href="https://www.linkedin.com/in/vanness-zhong-8aa102221/" target="_blank"
                            rel="noopener noreferrer">Vanness Zhong Anthony</a>
                    </strong>
                    <small class="text-center">
                        <i class="bi bi-geo-alt"></i>&emsp;Pekalongan
                    </small>
                    <hr>
                    <ul class="list-unstyled">
                        <li>
                            <a href="mailto:vanthony@student.ciputra.ac.id">
                                <button class="btn btn-danger w-100 mt-1 mb-2">
                                    <i class="bi bi-envelope"></i>&emsp;{{ __('Email') }}
                                </button>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/vannessza" target="_blank" rel="noopener noreferrer">
                                <button class="btn btn-dark w-100">
                                    <i class="bi bi-github"></i>&emsp;{{ __('GitHub') }}
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="card illustration-card">
                    <img src="https://media-exp1.licdn.com/dms/image/C4E03AQEvAhmlXXmPPg/profile-displayphoto-shrink_400_400/0/1631694992395?e=1645056000&v=beta&t=f5ZHRs3raI1L5gye5ohgO7RSRAIhhHgp-nWSrdQHQug"
                        alt="Nathanael Abel Arianto" loading="lazy" class="img-fluid mx-auto d-block rounded-circle p-2" />
                    <strong class="text-center my-2">
                        <a href="https://www.linkedin.com/in/nathanael-abel-arianto-61aa73211/" target="_blank"
                            rel="noopener noreferrer">Nathanael Abel Arianto</a>
                    </strong>
                    <small class="text-center">
                        <i class="bi bi-geo-alt"></i>&emsp;Makassar
                    </small>
                    <hr>
                    <ul class="list-unstyled">
                        <li>
                            <a href="mailto:narianto@student.ciputra.ac.id">
                                <button class="btn btn-danger w-100 mt-1 mb-2">
                                    <i class="bi bi-envelope"></i>&emsp;{{ __('Email') }}
                                </button>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/nathanaelabel/" target="_blank" rel="noopener noreferrer">
                                <button class="btn btn-dark w-100">
                                    <i class="bi bi-github"></i>&emsp;{{ __('GitHub') }}
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="card illustration-card">
                    <img src="https://d33wubrfki0l68.cloudfront.net/13c862a9a09c29bfded6d7423940df84997e1d74/56952/assets/img/pk.png"
                        alt="Probo Krishnacahya" loading="lazy" class="img-fluid mx-auto d-block p-2" />
                    <strong class="text-center my-2">
                        <a href="https://www.linkedin.com/in/probo-krishnacahya/" target="_blank"
                            rel="noopener noreferrer">Probo Krishnacahya</a>
                    </strong>
                    <small class="text-center">
                        <i class="bi bi-geo-alt"></i>&emsp;Surabaya
                    </small>
                    <hr>
                    <ul class="list-unstyled">
                        <li>
                            <a href="mailto:pkrishnacahya@student.ciputra.ac.id">
                                <button class="btn btn-danger w-100 mt-1 mb-2">
                                    <i class="bi bi-envelope"></i>&emsp;{{ __('Email') }}
                                </button>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/cahyaa02/" target="_blank" rel="noopener noreferrer">
                                <button class="btn btn-dark w-100">
                                    <i class="bi bi-github"></i>&emsp;{{ __('GitHub') }}
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="card illustration-card">
                    <img src="https://media-exp1.licdn.com/dms/image/C4E03AQE-Y9V0uVIyGQ/profile-displayphoto-shrink_400_400/0/1632552544258?e=1645056000&v=beta&t=ets_CSGRnaHxLoAahcgUyqc1mUBTXqOAjgPtCeagZ18"
                        alt="Michael Chandra" loading="lazy" class="img-fluid mx-auto d-block rounded-circle p-2" />
                    <strong class="text-center my-2">
                        <a href="https://www.linkedin.com/in/michael-chandra-330/" target="_blank"
                            rel="noopener noreferrer">Michael Chandra</a>
                    </strong>
                    <small class="text-center">
                        <i class="bi bi-geo-alt"></i>&emsp;Makassar
                    </small>
                    <hr>
                    <ul class="list-unstyled">
                        <li>
                            <a href="mailto:mchandra05@student.ciputra.ac.id">
                                <button class="btn btn-danger w-100 mt-1 mb-2">
                                    <i class="bi bi-envelope"></i>&emsp;{{ __('Email') }}
                                </button>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/michaellchandra/" target="_blank" rel="noopener noreferrer">
                                <button class="btn btn-dark w-100">
                                    <i class="bi bi-github"></i>&emsp;{{ __('GitHub') }}
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <p class="fw-bold fs-5 text-center">Tentang Universitas Ciputra</p>
    <br>
    <div class="row">
        <div class="col-md-5">
            <div>
                <h2>Universitas Ciputra</h2>
                <q>Creating World Class <strong>Entrepreneurs</strong></q>
                <br><br>
                <address>
                    <a href="https://goo.gl/maps/kcKtWyQcjksTkcy18" target="_blank" rel="noopener noreferrer">
                        <i
                            class="bi bi-compass"></i>&emsp;{{ 'Citraland CBD Boulevard, Made, Kec. Sambikerep, Surabaya, Jawa Timur, 60219.' }}
                    </a>
                </address>
                <a href="https://www.uc.ac.id/" target="_blank" rel="noopener noreferrer">
                    <button class="btn btn-primary mt-5 px-3">
                        <i class="bi bi-globe2"></i>&emsp;{{ __('Kunjungi Situs Web UC') }}
                    </button>
                </a>
            </div>
        </div>
        <div class="col-md-7">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3339.2300803124476!2d112.62941291424833!3d-7.285587194741468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fde455555555%3A0xd7e2611ae591f046!2sUniversitas%20Ciputra%20Surabaya!5e1!3m2!1sid!2sid!4v1639550236501!5m2!1sid!2sid"
                width="1440" height="1080" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <i class="bi bi-arrow-up-circle-fill scrollToTopBtn fs-1" data-bs-toggle="tooltip" title="Scroll to Top Page"></i>

    {{-- JS Library (TypewriterJS) --}}
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
@endsection
