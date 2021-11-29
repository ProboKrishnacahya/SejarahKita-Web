{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layout.sejarahKita')

@section('title', 'SejarahKita')

@section('pagetitle', 'Welcome to SejarahKita')

@section('content')

    <div class="container">

        <div class="row my-5 py-3">
            <div class="col-md-6">
                <div>
                    <h1>@yield('pagetitle')</h1>
                    <p class="text-white-50 mb-5">
                        Berlatih Sejarah Indonesia
                        <br>
                        Bersama <strong>SejarahKita</strong>.
                    </p>
                    <br>
                    <a href="game"><button class="btn btn-primary me-3">Game</button></a>
                    <a href="leaderboard"><button class="btn btn-outline-primary">Leaderboard</button></a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80"
                    alt="Jumbotron" loading="lazy" class="jumbotron-img" />
            </div>
        </div>

        {{-- <p>
            <strong>SejarahKita</strong> merupakan jasa penayangan film bioskop yang mulai berkiprah
            di industri hiburan sejak tahun 2021. <strong>SejarahKita</strong> berkomitmen untuk senantiasa menghadirkan
            pengalaman dan kepuasan menonton yang terbaik bagi masyarakat Indonesia. Selain menyajikan film-film hasil karya
            anak bangsa, <strong>SejarahKita</strong> juga menayangkan film-film
            berkelas dunia yang dibintangi artis-artis ternama dan diolah oleh para kru handal.
        </p> --}}
    </div>

@endsection

@section('footer')