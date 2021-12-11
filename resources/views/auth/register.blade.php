@extends('layout.sejarahKita')

@section('title', 'Register')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7 me-auto">
            <div class="card">
                <div class="card-header fw-bold text-center mb-3 fs-5">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-5 col-form-label text-md-right">
                                <i class="bi bi-envelope"></i>&emsp;{{ __('Email') }}
                            </label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Masukkan Alamat Surel" required
                                    autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-5 col-form-label text-md-right">
                                <i class="bi bi-at"></i>&emsp;{{ __('Username') }}
                            </label>

                            <div class="col-md-7">
                                <input id="username" type="text"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username') }}" placeholder="Masukkan Nama Pengguna" required
                                    autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-5 col-form-label text-md-right">
                                <i class="bi bi-chat-text"></i>&emsp;{{ __('Name') }}
                            </label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Lengkap" required
                                    autocomplete="name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="school" class="col-md-5 col-form-label text-md-right">
                                <i class="bi bi-building"></i>&emsp;{{ __('School') }}
                            </label>

                            <div class="col-md-7">
                                <input id="school" type="text" class="form-control @error('school') is-invalid @enderror"
                                    name="school" value="{{ old('school') }}" placeholder="Masukkan Nama Sekolah"
                                    required autocomplete="school">

                                @error('school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city" class="col-md-5 col-form-label text-md-right">
                                <i class="bi bi-geo-alt"></i>&emsp;{{ __('City') }}
                            </label>

                            <div class="col-md-7">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                                    name="city" value="{{ old('city') }}" placeholder="Masukkan Kota" required
                                    autocomplete="city">

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birthyear" class="col-md-5 col-form-label text-md-right">
                                <i class="bi bi-calendar2-week"></i>&emsp;{{ __('Birthyear') }}
                            </label>

                            <div class="col-md-7">
                                <input id="birthyear" type="number"
                                    class="form-control @error('birthyear') is-invalid @enderror" name="birthyear"
                                    value="{{ old('birthyear') }}" placeholder="Masukkan Tahun Kelahiran" required
                                    autocomplete="birthyear">

                                @error('birthyear')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-5 col-form-label text-md-right">
                                <i class="bi bi-lock"></i>&emsp;{{ __('Password') }}
                            </label>

                            <div class="col-md-7">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Masukkan Kata Sandi" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-5 col-form-label text-md-right">
                                <i class="bi bi-arrow-repeat"></i>&emsp;{{ __('Confirm Password') }}
                            </label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" placeholder="Masukkan Konfirmasi Kata Sandi" required
                                    autocomplete="new-password">
                            </div>
                        </div>
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary mt-5 mb-3">
                    <i class="bi bi-person-plus"></i>&emsp;{{ __('Register') }}
                </button>
                <p class="text-center">Sudah punya akun?
                    <strong>
                        <a href="{{ url('/login') }}">Login</a>
                    </strong>
                </p>
            </div>
        </div>
        </form>

        <div class="col-md-4 align-self-center d-none d-sm-block">
            <img src="{{ url('assets/img/ill_register.svg') }}" alt="Register" class="illustration-img" loading="lazy">
        </div>

    </div>
@endsection
