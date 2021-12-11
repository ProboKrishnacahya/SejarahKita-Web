@extends('layout.sejarahKita')

@section('title', 'Profile')

@section('content')
    <p><i class="bi bi-at"></i>&emsp;{{ Auth::user()->username }}</p>
    <p><i class="bi bi-chat-text"></i>&emsp;{{ Auth::user()->name }}</p>
    <p><i class="bi bi-envelope"></i>&emsp;{{ Auth::user()->email }}</p>
    <p><i class="bi bi-building"></i>&emsp;{{ Auth::user()->school }}</p>
    <p><i class="bi bi-geo-alt"></i>&emsp;{{ Auth::user()->city }}</p>
    <p><i class="bi bi-calendar2-week"></i>&emsp;{{ Auth::user()->birthyear }}</p>
    <p class="btn btn-secondary registered">Register: {{ $createdAt }}</p>
    <br>
    <a href="{{ route('playing-history') }}">Riwayat Bermain</a>
    <h4>Easy Ranked Point: <span class="fs-1">{{ $user->getEasyRankedPoint() }}</span></h4>
    <h4>Hard Ranked Point: <span class="fs-1">{{ $user->getHardRankedPoint() }}</span></h4>
    <br>
    <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <button class="btn btn-danger">
        <i class="bi bi-box-arrow-right"></i>&emsp;{{ __('Logout') }}


        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </button>
</a>
@endsection

@section('footer')
