@extends('layout.sejarahKita')

@section('title', 'Profile - Admin')

@section('content')
    <div class="container">
        <div class="row card justify-content-around">
            <div class="col">
                <div class="row">
                    <div class="col-sm-6 align-self-center">
                        <img src="{{ url('assets/img/ill_profile.svg') }}" alt="Profile"
                            class="profile mx-auto d-block mb-3 p-4">
                    </div>
                    <div class="col-sm-6 align-self-center">
                        <div class="row">
                            <p><i class="bi bi-at"></i>&emsp;{{ Auth::user()->username }}</p>
                            <p><i class="bi bi-chat-text"></i>&emsp;{{ Auth::user()->name }}</p>
                            <p><i class="bi bi-envelope"></i>&emsp;{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <strong>
            <a href="{{ route('questions') }}">{{ 'Bank Soal' }}</a>
        </strong>
        <strong>
            <a href="{{ route('log') }}">{{ 'Log' }}</a>
        </strong>
    </div>
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
