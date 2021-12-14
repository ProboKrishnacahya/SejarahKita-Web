@extends('layout.sejarahKita')

@section('title', 'Game')

@section('content')
    <div class="container">
        <div class="row card illustration-card justify-content-around p-4">
            <div class="col">
                <div class="row">
                    <div class="col-sm-6 align-self-center">
                        <div class="row">
                            <p class="display-6">{{ 'Belajar Jadi' }}</p>
                            <div class="d-inline">
                                <span class="display-4 highlight">{{ 'Lebih Seru' }}</span>
                                <span class="display-4">{{ '👌' }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 align-self-center">
                        <img src="{{ url('assets/img/ill_game.svg') }}" alt="Game"
                            class="content-img mx-auto d-block">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p class="fs-2 my-5 text-center">{{ 'Play Now' }}</p>

    <div class="container">
        <div class="row card justify-content-around p-5">
            <div class="col">
                <h2>{{ 'Ranked Mode' }}</h2>
                <p class="lead">{{ 'Menangkan permainan dan dapatkan Ranked Point' }}</p>
                <div class="row justify-content-around text-center mt-5">
                    <div class="col-md-4 align-self-center rounded-3 easy p-5">
                        <div class="row text-center">
                            <h3>{{ 'Easy' }}</h3>
                            <img src="{{ url('assets/img/ill_nyawa5.svg') }}" alt="Nyawa Easy">
                            <button class="btn btn-warning fs-4">
                                <i class="bi bi-controller"></i>&emsp;{{ 'Main Sekarang' }}
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 align-self-center rounded-3 hard p-5">
                        <div class="row text-center">
                            <h3>{{ 'Hard' }}</h3>
                            <img src="{{ url('assets/img/ill_nyawa3.svg') }}" alt="Nyawa Hard">
                            <button class="btn btn-warning fs-4">
                                <i class="bi bi-controller"></i>&emsp;{{ 'Main Sekarang' }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row card casual justify-content-around mt-5 p-5">
            <div class="col">
                <div class="row">
                    <div class="col-sm-6 align-self-center">
                        <div class="row casual-text">
                            <h2>{{ 'Casual Mode' }}</h2>
                            <p class="lead">{{ 'Bermain dengan santai tanpa pengaruhi Ranked Point mu' }}</p>
                            <div class="container">
                                <a href="/playing-game">
                                <button class="btn btn-warning fs-4 mt-5 px-3">
                                    <i class="bi bi-controller"></i>&emsp;{{ 'Main Sekarang' }}
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 align-self-center">
                        <img src="{{ url('assets/img/ill_casual.svg') }}" alt="Casual"
                            class="content-img mx-auto d-block mb-3 p-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
