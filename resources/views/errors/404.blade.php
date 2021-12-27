@extends('layout.hideNavigationBar')

@section('title', '404 Page Not Found')

@section('content')
    <div class="middle">
        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_pzt3dy36.json" background="transparent"
            speed="0.5" style="width: 50%; height: auto;" loop autoplay></lottie-player>

        <div class="mt-5 text-center">
            <span class="text-danger">
                <h5><i class="bi bi-exclamation-circle"></i>&emsp;404 Page Not Found</h5>
            </span>
            <br>
            <p class="fs-4">Oops.. Halaman Tidak Ditemukan</p>
            <br>
            <h3>Silakan coba cek kembali pengetikkan URL nya.</h3>
        </div>
    </div>
@endsection
