@extends('layout.sejarahKita')

@section('title', 'Profile - Admin')

@section('content')
    <div class="container">
        <div class="row card justify-content-around">
            <div class="col">
                <div class="row">
                    <div class="col-sm-6 align-self-center">
                        <img src="{{ url('assets/img/ill_profile.svg') }}" alt="Profile"
                            class="profile mx-auto d-block mt-1 mb-3 p-4">
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

    <div class="row my-5 text-center">
        <div class="col-sm-6">
            <div class="bg-primary bg-gradient rounded-3 p-3">
                <div class="card-body">
                    <p>Kumpulan Pertanyaan dan Kunci Jawaban.</p>
                    <br>
                    <a href="{{ url('admin/profile/question') }}">
                        <button class="btn btn-warning w-50">
                            <i class="bi bi-folder"></i>&emsp;{{ 'Bank Soal' }}
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="bg-success bg-gradient rounded-3 p-3">
                <div class="card-body">
                    <p>Pencatatan riwayat aktivitas di aplikasi.</p>
                    <br>
                    <a href="{{ url('admin/profile/log') }}">
                        <button class="btn btn-warning w-50">
                            <i class="bi bi-clock"></i>&emsp;{{ 'Log' }}
                        </button>
                    </a>
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
