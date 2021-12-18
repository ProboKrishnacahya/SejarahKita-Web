@extends('layout.sejarahKita')

@section('title', 'Bank Soal')

@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{ route('question.create') }}">
            <button class="btn btn-success mb-5">
                <i class="bi bi-plus-lg"></i>&emsp;Create Question
            </button>
        </a>
    </div>

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin/profile') }}">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Bank Soal</strong></li>
        </ol>
    </nav>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Level</th>
                <th scope="col">Kalimat Pertanyaan</th>
                <th scope="col">Gambar</th>
                <th scope="col">Kunci Jawaban</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($questions as $question)
                <tr>
                    <td scope="row" class="fw-bold text-center">{{ $index }}</td>
                    @php $index++ @endphp
                    <td>{{ $question->levels->jenis_level }}</td>
                    <td>{{ $question->pertanyaan_kalimat }}</td>
                    <td>{{ $question->pertanyaan_path_gambar }}</td>
                    <td>{{ $question->kunci_jawaban }}</td>
                </tr>
                <tr>
                <tr>
                    <td colspan="5">
                        <div class="d-flex justify-content-center">
                            <form action="{{ route('question.destroy', $question->id_question) }}" method="POST">
                                <a href="{{ route('question.show', $question->id_question) }}">
                                    <button class="btn btn-info me-3">
                                        <i class="bi bi-box-arrow-up-right"></i>&emsp;Show
                                    </button>
                                </a>
                                <a href="{{ route('question.edit', $question->id_question) }}">
                                    <button class="btn btn-outline-warning">
                                        <i class="bi bi-pencil"></i>&emsp;Edit
                                    </button>
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete"
                                    onclick="return confirm('Are you sure you want to delete the data?\nThis action cannot be undone!');">
                                    <i class="bi bi-trash"></i>&emsp;Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <i class="bi bi-arrow-up-circle-fill scrollToTopBtn fs-1" data-bs-toggle="tooltip" title="Scroll to Top Page"></i>
@endsection
