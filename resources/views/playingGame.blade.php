@extends('layout.sejarahKita')

@section('title', 'Play Game')

@section('content')
    {{-- Countdown Timer untuk Redirect ke /playing-game --}}
    <div class="text-center">
        <h2>Ranked Mode</h2>
        <span class="fs-3">GET READY</span>
        <h1>
            <div id="start"></div>
        </h1>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100"
            aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
    </div>
@endsection

@section('footer')
