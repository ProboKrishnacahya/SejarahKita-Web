@extends('layout.sejarahKita')

@section('title', 'Bank Soal - Question Details')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin/profile') }}">Profile</a></li>
            <li class="breadcrumb-item"><a href="{{ url('admin/profile/question') }}">Bank Soal</a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Detail Soal</strong></li>
        </ol>
    </nav>

    <div class="card illustration-card">
        <div class="card-header text-center fw-bold fs-5 pb-3">
            <i class="bi bi-tag"></i>&emsp;{{ $question->levels->jenis_level }}
        </div>
        <div class="card-body mb-3 pb-1">
            <p>
                <i class="bi bi-patch-question"></i>&emsp;{{ $question->pertanyaan_kalimat }}
            </p>
            <strong>
                <i class="bi bi-bookmark-check"></i>&emsp;{{ $question->kunci_jawaban }}
            </strong>
        </div>
    </div>
@endsection
