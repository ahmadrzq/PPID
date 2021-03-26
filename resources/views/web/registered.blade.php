@extends('web/layouts/master')
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="http://ppid.kemendagri.go.id">Home</a></li>
                <li><a href="#">Pendaftaran</a></li>
            </ul>
        </div>
    </div>

    <section class="content-blank blue-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <div class="card card-lg">
                        <h5 class="text-capitalize head-title">Pendaftaran Berhasil &amp; cek email Inbox/spam</h5>
                        <p class="head-sub-desc">Selamat Datang Ahmad Rizqi Isnain,
                            Anda telah terdaftar sebagai pengguna di PPID Kemendagri. Saat ini akun Anda belum aktif dan belum dapat digunakan untuk mengajukan permohonan informasi. Untuk dapat menggunakan akun sepenuhnya, Anda harus melakukan aktifasi dengan mengikuti panduan yang kami kirim ke email Anda<br><br>
                            Silakan periksa kotak masuk di email yang Anda daftarkan. Karena padatnya jalur lintas email yang dikirim dari server kemendagri, kami sarankan Anda memeriksa folder "junk" atau "spam" apabila tidak mendapati email di kotak masuk.<br><br><br>
                            Terimakasih,<br>
                            Tim Kementerian Dalam Negeri</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection