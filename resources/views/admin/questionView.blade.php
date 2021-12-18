@extends('layout.sejarahKita')

@section('title', 'Bank Soal - Detail Question')

@section('content')
    <div class="card illustration-card">
        <div class="card-header text-center fw-bold fs-5 pb-3">
            {{ $question->levels->jenis_level }}
        </div>
        <div class="card-body pb-1">
        <p>
            <i class="bi bi-patch-question"></i>&emsp;{{ $question->pertanyaan_kalimat }}
        </p>
        <p>
            <i class="bi bi-bookmark-check"></i>&emsp;{{ $question->kunci_jawaban }}
        </p>
    </div>
    </div>
@endsection
