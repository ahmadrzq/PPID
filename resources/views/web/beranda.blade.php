@extends('web/layouts/master')
@section('content')
<div class="content-box content-home" style="margin-top: 50px !important;">

    <section class="content-blank blue-section pb-0">
        <div class="container">
            <div class="title-section mb-2 text-center">
                <h4 class="text-capitalize head-title">Berita</h4>
                <p class="head-sub-desc">Informasi Seputar Probolinggo</p>
            </div>
            <div class="card" style="padding: 2rem;">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="row">
                            @foreach ($berita as $result)
                            <div class="card col-md-4 mb-2">
                                <img class="" src="{{$result->image}}" alt="Card image cap" style="width: 249px; height:180px;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$result->judul}}</h5>
                                    <p class="card-text"><small class="text-muted">Diposting pada {{ Carbon\Carbon::parse($result->created_at)->format("d M Y") }}</small></p>
                                    <!-- <p class="card-text">{!! Str::limit($result->isi,200)  !!}</p> -->
                                    <a href="{{route('beranda.show', $result->id)}}">Read More</a>
                                </div>

                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="content-blank blue-section pb-0">
        <div class="container">
            <div class="title-section mb-2 text-center">
                <h4 class="text-capitalize head-title">Layanan Informasi Publik</h4>
                <p class="head-sub-desc">Klik pada icon untuk melihat detail</p>
            </div>
            <div class="card">
                <div class="row m-t-20">
                    <div class="col-md-4 mb-3">
                        <ul class="nav tabs-vertical flex-column" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="item active" id="daftar-informasi-publik-tab" data-toggle="tab" href="#DaftarInformasiPublik_Tabs" role="tab" aria-controls="DaftarInformasiPublik_Tabs" aria-selected="true">
                                    <div class="head-icon">
                                        <div class="tabs-icon">
                                            <!-- daftar informasi publik -->
                                            <i class="fas fa-book fa-2x"></i>
                                        </div>
                                    </div>
                                    <span>Daftar Informasi Publik</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="item" id="permohonan-informasi-tab" data-toggle="tab" href="#PermohonanInformasi_Tabs" role="tab" aria-controls="PermohonanInformasi_Tabs" aria-selected="false">
                                    <div class="head-icon">
                                        <div class="tabs-icon">
                                            <!-- permohonan informasi -->
                                            <i class="fas fa-envelope-open-text fa-2x"></i>
                                        </div>
                                    </div>
                                    <span>Permohonan Informasi</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="item" id="laporan-pelayanan-tab" data-toggle="tab" href="#LaporanPelayanan_Tabs" role="tab" aria-controls="LaporanPelayanan_Tabs" aria-selected="false">
                                    <div class="head-icon">
                                        <div class="tabs-icon">
                                            <!-- laporan pelayanan -->
                                            <i class="fas fa-user fa-2x"></i>
                                        </div>
                                    </div>
                                    <span>Laporan Pelayanan</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-8 mb-3">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="DaftarInformasiPublik_Tabs" role="tabpanel" aria-labelledby="daftar-informasi-publik-tab">
                                <form method="get" action="/dokumen">
                                    <h6 class="font-600 mb-3">Daftar Informasi Publik</h6>
                                    <p>
                                        Salah satu kewajiban badan publik yang dinyatakan dalam Undang-Undang No 14 Tahun 2008 adalah
                                        menyediakan Daftar Informasi Publik (DIP). DIP adalah catatan yang berisi keterangan sistematis tentang
                                        informasi publik yang berada dibawah penguasaan badan publik. Melalui aplikasi PPID Kemendagri yang
                                        digunakan ini, badan publik dapat mempublikasi informasi yang dikuasai yang selanjutnya tersusun sebagai
                                        DIP secara otomatis.
                                    </p>
                                    <button class="btn btn-primary">Kunjungi</button>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="PermohonanInformasi_Tabs" role="tabpanel" aria-labelledby="permohonan-informasi-tab">
                                <h6 class="font-600 mb-3">Permohonan Informasi</h6>
                                <p>
                                    Setiap orang berhak memperoleh informasi publik sesuai dengan ketentuan Undang-Undang No 14 Tahun 2008
                                    selain itu setiap permohonan informasi publik berhak mengajukan permintaan informasi publik. Melalui
                                    aplikasi PPID Kemendagri ini setiap orang dapat mengajukan permohonan informasi secara mudah. Selain itu
                                    badan publik dapat memberi respon permohonan informasi yang diajukan sesuai ketentuan undang-undang.
                                </p>
                                <a href="{{route('tambah-info')}}" class="btn btn-primary">Kunjungi</a>
                            </div>

                            <div class="tab-pane fade" id="LaporanPelayanan_Tabs" role="tabpanel" aria-labelledby="laporan-pelayanan-tab">
                                <h6 class="font-600 mb-3">Laporan Pelayanan</h6>
                                <p>
                                    Peraturan Komisi Informasi No. 1 Tahun 2008 tentang Standar Layanan Informasi Publik menyatakan bahwa
                                    badan publik memiliki kewajiban membuat dan mengumumkan laporan tentang layanan informasi publik.
                                    Melalui aplikasi PPID Kemendagri ini setiap aktifitas terkait pendokumentasian informasi publik serta
                                    pelayanan informasi publik akan tercatat dan secara otomatis dan dapat dihasilkan laporan pelayanan
                                    informasi publik.
                                </p>
                                <a href="http://ppid.kemendagri.go.id/permohonan/laporan" class="btn btn-primary">Kunjungi</a>
                            </div>

                            <div class="tab-pane fade" id="LayananKepuasanMasyarakat_Tabs" role="tabpanel" aria-labelledby="layanan-kepuasan-masyarakat-tab">
                                <h6 class="font-600 mb-3">Layanan Kepuasan Masyarakat</h6>
                                <p>
                                    Partisipasi masyarakat untuk ikut mengawasi, memberikan masukan dan saran untuk peningkatan kualitas pelayanan pengelolaan informasi sangat dibutuhkan. Untuk itu Kementerian Dalam Negeri dan Pemerintah Daerah mengharapkan kesediaan seluruh pemohon dan pengguna informasi publik untuk dapat mengisi survey layanan kepuasan masyarakat.
                                </p>
                                <a href="http://ppid.kemendagri.go.id/survey-kepuasan" class="btn btn-primary">Kunjungi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-blank blue-section pb-0">
        <div class="container">
            <div class="title-section mb-3 text-center">
                <h4 class="text-capitalize head-title">Informasi</h4>
                <p class="head-sub-desc">Klik judul informasi untuk melihat</p>
            </div>

            <div class="row m-t-70">
                <div class="col-md-6 mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-circle rgba-blue">
                            <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/newspaper.png" class="img-fluid" alt="" width="20">
                        </div>
                        <p class="text-default font-600 mb-0">Informasi Terbaru</p>
                    </div>

                    <div class="card">
                        <ul class="list-default">
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/500099161">
                                    <p class="title">Laporan Pengelolaan Informasi PPID Ub. Februari 2021</p>
                                    <p class="desc">Kabupaten Kotawaringin Barat - Dinas Kom...</p>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/400099160">
                                    <p class="title">Data Vaksinasi Covit-19 Kabupaten Ktw. Barat, 24 Maret 2021</p>
                                    <p class="desc">Kabupaten Kotawaringin Barat - Dinas Kom...</p>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/400099159">
                                    <p class="title">Data Covit-19 Kabupaten Ktw. Barat, 24 Maret 2021</p>
                                    <p class="desc">Kabupaten Kotawaringin Barat - Dinas Kom...</p>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/400099158">
                                    <p class="title">Update Data Kasus Covid-19 di Kabupaten Kapuas (24 Maret 2021)</p>
                                    <p class="desc">Kabupaten Kapuas - Dinas Komunikasi dan ...</p>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/500099157">
                                    <p class="title">PETA SUNGAI DAN DRAINASE KOTA CIREBON</p>
                                    <p class="desc">Kota Cirebon - Dinas Pekerjaan Umum dan ...</p>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300099156">
                                    <p class="title">DATA SEBARAN COVID-19 DI TAPTENG PER TANGGAL 23 MARET 2021</p>
                                    <p class="desc">Kabupaten Tapanuli Tengah - Dinas Komuni...</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-circle rgba-blue">
                            <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/contract.png" class="img-fluid" alt="" width="20">
                        </div>
                        <p class="text-default font-600 mb-0">Informasi Paling Banyak Dimohon</p>
                    </div>

                    <div class="card">
                        <ul class="list-default">
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300010492">
                                    <p class="title">SPIP DPPKBP3A Tahun 2017</p>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <p class="desc">Kabupaten Solok - Dinas Pengendalian Pen...</p>
                                        <span class="fs-13 text-warning">151722 kali</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300007625">
                                    <p class="title">BUKU PEDOMAN EPIDEMIOLOGI PENYAKIT EDISI REVISI 2011</p>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <p class="desc">Kabupaten Tanah Datar - DINAS KESEHATAN</p>
                                        <span class="fs-13 text-warning">118008 kali</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/500007446">
                                    <p class="title">Kabupaten Dalam Angka Tahun 2012</p>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <p class="desc">Kabupaten Penajam Paser Utara - Dinas Ko...</p>
                                        <span class="fs-13 text-warning">114361 kali</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/500059033">
                                    <p class="title">PENGUMUMAN HASIL SELEKSI ADMINISTRASI PENGADAAN CALON PEGAWAI NEGERI SIPIL (CPNS) DI LINGKUNGAN PEMERINTAH KABUPATEN SUKAMARA TAHUN 2019</p>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <p class="desc">Kabupaten Sukamara - Badan Kepegawaian d...</p>
                                        <span class="fs-13 text-warning">45636 kali</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/40010000093">
                                    <p class="title">TUPOKSI KEPALA SATUAN SUB BAGIAN UMUM &amp; KEPEGAWAIAN POLISI PAMONG PRAJA DAN PEMADAM KEBAKARAN BANTAENG</p>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <p class="desc">Sulawesi Selatan - Satuan Pol PP dan Pem...</p>
                                        <span class="fs-13 text-warning">35461 kali</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300009947">
                                    <p class="title">LAPORAN ADIWIYATA TH 2016</p>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <p class="desc">Kabupaten Solok - Dinas Lingkungan Hidup...</p>
                                        <span class="fs-13 text-warning">32062 kali</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-blank blue-section  miring-300 ">
        <div class="container">
            <div class="title-section mb-3 text-center">
                <h4 class="text-capitalize head-title">Statistik</h4>
                <p class="head-sub-desc">Informasi statistik dokumen</p>
            </div>

            <div class="card card-lg pd-auto m-t-70">
                <div class="row">                    
                    <div class="col-sm">
                        <h6 class="text-default font-600 mb-4 text-center">Statistik Seluruh Indonesia</h6>
                        <div class="row">
                            <div class="col-sm">
                                <div class="d-flex align-items-center m-b-30">
                                    <div class="head-icon">
                                        <div class="icon-circle cirlce-lg rgba-blue m-r-25">
                                            <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/inbox.png" class="img-fluid" alt="" width="25">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Jumlah Dokumen</p>
                                        <h5 class="font-700 mb-0">{{$dokumen->count()}}</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="d-flex align-items-center m-b-30">
                                    <div class="head-icon">
                                        <div class="icon-circle cirlce-lg rgba-blue m-r-25">
                                            <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/message.png" class="img-fluid" alt="" width="25">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Jumlah Permohonan Informasi</p>
                                        <h5 class="font-700 mb-0">{{$permohonan->count()}}</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="d-flex align-items-center m-b-30">
                                    <div class="head-icon">
                                        <div class="icon-circle cirlce-lg rgba-blue m-r-25">
                                            <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/avatar.png" class="img-fluid" alt="" width="25">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Jumlah User</p>
                                        <h5 class="font-700 mb-0">{{$users->count()}}</h5>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-blank blue-section" style="padding-top: 18rem;">
        <div class="container">
            
        </div>
    </section>



</div>
@endsection