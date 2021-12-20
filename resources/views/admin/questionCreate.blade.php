@extends('layout.sejarahKita')

@section('title', 'Bank Soal - Create Question')

@section('content')
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/profile') }}">Profile</a></li>
                <li class="breadcrumb-item"><a href="{{ url('admin/profile/question') }}">Bank Soal</a></li>
                <li class="breadcrumb-item active" aria-current="page"><strong>Tambah Pertanyaan</strong></li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="card">
                <form action="{{ route('question.store') }}" method="post" enctype="multipart/form-data">
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
                                placeholder="Masukkan Pertanyaan" required></textarea>
                        </div>
                        <div class="form-group">
                            <h5>
                                <label for="kunci_jawaban">
                                    <i class="bi bi-bookmark-check"></i>&emsp;{{ 'Jawaban' }}
                                </label>
                            </h5>
                            <input type="text" class="form-control" name="kunci_jawaban" placeholder="Masukkan Jawaban"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="pertanyaan_path_gambar" class="form-label">Post Image</label>
                            <br>
                            <img id="output" class="mb-3 col-sm-5"/>
                            <input class="form-control" type="file" id="imageInp" name="pertanyaan_path_gambar" onchange="loadFile(event)" required>
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
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection
