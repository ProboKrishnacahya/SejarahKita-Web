@extends('layout.sejarahKita')

@section('title', 'Play Game')

@section('content')
    <div class="d-flex">
        <div class="me-auto">
            <button class="btn btn-outline-danger">
                <i class="bi bi-box-arrow-left"></i>&emsp;Keluar Game
            </button>
        </div>
        <div class="ms-auto">
            <i class="bi bi-heart-fill"></i>
        </div>
        {{-- <div class="ms-auto">
            <button class="btn btn-link">
                <i class="bi bi-lightbulb"></i>&emsp;{{ 'Lihat Jawaban' }}
            </button>
        </div> --}}
    </div>

    <div class="card illustration-card mt-5 p-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ut nemo obcaecati praesentium. Odio dolore
        eos, enim suscipit perferendis animi est id commodi, consequatur assumenda maiores, voluptate nesciunt
        consectetur nam! Eos, in officia sit sequi officiis aperiam minima saepe, consequatur enim, modi fugit ipsa
        sapiente? Unde repellat porro eligendi illum perspiciatis quos dolorem impedit nemo pariatur illo enim vitae
        tempore asperiores, soluta nisi iusto consequuntur dignissimos minima! Dolor rerum saepe aperiam quia modi
        dolores necessitatibus ipsam in similique eos quo iusto, illum, dicta quisquam animi nam doloribus incidunt
        enim, deleniti accusamus maiores nesciunt vitae ratione reprehenderit? Praesentium quaerat ratione veritatis!
    </div>

    <h1 class="anagram text-center mt-3 mb-5">ANAGRAM</h1>

    <div class="form-group">
        <h5>
            <label for="input_jawaban">
                <i class="bi bi-bookmark-check"></i>&emsp;{{ 'Masukkan Jawaban' }}
            </label>
        </h5>
        <input type="text" class="form-control" name="input_jawaban" placeholder="Masukkan Jawaban" required>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary mt-5 mb-4">
            <i class="bi bi-send"></i>&emsp;{{ 'Submit' }}
        </button>
    </div>
@endsection
