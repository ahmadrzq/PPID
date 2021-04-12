@extends('web/layouts/master')
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="{{url('beranda')}}">Home</a></li>
                <li><a href="#">Akun Saya</a></li>
            </ul>
        </div>
    </div>

    <section class="content-blank blue-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Verifikasi Alamat Email') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Link verifikasi telah dikirim ke alamat email anda.') }}
                            </div>
                            @endif

                            {{ __('Untuk menggunakan fitur-fitur di web ini, harap cek email anda untuk verifikasi link.') }}
                            {{ __('Jika tidak menerima email') }}, <a href="{{ route('verification.resend') }}">{{ __('Klik disini untuk mengirim email kembali') }}</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection