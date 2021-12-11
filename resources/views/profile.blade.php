@extends('layout.sejarahKita')

@section('title', 'Profile')

@section('content')
    <div>
        <p>{{ Auth::user()->username }}</p>
            <br>
        <p>Register: {{ Auth::user()->created_at }}</p>
            <br>
        <a href="/playing-history/{{ Auth::user()->id }}">Riwayat Bermain</a>

        <button>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
        </button>

        <form id="logout-form" action="{{ route('logout') }}" method="POST"
            class="d-none">
            @csrf
        </form>
    </div>

@endsection

@section('footer')
