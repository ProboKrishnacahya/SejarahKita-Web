@extends('layout.sejarahKita')

@section('title', 'Riwayat History')

@section('content')

    @foreach ($students -> $playinghistories  as $ph )
        <p>{{ $ph->id_level }}</p>
        <p>{{ $ph->skor }}</p>
        <p>{{ $ph->created_at }}</p>
    @endforeach

@endsection

@section('footer')
