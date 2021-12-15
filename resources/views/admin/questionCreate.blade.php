@extends('layout.sejarahKita')

@section('title', 'Bank Soal - Create Question')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <form action="{{ route('question.store') }}" method="post">
                    @csrf
                    <div class="card-header text-center pb-3">
                        <h2>Tambah Pertanyaan</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group mt-2">
                            <h5>
                                <label for="kategori">
                                    <i class="bi bi-tag"></i>&emsp;{{ 'Kategori Pertanyaan' }}
                                </label>
                            </h5>
                            <div class="d-flex">
                                <div class="form-check me-auto">
                                    <input class="form-check-input custom-radio" type="radio" value="Casual" name="kategori"
                                        checked>
                                    {{ 'Casual' }}
                                </div>
                                <div class="form-check mx-auto">
                                    <input class="form-check-input custom-radio" type="radio" value="Easy" name="kategori">
                                    {{ 'Easy' }}
                                </div>
                                <div class="form-check ms-auto">
                                    <input class="form-check-input custom-radio" type="radio" value="Easy" name="kategori">
                                    {{ 'Hard' }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group my-4">
                            <h5>
                                <label for="isi">
                                    <i class="bi bi-patch-question"></i>&emsp;{{ 'Isi Pertanyaan' }}
                                </label>
                            </h5>
                            <textarea name="isi" rows="5" class="form-control" placeholder="Masukkan Pertanyaan"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <h5>
                                <label for="jawaban">
                                    <i class="bi bi-bookmark-check"></i>&emsp;{{ 'Jawaban' }}
                                </label>
                            </h5>
                            <input type="text" class="form-control" name="jawaban" placeholder="Masukkan Jawaban"
                                required>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary mt-5 mb-4">
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
