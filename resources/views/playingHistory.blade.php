@extends('layout.sejarahKita')

@section('title', 'Playing History')

@section('content')
    @php
    $level = ['-', 'Casual', 'Easy', 'Hard'];
    @endphp

    @foreach ($user->playinghistories as $ph)
        <div class="card illustration-card playingHistory mb-4">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-md-9 mb-3">
                            <div class="d-inline">
                                <i class="bi bi-tag fs-4"></i>&emsp;<span
                                    class="fs-3 fw-bold">{{ $level[$ph->id_level] }}</span>
                                <br><br>
                                <i class="bi bi-clock text-white-50"></i>&emsp;<span
                                    class="mt-3 text-white-50">{{ $ph->created_at }}</span>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-center text-end mb-1">
                            <span class="badge nilai text-black fs-3">{{ $ph->skor }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
