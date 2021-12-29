@extends('layout.sejarahKita')

@section('title', 'Leaderboard')

@section('content')
    <div class="card illustration-card justify-content-around" data-aos="fade-up">
        <div class="text-center mt-3">
            <p class="display-6">{{ 'Mainkan Gamenya,' }}</p>
            <div class="d-inline">
                <span class="display-4 highlight">{{ 'Jadilah yang Terbaik' }}</span>
                <span class="display-4">&#128077;</span>
            </div>
        </div>
        <div class="d-flex mx-auto my-4 py-2">
            <img src="{{ url('assets/img/ill_leaderboard.svg') }}" alt="Game" class="content-img">
            <img src="{{ url('assets/img/ill_leaderboard.svg') }}" alt="Game" class="content-img">
        </div>
    </div>

    <ul class="nav nav-pills mt-5 mb-4 justify-content-center" id="pills-tab" role="tablist" data-aos="fade-up">
        <li class="nav-item" role="presentation">
            <button class="nav-link active px-5" id="pills-easy-tab" data-bs-toggle="pill" data-bs-target="#pills-easy"
                type="button" role="tab" aria-controls="pills-easy" aria-selected="true">Easy</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link px-5" id="pills-hard-tab" data-bs-toggle="pill" data-bs-target="#pills-hard"
                type="button" role="tab" aria-controls="pills-hard" aria-selected="false">Hard</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-easy" role="tabpanel" aria-labelledby="pills-easy-tab">
            <div class="card px-4 pb-4" data-aos="fade-up">
                <div class="card-header mb-3">
                    <h4 class="easy-text text-center user-select-none">Level Easy</h4>
                </div>
                <table class="leaderboard table py-3">
                    <thead class="text-black">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Username</th>
                            <th scope="col">Ranked Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $index = 1 @endphp
                        @foreach ($easy as $mudah)
                            <tr>
                                <td scope="row" class="fw-bold">{{ $index }}</td>
                                @php $index++ @endphp
                                <td>{{ $mudah->students->username }}</td>
                                <td>{{ $mudah->skor }}</td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-hard" role="tabpanel" aria-labelledby="pills-hard-tab">
            <div class="card px-4 pb-4" data-aos="fade-up">
                <div class="card-header mb-3">
                    <h4 class="hard-text text-center user-select-none">Level Hard</h4>
                </div>
                <table class="leaderboard table py-3">
                    <thead class="text-black">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Username</th>
                            <th scope="col">Ranked Point</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $index = 1 @endphp
                        @foreach ($hard as $sulit)
                            <tr>
                                <td class="fw-bold">{{ $index }}</td>
                                @php $index++ @endphp
                                <td>{{ $sulit->students->username }}</td>
                                <td>{{ $sulit->skor }}</td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
