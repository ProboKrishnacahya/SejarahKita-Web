@extends('layout.sejarahKita')

@section('title', 'Riwayat Bermain')

@section('content')

    @php
    $level = ['Casual', 'Easy', 'Hard'];
    @endphp

    @foreach ($user->PlayingHistory as $ph)
    <div class="card mb-3">
        <strong>{{ $level[$ph->id_level] }} {{ $ph->skor }}</strong>
        <p>{{ $ph->created_at }}</p>
    </div>
    @endforeach

@endsection

@section('footer')
