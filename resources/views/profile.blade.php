@extends('layout.sejarahKita')

@section('title', 'Profile')

@section('content')
    <div class="container">
        <div class="row card justify-content-around">
            <div class="col">
                <div class="row">
                    <div class="col-sm-6 align-self-center">
                        <img src="{{ url('assets/img/ill_profile.svg') }}" alt="Profile"
                            class="profile mx-auto d-block mb-3 p-4">
                        <div class="badge bg-secondary fs-6 fw-normal d-block my-3 p-3">Register: {{ $createdAt }}</div>
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

    <h3 class="mt-5 mb-4"><i class="bi bi-star"></i>&emsp;{{ 'Ranked Point Terkini' }}</h3>
    <div class="card-wrap easy-bg easyProfile p-3">
        <img src="{{ url('assets/img/fg_easy.png') }}" alt="" class="rankedPointTerkini-bg">
        <div class="d-flex rankedPointTerkini-content">
            <div class="p-2">
                <span class="fs-1">Easy</span>
            </div>
            <div class="ms-auto p-2">
                <span class="fs-1 fw-bold">{{ $user->getEasyRankedPoint() }} RP</span>
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
                <span class="fs-1 fw-bold">{{ $user->getHardRankedPoint() }} RP</span>
            </div>
        </div>
    </div>

    <div class="row my-5 text-center">
        <div class="col">
            <div class="text-center">
                <div class="bg-primary bg-gradient rounded-3 p-3">
                    <div class="card-body">
                        <p>Pantau performa Anda. Tingkatkan untuk hasil yang lebih optimal.</p>
                        <br>
                        <a href="{{ route('playing-history') }}">
                            <button class="btn btn-warning w-50">
                                <i class="bi bi-journal-medical"></i>&emsp;{{ 'Riwayat Bermain' }}
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <button class="btn btn-danger px-3">
            <i class="bi bi-box-arrow-right"></i>&emsp;{{ __('Logout') }}

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </button>
    </a>
@endsection
