@extends('layout.hideNavigationBar')

@section('title', 'Play Game')

@section('content')
    <div class="d-flex">
        {{-- Exit Game's Modal Confirmation --}}
        <div class="me-auto">
            <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropExitGame">
                <i class="bi bi-box-arrow-left"></i>&emsp;{{ 'Keluar Game' }}
            </button>

            <div class="modal fade" id="staticBackdropExitGame" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Yakin ingin keluar game?</p>
                            <span>Seluruh perolehan skor mu <strong>tidak akan tersimpan</strong> jika keluar game.</span>
                        </div>
                        <div class="d-flex justify-content-between py-3">
                            <button type="button" class="btn btn-outline-warning ms-3" data-bs-dismiss="modal">
                                <i class="bi bi-controller"></i>&emsp;{{ 'Lanjutkan Game' }}
                            </button>
                            <a href="{{ route('game.index') }}">
                                <button type="button" class="btn btn-danger me-3">
                                    <i class="bi bi-box-arrow-left"></i>&emsp;{{ 'Keluar Game' }}
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tampilkan Button 'Lihat Jawaban' pada Casual Match --}}
        @if ($level == 'casual')
            <div class="ms-auto">
                <button class="btn btn-link" data-bs-toggle="modal" data-bs-target="#staticBackdropShowAnswer">
                    <i class="bi bi-lightbulb"></i>&emsp;{{ 'Lihat Jawaban' }}
                </button>

                <div class="modal fade" id="staticBackdropShowAnswer" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="d-inline">
                                    <span class="fs-5" id="staticBackdropLabel">&#128071;</span>
                                    <span class="fw-bold fs-5" id="staticBackdropLabel">{{ 'Ini Jawabannya' }}</span>
                                </div>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h1 class="text-uppercase mt-3 mb-5">
                                    {{ $soal->kunci_jawaban }}
                                </h1>
                            </div>
                            <button type="button" class="btn btn-warning mx-auto mb-4 w-50" data-bs-dismiss="modal">
                                <i class="bi bi-controller"></i>&emsp;{{ 'Lanjutkan Game' }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @else
            {{-- Tampilkan Nyawa pada Ranked Match dengan jumlah sesuai Level --}}
            @php
                $nyawa = $level == 'easy' ? 5 : 3;
                $wrong = Session::get('game')['wrongAnswer'];
            @endphp

            {{-- Kurangi jumlah Nyawa setiap kali salah menjawab --}}
            <div class="ms-auto" id="nyawa">
                <span class="fs-5">{{ 'Nyawa:' }}</span>&emsp;
                @for ($i = 0; $i < $nyawa - $wrong; $i++)
                    <i class="bi bi-heart-fill text-danger icon-font"></i>
                @endfor
            </div>
        @endif
    </div>

    <div class="mt-5 mb-3">
        @if ($soal->pertanyaan_path_gambar == '-')
            <span></span>
        @else
            <img src="{{ asset('storage/' . $soal->pertanyaan_path_gambar) }}"
                class="question-img mx-auto shadow-sm mx-auto d-block" />
        @endif
    </div>

    <div class="card illustration-card p-4">
        {{ $soal->pertanyaan_kalimat }}
    </div>

    <div class="text-center">
        <span class="anagram badge nilai text-black fw-bold fs-1 text-uppercase mt-3 mb-5">
            {{ str_shuffle($soal->kunci_jawaban) }}
        </span>
    </div>

    {{-- <div class="text-center">
        <span class="anagram badge nilai text-black fw-bold fs-1 text-uppercase mt-3 mb-5">
            {{$soal->kunci_jawaban }}
        </span>
    </div> --}}

    <form action="{{ route('checkAnswer') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $soal->id_question }}">
        <div class="form-group">
            <h5>
                <label for="input_jawaban">
                    <i class="bi bi-bookmark-check"></i>&emsp;{{ 'Masukkan Jawaban' }}
                </label>
            </h5>
            <input type="text" class="form-control text-uppercase" name="input_jawaban"
                placeholder="Ketikkan Jawaban Disini" required onkeyup="countCharacters(this, 'characterLengthGame');">
            <small class="d-flex text-white-50 mt-2">
                <div class="ms-auto">
                    <span id="characterLengthGame"></span>
                </div>
            </small>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary mt-5">
                <i class="bi bi-check-lg"></i>&emsp;{{ 'Jawab' }}
            </button>
        </div>
    </form>
@endsection
