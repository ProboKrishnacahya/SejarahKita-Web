{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layout.sejarahKita')

@section('title', 'SejarahKita')

@section('content')

    <div class="container">

        <div class="row my-5 py-3">
            <div class="col-md-8">
                <div>
                    <span class="fs-5">Berlatih Sejarah Indonesia</span>
                    <p class="fs-3">Bersama <span class="fw-bold fs-3 text-warning">SejarahKita</span>.</p>
                    <br>
                    <a href="game"><button class="btn btn-lg btn-primary me-3">Play Games</button></a>
                </div>
            </div>
            <div class="col-md-4">
                <img src="https://image.freepik.com/free-vector/cute-owl-cartoon-animal-sticker_1308-65973.jpg"
                    alt="Jumbotron" loading="lazy" class="jumbotron-img" />
            </div>
        </div>

        <div class="card">
        <p><strong>SejarahKita-Web</strong> adalah Aplikasi Web tentang Game Edukasi berupa Anagram dengan topik mata
            pelajaran Sejarah Indonesia Kelas 12 yang berfokus pada bab-bab berikut:</p>
        <ul>
            <li>Perjuangan Bangsa Indonesia dalam Menghadapi Ancaman Disintegrasi dari Ideologi, Kepentingan, dan Sistem Pemerintahan.
            </li>
            <li>Peran dan Nilai-nilai Perjuangan Tokoh Nasional serta Tokoh Daerah dalam Mempertahankan Keutuhan Negara dan Bangsa Indonesia pada Masa 1945–1965.
            </li>
        </ul>

        <p>Terdapat 2 mode permainan, yaitu</p>
        <ol>
            <li>Casual</li>
            <li>Ranked (memiliki 2 pilihan level yang setiap perolehan Ranked Point nya diakumulasi pada masing-masing
                Leaderboard):</li>
            <ul>
                <li>Easy</li>
                <li>Hard</li>
            </ul>
        </ol>
    </div>
    </div>

@endsection

@section('footer')
