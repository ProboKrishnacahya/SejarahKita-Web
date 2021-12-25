@extends('layout.hideNavigationBar')

@section('title', 'Countdown Timer')

@section('content')
    {{-- Countdown Timer untuk Redirect ke /playing-game --}}
    <a href="{{ URL::previous() }}">
        <button class="btn btn-outline-danger my-5 w-100">
            <i class="bi bi-x-lg"></i>&emsp;Cancel
        </button>
    </a>

    <div class="text-center">
        <h2>{{ ucfirst($level) }} Match</h2>
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

    <script>
        var url = "/playing-game/"; // Redirect ke URL Tujuan
        var second = 3; // Timer dalam detik

        function countDown() {
            if (second > 0) {
                second--;
                var timer = second + 1;
                $('#start').html(timer);
                setTimeout("countDown()", 1000);
            } else {
                let level = '{{ $level }}';
                window.location.href = url + level;
            }
        }
        countDown()
    </script>
@endsection
