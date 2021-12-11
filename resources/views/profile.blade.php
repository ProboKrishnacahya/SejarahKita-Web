@extends('layout.sejarahKita')

@section('title', 'Profile')

@section('content')
    <div class="container">
        <div class="row card align-self-center justify-content-around">
            <div class="col">
                <div class="row">
                    <div class="col-sm-6 align-self-center">
                        <img src="{{ url('assets/img/ill_profile.svg') }}" alt="" class="profile mx-auto d-block mb-3 p-4">
                        <div class="badge bg-secondary fs-6 fw-normal d-block my-3 p-3">Register: {{ $createdAt }}</div>
                    </div>
                    <div class="col-sm-6 align-self-center">
                        <div class="row">
                            <p><i class="bi bi-at"></i>&emsp;{{ Auth::user()->username }}</p>
                            <p><i class="bi bi-chat-text"></i>&emsp;{{ Auth::user()->name }}</p>
                            <p><i class="bi bi-envelope"></i>&emsp;{{ Auth::user()->email }}</p>
                            <p><i class="bi bi-building"></i>&emsp;{{ Auth::user()->school }}</p>
                            <p><i class="bi bi-geo-alt"></i>&emsp;{{ Auth::user()->city }}</p>
                            <p><i class="bi bi-calendar2-week"></i>&emsp;{{ Auth::user()->birthyear }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3 class="mt-5"><i class="bi bi-star"></i>&emsp;{{ 'Ranked Point Terkini' }}</h3>
    <div class="card-wrap easyProfile mt-4 p-3">
        <img src="{{ url('assets/img/fg_easy.png') }}" alt="" class="rankedPointTerkini-bg">
        <div class="rankedPointTerkini-content">
            <h4>Easy&emsp;<span class="fs-1 fw-bold">{{ $user->getEasyRankedPoint() }} RP</span></h4>
        </div>
    </div>
    <div class="card-wrap hardProfile mb-5 p-3">
        <img src="{{ url('assets/img/fg_hard.png') }}" alt="" class="rankedPointTerkini-bg">
        <div class="rankedPointTerkini-content">
            <h4>Hard&emsp;<span class="fs-1 fw-bold">{{ $user->getHardRankedPoint() }} RP</span></h4>
        </div>
    </div>

    <strong>
        <a href="{{ route('playing-history') }}">{{ 'Riwayat Bermain' }}</a>
    </strong>
    <br>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <button class="btn btn-danger mt-5 px-3">
            <i class="bi bi-box-arrow-right"></i>&emsp;{{ __('Logout') }}

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </button>
    </a>
@endsection

@section('footer')
