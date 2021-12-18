@extends('layout.sejarahkita')

@section('title', 'Login')

@section('content')
    <div class="row">
        <div class="col-md-7 me-auto">
            <div class="card">
                <div class="card-header text-center fw-bold fs-5 pb-3">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-5 col-form-label text-md-right"><i
                                    class="bi bi-envelope"></i>&emsp;{{ __('Email') }}</label>

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
                            <label for="password" class="col-md-5 col-form-label text-md-right"><i
                                    class="bi bi-lock"></i>&emsp;{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <div class="input-group">
                                    <input id="password" type="password"
                                        class="form-control showHide @error('password') is-invalid @enderror"
                                        name="password" placeholder="Masukkan Kata Sandi" required
                                        autocomplete="current-password"
                                        onkeyup="countCharacters(this, 'characterLengthPassword');">
                                    <span class="input-group-text border-2 border-light bg-transparent text-warning eye">
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                    </span>
                                </div>
                                <small class="d-flex mt-2">
                                    <div>
                                        <span>8 s.d. 20 Karakter</span>
                                    </div>
                                    <div class="ms-auto">
                                        <span id="characterLengthPassword"></span>
                                    </div>
                                </small>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 offset-md-5 my-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Ingat Saya') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <strong>{{ __('Lupa Password?') }}</strong>
                                </a>
                            @endif
                        </div>
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary mt-5 mb-3">
                    <i class="bi bi-box-arrow-in-right"></i>&emsp;{{ __('Login') }}
                </button>
                <p class="text-center">Belum punya akun?
                    <strong>
                        <a href="{{ route('register') }}">Register</a>
                    </strong>
                </p>
            </div>
        </div>
        </form>

        <div class="col-md-4 align-self-center d-none d-sm-block">
            <img src="{{ url('assets/img/ill_login.svg') }}" alt="Login" class="illustration-img" loading="lazy">
        </div>

    </div>
@endsection
