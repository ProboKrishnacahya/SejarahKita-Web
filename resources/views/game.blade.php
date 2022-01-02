@extends('layout.sejarahKita')

@section('title', 'Game')

@section('content')
    <div class="container" data-aos="fade-up">
        <div class="row card illustration-card justify-content-around px-5 py-4">
            <div class="col">
                <div class="row">
                    <div class="col-sm-6 align-self-center">
                        <div class="row">
                            <p class="display-6">{{ 'Belajar Jadi' }}</p>
                            <div class="d-inline">
                                <span class="display-4 highlight">{{ 'Lebih Seru' }}</span>
                                <span class="display-4">&#128076;</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 align-self-center">
                        <img src="{{ url('assets/img/ill_game.svg') }}" alt="Game" class="content-img mx-auto d-block">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5" data-aos="fade-up">
        <div class="row card justify-content-around">
            <div class="col">
                <div class="card-header text-center mt-3">
                    <h2>{{ 'Ranked Mode' }}</h2>
                    <p>{{ 'Menangkan permainan dan dapatkan Ranked Point' }}</p>
                </div>
                <div class="row justify-content-around text-center my-5">
                    <div class="col-md-5 align-self-center rounded-3 easy-bg shadow-sm py-5">
                        <div class="row text-center">
                            <h3>{{ 'Easy' }}</h3>
                            <img src="{{ url('assets/img/ill_nyawa5.svg') }}" alt="Nyawa Easy"
                                class="content-img mx-auto d-block">
                            <a href="{{ route('countdown', ['level'=>'easy']) }}">
                                <button class="btn btn-warning fs-4 shadow-sm">
                                    <i class="bi bi-controller"></i>&emsp;{{ 'Main Sekarang' }}
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 align-self-center rounded-3 hard-bg shadow-sm py-5">
                        <div class="row text-center">
                            <h3>{{ 'Hard' }}</h3>
                            <img src="{{ url('assets/img/ill_nyawa3.svg') }}" alt="Nyawa Hard"
                                class="content-img mx-auto d-block">
                            <a href="{{ route('countdown', ['level'=>'hard']) }}">
                                <button class="btn btn-warning fs-4 shadow-sm">
                                    <i class="bi bi-controller"></i>&emsp;{{ 'Main Sekarang' }}
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" data-aos="fade-up">
        <div class="row card casual shadow-sm justify-content-around p-5">
            <div class="col">
                <div class="row">
                    <div class="col-sm-6 align-self-center">
                        <div class="row casual-text">
                            <h2>{{ 'Casual Mode' }}</h2>
                            <p>{{ 'Bermain dengan santai tanpa pengaruhi Ranked Point mu' }}</p>
                            <div class="container">
                                <a href="{{ route('countdown', ['level'=>'casual']) }}">
                                    <button class="btn btn-warning fs-4 shadow-sm mt-5">
                                        <i class="bi bi-controller"></i>&emsp;{{ 'Main Sekarang' }}
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 align-self-center">
                        <img src="{{ url('assets/img/ill_casual.svg') }}" alt="Casual"
                            class="content-img mx-auto d-block mb-2 p-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
