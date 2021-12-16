@extends('layout.sejarahKita')

@section('title', 'Countdown Timer')

@section('content')
    {{-- Countdown Timer untuk Redirect ke /playing-game --}}
    <div class="text-center">
        <h2>Ranked Mode</h2>
        <br>
        <span class="fs-3">GET READY</span>
        <h1 class="display-1 mt-5 mb-3">
            <div id="start"></div>
        </h1>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100"
                aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
        </div>
    </div>

    {{-- Mengarahkan ke URL tujuan & mengatur waktu Countdown Timer --}}
    <script src="{{ url('/assets/js') }}/countdown.js"></script>
@endsection
