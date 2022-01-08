@extends('layout.sejarahKita')

@section('title', 'Bank Soal - List of Questions')

@section('content')
    <nav class="bg-black rounded-3 mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb p-2">
            <li class="breadcrumb-item"><a href="{{ url('admin/profile') }}">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Bank Soal</strong></li>
        </ol>
    </nav>

    <div class="d-flex justify-content-end">
        <a href="{{ route('question.create') }}">
            <button class="btn btn-success shadow-sm mb-5">
                <i class="bi bi-plus-lg"></i>&emsp;{{ 'Create Question' }}
            </button>
        </a>
    </div>

    <table class="dataTables table py-3">
        <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">Level</th>
                <th scope="col">Kalimat Pertanyaan</th>
                <th scope="col">Kunci Jawaban</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($questions as $question)
                <tr>
                    <td scope="row" class="fw-bold text-center">
                        @if ($question->pertanyaan_path_gambar == '-' || $question->pertanyaan_path_gambar == null)
                            <span class="text-white">{{ $index }}</span>
                        @else
                            <span class="badge bg-primary fs-6">{{ $index }}</span>
                        @endif
                    </td>
                    @php $index++ @endphp
                    <td>
                        @if ($question->levels->jenis_level == 'Casual')
                            <strong class="badge casual fs-6">{{ $question->levels->jenis_level }}</strong>
                        @elseif ($question->levels->jenis_level == 'Easy')
                            <strong class="badge easy-bg fs-6">{{ $question->levels->jenis_level }}</strong>
                        @else
                            <strong class="badge hard-bg fs-6">{{ $question->levels->jenis_level }}</strong>
                        @endif
                    </td>
                    <td><span class="truncate">{{ $question->pertanyaan_kalimat }}</span></td>
                    <td>{{ $question->kunci_jawaban }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('question.show', $question->id_question) }}">
                                <button class="btn btn-info me-1">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </button>
                            </a>
                            <a href="{{ route('question.edit', $question->id_question) }}">
                                <button class="btn btn-outline-warning">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </a>
                            <form action="{{ route('question.destroy', $question->id_question) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete"
                                    onclick="return confirm('Are you sure want to delete the data?\nThis action cannot be undone!');">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
