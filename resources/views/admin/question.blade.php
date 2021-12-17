@extends('layout.sejarahKita')

@section('title', 'Bank Soal - Create Question')

@section('content')
    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('question.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create question</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Level</th>
                <th scope="col">Pertanyaan Kalimat</th>
                <th scope="col">Gambar</th>
                <th scope="col">Kunci Jawaban</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($questions as $question)
                <tr>
                    <th scope="row">{{ $index }}</th>
                    @php $index++ @endphp
                    <td>{{ $question['id_level'] }}</td>
                    <td>{{ $question['pertanyaan_kalimat'] }}</td>
                    <td>{{ $question['pertanyaan_path_gambar'] }}</td>
                    <td>{{ $question['kunci_jawaban'] }}</td>
                    <td class="text-center">
                    <form action="{{ route('question.destroy',$question->id_level) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('question.show', $question->id_level) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('question.edit', $question->id_level) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
