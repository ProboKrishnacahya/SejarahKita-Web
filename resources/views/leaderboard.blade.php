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

    <div class="card my-5 px-4 pb-4" data-aos="fade-up">
        <div class="card-header d-flex align-items-center mb-3">
            <h4 class="easy-text me-auto user-select-none">Level Easy</h4>
            <div class="card-wrap easy-bg rounded-3 mb-2 px-3 pt-2">
                <img src="{{ url('assets/img/fg_easy.png') }}" alt="" class="rankedPointTerkini-bg">
                <div class="rankedPointTerkini-content">
                    <h3>{{ $user->getEasyRankedPoint() }} RP</h3>
                </div>
            </div>
        </div>
        <table class="dataTables table py-3">
            <thead class="text-black">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Username</th>
                    <th scope="col">Ranked Point</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>jane_doe</td>
                    <td>5000 RP</td>
                </tr>
                <tr>
                    <td scope="row">2</td>
                    <td>lucky7</td>
                    <td>4775 RP</td>
                </tr>
                <tr>
                    <td scope="row">3</td>
                    <td>j.appleseed</td>
                    <td>4345 RP</td>
                </tr>
        </table>
    </div>
    
    <div class="card mt-5 px-4 pb-4" data-aos="fade-up">
        <div class="card-header d-flex align-items-center mb-3">
            <h4 class="hard-text me-auto user-select-none">Level Hard</h4>
            <div class="card-wrap hard-bg rounded-3 mb-2 px-3 pt-2">
                <img src="{{ url('assets/img/fg_hard.png') }}" alt="" class="rankedPointTerkini-bg">
                <div class="rankedPointTerkini-content">
                    <h3>{{ $user->getHardRankedPoint() }} RP</h3>
                </div>
            </div>
        </div>
        <table class="dataTables table py-3">
            <thead class="text-black">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Username</th>
                    <th scope="col">Ranked Point</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>jane_doe</td>
                    <td>5000 RP</td>
                </tr>
                <tr>
                    <td scope="row">2</td>
                    <td>lucky7</td>
                    <td>4775 RP</td>
                </tr>
                <tr>
                    <td scope="row">3</td>
                    <td>j.appleseed</td>
                    <td>4345 RP</td>
                </tr>
        </table>
    </div>
@endsection
