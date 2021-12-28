@extends('layout.sejarahKita')

@section('title', 'Log')

@section('content')
<nav class="bg-black rounded-3 mb-4" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb p-2">
        <li class="breadcrumb-item"><a href="{{ url('admin/profile') }}">Profile</a></li>
        <li class="breadcrumb-item active" aria-current="page"><strong>Log</strong></li>
    </ol>
</nav>

<table class="dataTables table py-3">
    <thead>
        <tr>
            <th scope="col" class="text-center">ID Log</th>
            <th scope="col">Table</th>
            <th scope="col">ID User</th>
            <th scope="col">Path</th>
            <th scope="col">Description</th>
            <th scope="col">IP Address</th>
            <th scope="col">Timestamp</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($logs as $log)
            <tr>
                <td scope="row" class="fw-bold text-center">{{ $log->id_log }}</td>
                <td>{{ $log->log_table }}</td>
                <td>{{ $log->id_user }}</td>
                <td>{{ $log->log_path }}</td>
                <td>{{ $log->log_desc }}</td>
                <td>{{ $log->log_ip }}</td>
                <td>{{ $log->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
