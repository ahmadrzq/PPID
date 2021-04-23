@extends('web/layouts/master')
@section('judul')
Login
@endsection
@section('content')

<div class="content-box content-page" style="padding-top: 110px !important;">

    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="http://ppid.kemendagri.go.id">Home</a></li>
                <li><a href="http://ppid.kemendagri.go.id/login">Login Member</a></li>
            </ul>
        </div>
    </div>

    <section class="content-blank blue-section">
        <div class="container">
            <div class="card card-lg">
                <h5 class="text-capitalize head-title">Sudah punya akun?</h5>
                <p class="head-sub-desc">Silahkan masukan email dan password Anda</p>
                <div class="row justify-content-between mt-3">
                    <div class="col-12 col-md-5 line-col line-far">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukan email Anda" aria-describedby="helpId" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="form-group has-icon">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label for="">Password</label>
                                    <span class="fs-14 font-500 mb-2">
                                        <a href="" class="text-warning">Lupa password?</a>
                                    </span>
                                </div>
                                <span toggle="#password-field" class="fa fa-eye form-control-icon text-default toggle-password"></span>
                                <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" value="" required autocomplete="current-password">
                            </div>

                            <div class="d-flex align-items-center justify-content-between">

                                <label class="customcheck">Ingat Saya
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="checkmark"></span>
                                </label>

                                <button class="btn btn-primary" type="submit">MASUK</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-12 col-md-6">
                        <h6 class="text-primary font-600 mb-3">Selamat datang di SIP PPID</h6>
                        <p>
                            Jika anda belum memiliki akun silahkan daftar terlebih dahulu agar anda dapat menggunakan semua
                            fitur-fitur yang ada di sini dengan baik dan bijak.
                        </p>
                        <a href="http://ppid.kemendagri.go.id/register" class="btn btn-outline-primary mt-3">Daftar Akun</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection