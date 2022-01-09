@extends('layout.sejarahKita')

@section('title', 'SejarahKita')

@section('content')
    <div class="row" data-aos="fade-up">
        <div class="col-sm-6 align-self-center">
            <div class="mb-5 pb-3">
                <span class="fs-3">Mari Berlatih <strong>Sejarah Indonesia</strong></span>
                <p class="fs-1">Bersama <a href="{{ url('/') }}"><span
                            class="fw-bold fs-1">SejarahKita</span></a></p>
                <p id="typewriting"></p>
            </div>
            <div class="btn-cta-home">
                <a href="{{ url('game') }}">
                    <button class="btn btn-lg btn-primary btn-cta-primary-home shadow-sm me-3">
                        <i class="bi bi-controller"></i>&emsp;{{ __('Mulai Permainan') }}
                    </button>
                </a>
                <a href="{{ url('leaderboard') }}">
                    <button class="btn btn-lg btn-outline-primary">
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
                <div class="d-flex">
                    <div class="bg-primary bg-gradient rounded-3 w-50 p-3 me-2">
                        <div class="text-center">
                            <i class="bi bi-check-circle fs-4"></i>
                        </div>
                        <br>
                        {{ 'Perjuangan Bangsa Indonesia dalam Menghadapi Ancaman Disintegrasi dari Ideologi, Kepentingan, dan Sistem Pemerintahan.' }}
                    </div>
                    <div class="bg-success bg-gradient rounded-3 w-50 p-3 ms-2">
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
        <div id="carouselExample" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active p-0"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"
                    class="p-0"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"
                    class="p-0"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4"
                    class="p-0"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4" aria-label="Slide 5"
                    class="p-0"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="5" aria-label="Slide 6"
                    class="p-0"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('assets/img/img_carousel_page1.png') }}" alt="Carousel" loading="lazy"
                        class="img-fluid mx-auto d-block" />
                </div>
                <div class="carousel-item">
                    <img src="{{ url('assets/img/img_carousel_page2.png') }}" alt="Carousel" loading="lazy"
                        class="img-fluid mx-auto d-block" />
                </div>
                <div class="carousel-item">
                    <img src="{{ url('assets/img/img_carousel_page3.png') }}" alt="Carousel" loading="lazy"
                        class="img-fluid mx-auto d-block" />
                </div>
                <div class="carousel-item">
                    <img src="{{ url('assets/img/img_carousel_page4.png') }}" alt="Carousel" loading="lazy"
                        class="img-fluid mx-auto d-block" />
                </div>
                <div class="carousel-item">
                    <img src="{{ url('assets/img/img_carousel_page5.png') }}" alt="Carousel" loading="lazy"
                        class="img-fluid mx-auto d-block" />
                </div>
                <div class="carousel-item">
                    <img src="{{ url('assets/img/img_carousel_page6.png') }}" alt="Carousel" loading="lazy"
                        class="img-fluid mx-auto d-block" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" data-bs-toggle="tooltip"
                    title="Previous"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true" data-bs-toggle="tooltip" title="Next"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="my-5" data-aos="fade-up">
        <p class="fw-bold fs-5 text-center">Tentang Pengembang</p>
        <br>
        <div class="row row-cols-1 row-cols-md-4 developer">
            <div class="col">
                <div class="card">
                    <img src="{{ url('assets/img/vanness_zhong_anthony.svg') }}" alt="Vanness Zhong Anthony"
                        loading="lazy" class="img-fluid mx-auto d-block p-2" />
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
                        {{-- <li>
                            <a href="https://github.com/vannessza" target="_blank" rel="noopener noreferrer">
                                <button class="btn btn-dark w-100">
                                    <i class="bi bi-github"></i>&emsp;{{ __('GitHub') }}
                                </button>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="{{ url('assets/img/nathanael_abel_arianto.svg') }}" alt="Nathanael Abel Arianto"
                        loading="lazy" class="img-fluid mx-auto d-block p-2" />
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
                        {{-- <li>
                            <a href="https://github.com/nathanaelabel/" target="_blank" rel="noopener noreferrer">
                                <button class="btn btn-dark w-100">
                                    <i class="bi bi-github"></i>&emsp;{{ __('GitHub') }}
                                </button>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="{{ url('assets/img/probo_krishnacahya.svg') }}" alt="Probo Krishnacahya" loading="lazy"
                        class="img-fluid mx-auto d-block p-2" />
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
                        {{-- <li>
                            <a href="https://github.com/cahyaa02/" target="_blank" rel="noopener noreferrer">
                                <button class="btn btn-dark w-100">
                                    <i class="bi bi-github"></i>&emsp;{{ __('GitHub') }}
                                </button>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="{{ url('assets/img/michael_chandra.svg') }}" alt="Michael Chandra" loading="lazy"
                        class="img-fluid mx-auto d-block p-2" />
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
                        {{-- <li>
                            <a href="https://github.com/michaellchandra/" target="_blank" rel="noopener noreferrer">
                                <button class="btn btn-dark w-100">
                                    <i class="bi bi-github"></i>&emsp;{{ __('GitHub') }}
                                </button>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

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

                    <li class="ms-3 mt-1">
                        <a href="http://line.me/ti/p/~@ucpeople" target="_blank" rel="noopener noreferrer"
                            data-bs-toggle="tooltip" title="LINE">
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
        </div>

        <i class="bi bi-arrow-up-circle-fill scrollToTopBtn fs-1 mt-5" onclick="topFunction()" id="myBtn"
            data-bs-toggle="tooltip" title="Scroll to Top Page"></i>

        {{-- JavaScript Library (TypewriterJS) --}}
        <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    @endsection
