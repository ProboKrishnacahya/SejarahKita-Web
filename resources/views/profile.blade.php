@extends('layout.sejarahKita')

@section('title', 'Profile')

@section('content')
    <div class="mb-1" data-aos="fade-up">
        <p class="fs-4">Halo, <span class="fw-bold fs-4">{{ Auth::user()->name }}</span>&ensp;&#128075;</p>
    </div>

    <div class="container" data-aos="fade-up">
        <div class="row card justify-content-around">
            <div class="col">
                <div class="row">
                    <div class="col-sm-6 align-self-center">
                        <img src="{{ url('assets/img/ill_profile.svg') }}" alt="Profile"
                            class="profile d-block mx-auto mb-3 p-4">
                        <div class="badge bg-dark border border-2 border-info rounded-3 fs-6 fw-normal d-block my-3 p-3">
                            Register: {{ $createdAt }}</div>
                    </div>
                    <div class="col-sm-6 align-self-center">
                        <div class="row">
                            <p><i class="bi bi-at"></i>&emsp;{{ $user->username }}</p>
                            <p><i class="bi bi-chat-text"></i>&emsp;{{ $user->name }}</p>
                            <p><i class="bi bi-envelope"></i>&emsp;{{ $user->email }}</p>
                            <p><i class="bi bi-building"></i>&emsp;{{ $user->school }}</p>
                            <p><i class="bi bi-geo-alt"></i>&emsp;{{ $user->city }}</p>
                            <p><i class="bi bi-calendar2-week"></i>&emsp;{{ $user->birthyear }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-aos="fade-up">
        <h3 class="mt-5 mb-4"><i class="bi bi-star"></i>&emsp;{{ 'Ranked Point Terkini' }}</h3>
        <div class="card-wrap easy-bg easyProfile p-3">
            <img src="{{ url('assets/img/fg_easy.png') }}" alt="" class="rankedPointTerkini-bg">
            <div class="d-flex rankedPointTerkini-content">
                <div class="p-2">
                    <span class="fs-1">Easy</span>
                </div>
                <div class="ms-auto p-2">
                    <span class="fs-1 fw-bold">{{ $user->getEasyRankedPoint() . ' RP' }}</span>
                </div>
            </div>
        </div>
        <div class="card-wrap hard-bg hardProfile p-3">
            <img src="{{ url('assets/img/fg_hard.png') }}" alt="" class="rankedPointTerkini-bg">
            <div class="d-flex rankedPointTerkini-content">
                <div class="p-2">
                    <span class="fs-1">Hard</span>
                </div>
                <div class="ms-auto p-2">
                    <span class="fs-1 fw-bold">{{ $user->getHardRankedPoint() . ' RP' }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5 text-center" data-aos="fade-up">
        <div class="col">
            <div class="text-center">
                <div class="bg-primary bg-gradient rounded-3 p-3">
                    <div class="card-body">
                        <p>Pantau performamu. Tingkatkan untuk hasil yang lebih optimal.</p>
                        <br>
                        <a href="{{ route('playing-history') }}">
                            <button class="btn btn-primary w-50 btn-playinghistory shadow-sm">
                                <i class="bi bi-journal-medical"></i>&emsp;{{ 'Riwayat Bermain' }}
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-danger px-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <i class="bi bi-box-arrow-right"></i>&emsp;{{ __('Logout') }}
    </button>

    <div class="modal fade text-white" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Logout</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin ingin keluar dari akun?
                    <br>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <button type="button" class="btn btn-danger shadow-sm d-flex mx-auto mt-5">
                            <i class="bi bi-box-arrow-right"></i>&emsp;{{ 'Logout' }}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
