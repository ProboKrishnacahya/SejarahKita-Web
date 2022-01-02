@extends('layout.sejarahKita')

@section('title', 'Bank Soal - Create Question')

@section('content')
    <nav class="bg-black rounded-3 mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" data-aos="fade-up">
        <ol class="breadcrumb p-2">
            <li class="breadcrumb-item"><a href="{{ url('admin/profile') }}">Profile</a></li>
            <li class="breadcrumb-item"><a href="{{ url('admin/profile/question') }}">Bank Soal</a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Tambah Pertanyaan</strong></li>
        </ol>
    </nav>

    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="card">
                <form action="{{ route('question.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header text-center pb-3">
                        <h2>Tambah Pertanyaan</h2>
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
                                        checked>
                                    {{ 'Casual' }}
                                </div>
                                <div class="form-check mx-auto">
                                    <input class="form-check-input custom-radio" type="radio" value="2" name="id_level">
                                    {{ 'Easy' }}
                                </div>
                                <div class="form-check ms-auto">
                                    <input class="form-check-input custom-radio" type="radio" value="3" name="id_level">
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
                                placeholder="Masukkan Pertanyaan" required
                                onkeyup="countCharacters(this, 'characterLengthPertanyaan');"></textarea>
                            <small class="d-flex text-white-50 mt-2">
                                <div class="ms-auto">
                                    <span id="characterLengthPertanyaan"></span>
                                </div>
                            </small>
                        </div>
                        <div class="form-group">
                            <h5>
                                <label for="kunci_jawaban">
                                    <i class="bi bi-bookmark-check"></i>&emsp;{{ 'Jawaban' }}
                                </label>
                            </h5>
                            <input type="text" class="form-control" name="kunci_jawaban" placeholder="Masukkan Jawaban"
                                required onkeyup="countCharacters(this, 'characterLengthJawaban');">
                            <small class="d-flex text-white-50 mt-2">
                                <div class="ms-auto">
                                    <span id="characterLengthJawaban"></span>
                                </div>
                            </small>
                        </div>
                        <div class="form-group mt-4">
                            <h5>
                                <label for="pertanyaan_path_gambar" class="form-label">
                                    <i class="bi bi-upload"></i>&emsp;{{ 'Upload Gambar' }}
                                </label>
                            </h5>
                            <img id="output" class="question-img shadow-sm mb-3" />
                            <input class="form-control" type="file" id="imageInp" name="pertanyaan_path_gambar"
                                onchange="loadFile(event)">
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary shadow-sm mt-5">
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

    {{-- Tampilkan Preview Image & File Name nya setelah klik 'Pilih File' --}}
    <script src="{{ url('/assets/js/imagePreview.js') }}" type="text/javascript"></script>
@endsection
