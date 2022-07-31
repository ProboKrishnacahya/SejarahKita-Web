@extends('layout.sejarahKita')

@section('title', 'SejarahKita')

@section('content')
    <div class="row" data-aos="fade-up">
        <div class="col-sm-6 align-self-center">
            <div class="mb-5 pb-3">
                <span class="fs-3">Mari Berlatih <strong>Sejarah Indonesia</strong></span>
                <p class="fs-1">Bersama <a href="{{ url('/') }}"><span class="fw-bold fs-1">SejarahKita</span></a></p>
                <p id="typewriting"></p>
            </div>
            <div class="btn-cta-home">
                <a href="{{ url('game') }}">
                    <button class="btn btn-lg btn-primary btn-cta-primary-home shadow-sm me-3">
                        <i class="bi bi-controller"></i>&emsp;{{ __('Mulai Permainan') }}
                    </button>
                </a>
                <a href="{{ url('leaderboard') }}">
                    <button class="btn btn-lg btn-secondary">
                        <i class="bi bi-bar-chart"></i>&emsp;{{ __('Lihat Peringkat') }}
                    </button>
                </a>
            </div>
        </div>

        <div class="col-2"></div>

        <div class="col-sm-4 d-none d-sm-block">
            <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_1LAwTY.json" background="transparent"
                speed="0.75" style="width: 100%; height: auto;" class="mascot pe-3" loop autoplay></lottie-player>
        </div>
    </div>

    <div class="my-5" data-aos="fade-up">
        <div class="row">
            <div class="col-md-5 align-self-center d-none d-sm-block">
                <img src="{{ url('assets/img/ill_tentara.png') }}" alt="Tentara" loading="lazy" class="tentara-img" />
            </div>
            <div class="col-md-7 align-self-center">
                <p class="fs-4 mb-5"><strong>SejarahKita</strong> adalah Game Edukasi berupa Anagram dengan
                    topik mata pelajaran Sejarah Indonesia Kelas 12 (XII).
                </p>
                <div class="d-flex pilihan-bab gap-3">
                    <div class="bg-primary bg-gradient rounded-3 w-100 p-3">
                        <div class="text-center">
                            <i class="bi bi-check-circle fs-4"></i>
                        </div>
                        <br>
                        {{ 'Perjuangan Bangsa Indonesia dalam Menghadapi Ancaman Disintegrasi dari Ideologi, Kepentingan, dan Sistem Pemerintahan.' }}
                    </div>
                    <div class="bg-success bg-gradient rounded-3 w-100 p-3">
                        <div class="text-center">
                            <i class="bi bi-check-circle fs-4"></i>
                        </div>
                        <br>
                        {{ 'Peran dan Nilai-nilai Perjuangan Tokoh Nasional serta Tokoh Daerah dalam Mempertahankan Keutuhan Negara dan Bangsa Indonesia pada Masa 1945–1965.' }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5" data-aos="fade-up">
        <div class="row justify-content-around">
            <div class="col">
                <div class="text-center mt-3">
                    <h4>{{ 'Terdapat 2 Mode Permainan' }}</h4>
                </div>
                <div class="row justify-content-around text-center mt-5">
                    <h5>{{ 'Ranked Mode' }}</h5>
                    <p>{{ 'Perolehan skor diakumulasi ke Leaderboard masing-masing level' }}</p>

                    <div class="col-md-5 align-self-center rounded-3 easy-bg shadow-sm py-4 mt-3">
                        <div class="text-center">
                            <h4>{{ 'Level Easy' }}</h4>
                            <br>
                            <div class="d-flex justify-content-center">
                                <div class="row gap-3">
                                    <div class="col bg-dark rounded-3 px-4 py-3">
                                        <i class="bi bi-patch-question-fill text-info fs-1"></i>
                                        <br>
                                        <span><strong>20</strong> Nomor Soal</span>
                                    </div>
                                    <div class="col bg-dark rounded-3 px-4 py-3">
                                        <i class="bi bi-suit-heart-fill text-danger fs-1"></i>
                                        <br>
                                        <span><strong>5</strong> Nyawa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 align-self-center rounded-3 hard-bg shadow-sm py-4 mt-3">
                        <div class="text-center">
                            <h4>{{ 'Level Hard' }}</h4>
                            <br>
                            <div class="d-flex justify-content-center">
                                <div class="row gap-3">
                                    <div class="col bg-dark rounded-3 px-4 py-3">
                                        <i class="bi bi-patch-question-fill text-info fs-1"></i>
                                        <br>
                                        <span><strong>20</strong> Nomor Soal</span>
                                    </div>
                                    <div class="col bg-dark rounded-3 px-4 py-3">
                                        <i class="bi bi-suit-heart-fill text-danger fs-1"></i>
                                        <br>
                                        <span><strong>3</strong> Nyawa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-around">
                    <div class="col-md-5">
                        <div class="row justify-content-around text-center mt-5">
                            <h5>{{ 'Casual Mode' }}</h5>
                            <p>{{ 'Berlatih untuk siap bermain Ranked Mode' }}</p>

                            <div class="casual casual-text rounded-3 text-center shadow-sm mx-auto p-4">
                                <h4>{{ 'Casual' }}</h2>
                                    <br>
                                    <div class="d-flex justify-content-center">
                                        <div class="row gap-3 text-white">
                                            <div class="col illustration-card rounded-3 px-4 py-3">
                                                <i class="bi bi-patch-question-fill text-info fs-1"></i>
                                                <br>
                                                <span><strong>10</strong> Nomor Soal</span>
                                            </div>
                                            <div class="col illustration-card rounded-3 px-4 py-3">
                                                <i class="bi bi-suit-heart-fill text-danger fs-1"></i>
                                                <br>
                                                <span><strong>0</strong> Nyawa</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-aos="fade-up">
        <div id="carouselCaraBermain" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselCaraBermain" data-bs-slide-to="0" class="active p-0"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselCaraBermain" data-bs-slide-to="1" aria-label="Slide 2"
                    class="p-0"></button>
                <button type="button" data-bs-target="#carouselCaraBermain" data-bs-slide-to="2" aria-label="Slide 3"
                    class="p-0"></button>
                <button type="button" data-bs-target="#carouselCaraBermain" data-bs-slide-to="3" aria-label="Slide 4"
                    class="p-0"></button>
                <button type="button" data-bs-target="#carouselCaraBermain" data-bs-slide-to="4" aria-label="Slide 5"
                    class="p-0"></button>
                <button type="button" data-bs-target="#carouselCaraBermain" data-bs-slide-to="5" aria-label="Slide 6"
                    class="p-0"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('assets/img/img_carousel_page1.png') }}" alt="Carousel" loading="lazy"
                        class="img-fluid d-block mx-auto" />
                </div>
                <div class="carousel-item">
                    <img src="{{ url('assets/img/img_carousel_page2.png') }}" alt="Carousel" loading="lazy"
                        class="img-fluid d-block mx-auto" />
                </div>
                <div class="carousel-item">
                    <img src="{{ url('assets/img/img_carousel_page3.png') }}" alt="Carousel" loading="lazy"
                        class="img-fluid d-block mx-auto" />
                </div>
                <div class="carousel-item">
                    <img src="{{ url('assets/img/img_carousel_page4.png') }}" alt="Carousel" loading="lazy"
                        class="img-fluid d-block mx-auto" />
                </div>
                <div class="carousel-item">
                    <img src="{{ url('assets/img/img_carousel_page5.png') }}" alt="Carousel" loading="lazy"
                        class="img-fluid d-block mx-auto" />
                </div>
                <div class="carousel-item">
                    <img src="{{ url('assets/img/img_carousel_page6.png') }}" alt="Carousel" loading="lazy"
                        class="img-fluid d-block mx-auto" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaraBermain" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" data-bs-toggle="tooltip"
                    title="Previous"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselCaraBermain" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" data-bs-toggle="tooltip"
                    title="Next"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{-- <div class="my-5" data-aos="fade-up">
        <p class="fw-bold fs-5 text-center">Tentang Pengembang</p>
        <br>
        <div class="row row-cols-1 row-cols-md-4 developer">
            <div class="col">
                <div class="card">
                    <img src="{{ url('assets/img/vanness_zhong_anthony.svg') }}" alt="Vanness Zhong Anthony"
                        loading="lazy" class="img-fluid d-block mx-auto p-2" />
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
                                <button class="btn btn-primary w-100 mt-1 mb-2">
                                    <i class="bi bi-envelope"></i>&emsp;{{ __('Email') }}
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="{{ url('assets/img/nathanael_abel_arianto.svg') }}" alt="Nathanael Abel Arianto"
                        loading="lazy" class="img-fluid d-block mx-auto p-2" />
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
                                <button class="btn btn-primary w-100 mt-1 mb-2">
                                    <i class="bi bi-envelope"></i>&emsp;{{ __('Email') }}
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="{{ url('assets/img/probo_krishnacahya.svg') }}" alt="Probo Krishnacahya" loading="lazy"
                        class="img-fluid d-block mx-auto p-2" />
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
                                <button class="btn btn-primary w-100 mt-1 mb-2">
                                    <i class="bi bi-envelope"></i>&emsp;{{ __('Email') }}
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="{{ url('assets/img/michael_chandra.svg') }}" alt="Michael Chandra" loading="lazy"
                        class="img-fluid d-block mx-auto p-2" />
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
                                <button class="btn btn-primary w-100 mt-1 mb-2">
                                    <i class="bi bi-envelope"></i>&emsp;{{ __('Email') }}
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}

    <div data-aos="fade-up">
        <div class="card illustration-card mt-5" data-aos="fade-up">
            <div class="card-header text-center fw-bold fs-5 pb-3">{{ 'Tentang Universitas Ciputra' }}</div>
            <div class="card-body px-0 py-3">
                <div class="row">
                    <div class="col-md-5 align-self-center text-center">
                        <div>
                            <img src="{{ url('assets/img/universitas_ciputra.png') }}" alt="Logo Universitas Ciputra"
                                loading="lazy" class="content-img mb-3" />
                            <h2>Universitas Ciputra</h2>
                            <q>Creating World Class <strong>Entrepreneurs</strong></q>
                            <a href="https://www.uc.ac.id/" target="_blank" rel="noopener noreferrer">
                                <button class="btn btn-primary shadow-sm mt-5 px-3">
                                    <i class="bi bi-globe2"></i>&emsp;{{ __('Kunjungi Situs Web UC') }}
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 iframe-home">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3339.2300803124476!2d112.62941291424833!3d-7.285587194741468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fde455555555%3A0xd7e2611ae591f046!2sUniversitas%20Ciputra%20Surabaya!5e1!3m2!1sid!2sid!4v1639550236501!5m2!1sid!2sid"
                            width="1440" height="1080" style="border:0;" allowfullscreen="" loading="lazy"
                            class="shadow-sm"></iframe>
                    </div>
                </div>
            </div>

            <div class="mx-auto card-footer border-0 bg-transparent">
                <ul class="list-unstyled d-flex mb-1">
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
                            data-bs-toggle="tooltip" title="LINE">
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
        </div>

        <i class="bi bi-arrow-up-circle-fill scrollToTopBtn fs-1 mt-5" onclick="scrollToTopPage()" id="scrollButton"
            data-bs-toggle="tooltip" title="Scroll to Top Page"></i>

        {{-- JavaScript Library (TypewriterJS) --}}
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    @endsection
