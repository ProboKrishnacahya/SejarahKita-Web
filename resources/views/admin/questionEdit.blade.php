@extends('layout.sejarahKita')

@section('title', 'Bank Soal - Edit Question')

@section('content')
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/profile') }}">Profile</a></li>
                <li class="breadcrumb-item"><a href="{{ url('admin/profile/question') }}">Bank Soal</a></li>
                <li class="breadcrumb-item active" aria-current="page"><strong>Ubah Pertanyaan</strong></li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="card">
                <form action="{{ route('question.update', $questions->id_question) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="card-header text-center pb-3">
                        <h2>Ubah Pertanyaan</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group mt-2">
                            <h5>
                                <label for="id_level">
                                    <i class="bi bi-tag"></i>&emsp;{{ 'Kategori Pertanyaan' }}
                                </label>
                            </h5>
                            <div class="d-flex">
                                <div class="form-check me-auto">
                                    <input class="form-check-input custom-radio" type="radio" value="1" name="id_level"
                                        {{ $questions->id_level == 1 ? 'checked' : '' }}>
                                    {{ 'Casual' }}
                                </div>
                                <div class="form-check mx-auto">
                                    <input class="form-check-input custom-radio" type="radio" value="2" name="id_level"
                                        {{ $questions->id_level == 2 ? 'checked' : '' }}>
                                    {{ 'Easy' }}
                                </div>
                                <div class="form-check ms-auto">
                                    <input class="form-check-input custom-radio" type="radio" value="3" name="id_level"
                                        {{ $questions->id_level == 3 ? 'checked' : '' }}>
                                    {{ 'Hard' }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group my-4">
                            <h5>
                                <label for="pertanyaan_kalimat">
                                    <i class="bi bi-patch-question"></i>&emsp;{{ 'Isi Pertanyaan' }}
                                </label>
                            </h5>
                            <textarea name="pertanyaan_kalimat" rows="5" class="form-control"
                                placeholder="Masukkan Pertanyaan" required>{{ $questions->pertanyaan_kalimat }}</textarea>
                        </div>
                        <div class="form-group">
                            <h5>
                                <label for="kunci_jawaban">
                                    <i class="bi bi-bookmark-check"></i>&emsp;{{ 'Jawaban' }}
                                </label>
                            </h5>
                            <input type="text" class="form-control" value="{{ $questions->kunci_jawaban }}"
                                name="kunci_jawaban" placeholder="Masukkan Jawaban" required>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary mt-5">
            <i class="bi bi-send"></i>&emsp;{{ 'Submit' }}
        </button>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger mt-5 pt-3 justify-content-between">
            @foreach ($errors->all() as $error)<i
                    class="bi bi-exclamation-circle"></i>&emsp;{{ $error }}
            @endforeach
        </div>
    @endif
    </form>
@endsection
