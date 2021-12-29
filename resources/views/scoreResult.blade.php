@extends('layout.sejarahKita')

@section('title', 'Score Result')

@section('content')
    <div class="text-center">
        <h4>{{ $message }}</h4>

        <div class="card illustration-card mt-5">
            <div class="card-header mb-1">
                <h2>{{ ucfirst($level) }} Match</h2>
            </div>
            <div class="card-body">
                <p class="fs-5 mb-4">Total Skor</p>
                <p class="fw-bold display-1 mb-0">{{ $skor }}</p>
            </div>
        </div>

        <div class="d-grid">
            <a href="{{ url('/game') }}">
                <button class="btn btn-primary w-50 mx-auto mt-5 mb-4">
                    <i class="bi bi-arrow-repeat"></i>&emsp;{{ 'Main Lagi' }}
                </button>
            </a>
            <a href="{{ url('/leaderboard') }}">
                <button class="btn btn-link w-50">
                    <i class="bi bi-bar-chart"></i>&emsp;{{ 'Lihat Peringkat' }}
                </button>
            </a>
        </div>
    </div>

    {{-- Menghilangkan tampilan Navigation Bar --}}
    <script src="{{ url('/assets/js') }}/hideNavigationBar.js"></script>
@endsection
