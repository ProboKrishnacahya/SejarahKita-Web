@extends('layout.sejarahKita')

@section('title', 'Playing History')

@section('content')
    <nav class="bg-black rounded-3 mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb p-2">
            <li class="breadcrumb-item"><a href="{{ url('admin/profile') }}">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Riwayat Bermain</strong></li>
        </ol>
    </nav>

    @if ($user->playinghistories->count())
        @foreach ($user->playinghistories as $ph)
            <div class="card illustration-card playingHistory mb-4">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-9 mb-3">
                                <div class="d-inline">
                                    <i class="bi bi-tag fs-4"></i>&emsp;<span
                                        class="fs-3 fw-bold">{{ $ph->levels->jenis_level }}</span>
                                    <br><br>
                                    <i class="bi bi-clock text-white-50"></i>&emsp;<span
                                        class="mt-3 text-white-50">{{ $ph->created_at }}</span>
                                </div>
                            </div>
                            <div class="col-md-3 align-self-center text-end mb-1">
                                <span class="badge nilai text-black fs-3">{{ $ph->skor }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    @else
        <div class="text-center">
            <img src="{{ url('assets/img/ill_empty.svg') }}" alt="No Data" class="content-img">
            <br>
            <span>Belum ada permainan yang diselesaikan. </span><strong>Ayo mulai bermain sekarang..</strong>
            <a href="{{ route('game.index') }}">
                <button class="btn btn-lg btn-primary w-50 mt-5">
                    <i class="bi bi-controller"></i>&emsp;{{ 'Mulai Bermain' }}
                </button>
            </a>
        </div>
    @endif

@endsection
