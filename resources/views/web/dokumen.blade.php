@extends('web/layouts/master')
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="http://ppid.kemendagri.go.id">Home</a></li>
                <li><a href="#">Dokumen</a></li>
            </ul>
        </div>
    </div>
    <section class="content-blank blue-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-4">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-circle rgba-blue">
                            <i class="fa fa-search text-primary"></i>
                        </div>
                        <p class="text-default font-600 mb-0">Pencarian</p>
                    </div>
                    <div class="card card-md mb-4">
                        <form method="get">

                            <div class="form-group">
                                <label for="">Kategori</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="1" selected="">Berkala</option>
                                    <option value="2">Serta Merta</option>
                                    <option value="3">Setiap Saat</option>
                                </select>
                            </div>
                            <input type="hidden" name="area" value="kemendagri">

                            <div class="form-group">
                                <label for="">Judul</label>
                                <input type="text" name="search" id="field-search" class="form-control" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="">Jenis</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="">Jenis</option>
                                    <option value="1">Profil Badan Publik</option>
                                    <option value="2">Program dan Kegiatan</option>
                                    <option value="3">Informasi Kinerja</option>
                                    <option value="4">Laporan Keuangan</option>
                                    <option value="5">Laporan dan prosedur akse...</option>
                                    <option value="6">Pengaduan dan Pelanggaran</option>
                                    <option value="7">Pengadaan barang dan jasa</option>
                                    <option value="8">Informasi Darurat</option>
                                    <option value="9">Hasil Penelitian</option>
                                    <option value="10">Regulasi</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Komponen</label>
                                <select name="opr" id="opr" class="form-control">
                                    <option value="">Komponen</option>
                                    <option value="9">PPID Kementerian Dalam Negeri</option>
                                    <option value="201">Ditjen Politik dan Pemerintahan Umum</option>
                                    <option value="678">Admin Provinsi Maluku Utara</option>
                                    <option value="1590">Pemerintah Kabupaten Nunukan</option>
                                    <option value="2295">Biro Hukum</option>
                                    <option value="2296">Biro Kepegawaian</option>
                                    <option value="2297">Badan Penelitian dan Pengembangan</option>
                                    <option value="2298">Badan Pengembangan Sumber Daya Manusia</option>
                                    <option value="2299">Badan Nasional Pengelola Perbatasan</option>
                                    <option value="2300">Ditjen Bina Administrasi Kewilayahan</option>
                                    <option value="2302">Ditjen Bina Keuangan Daerah</option>
                                    <option value="2303">Ditjen Bina Pembangunan Daerah</option>
                                    <option value="2304">Ditjen Bina Pemerintahan Desa</option>
                                    <option value="2305">Ditjen Kependudukan dan Pencatatan Sipil</option>
                                    <option value="2306">Ditjen Otonomi Daerah</option>
                                    <option value="2307">Inspektorat Jenderal</option>
                                    <option value="2308">Institut Pemerintahan Dalam Negeri</option>
                                    <option value="2619">Pusat Fasilitasi Kerjasama</option>
                                    <option value="2962">Biro Umum</option>
                                    <option value="2963">Biro Keuangan dan Aset</option>
                                    <option value="2965">Pusat Data dan Sistem Informasi</option>
                                    <option value="2966">Biro Organisasi</option>
                                    <option value="2967">Biro Perencanaan</option>
                                    <option value="2968">Inspektorat Jenderal</option>
                                    <option value="3875">Pemerintah Kabupaten Parigi Moutong</option>
                                    <option value="3879">Pemerintah Kabupaten Pasuruan</option>
                                    <option value="3916">Pemerintah Kabupaten Manggarai Timur</option>
                                    <option value="3942">Pemerintah Kabupaten Sinjai</option>
                                    <option value="3953">Admin Nusa Tenggara Timur</option>
                                    <option value="3954">Admin Nusa Tenggara Timur</option>
                                    <option value="4013">Pemerintah Kota Blitar</option>
                                    <option value="4061">Pemerintah KABUPATEN SUKAMARA</option>
                                    <option value="4084">Pemerintah Kabupaten Langkat</option>
                                    <option value="4090">Pemerintah Kabupaten Deli Serdang</option>
                                    <option value="4099">Pemerintah Kabupaten Manggarai Barat</option>
                                    <option value="4214">Pemerintah Provinsi Jambi</option>
                                    <option value="4284">Pemerintah Kota Ambon</option>
                                    <option value="4288">Pemerintah Kabupaten Tana Toraja</option>
                                    <option value="4296">Pemerintah Provinsi Lampung</option>
                                    <option value="4303">Pemerintah Kabupaten Boalemo</option>
                                    <option value="4304">Pemerintah Kabupaten Pinrang</option>
                                    <option value="4366">Pemerintah Kabupaten Bolaang Mongondow</option>
                                    <option value="4369">Pemerintah Kabupaten Kolaka Utara</option>
                                    <option value="4386">Pemerintah Kabupaten Timur Tengah Selatan</option>
                                    <option value="4394">Pemerintah Kota Palopo</option>
                                    <option value="4395">Pemerintah Kabupaten Enrakeng</option>
                                    <option value="4516">Admin Utama Provinsi NTT</option>
                                    <option value="4517">Admin Utama Provinsi NTT</option>
                                    <option value="4562">Pemerintah Kabupaten Belu</option>
                                    <option value="4592">Pemerintah Kabupaten Merangin</option>
                                    <option value="4619">Pemerintah Kabupaten Nias Utara</option>
                                    <option value="4654">Pemerintah Kabupaten Kupang</option>
                                    <option value="4688">Pemerintah Kabupaten Mandailing Natal</option>
                                    <option value="4701">Pemerintah Kabupaten Kepulauan Sula</option>
                                    <option value="4750">Pemerintah Kabupaten Lembata</option>
                                    <option value="4855">Pemerintah Kabupaten Bangka Barat</option>
                                    <option value="5125">Pemerintah Kota Padang Sidempuan</option>
                                    <option value="5140">Pemerintah Kabupaten Katingan</option>
                                    <option value="5241">Pemerintah Kabupaten Tanah Laut</option>
                                    <option value="5244">Pemerintah Kabupaten Seram Bagian Barat</option>
                                    <option value="5245">Pemerintah Provinsi Sumatera Utara</option>
                                    <option value="5329">Pemerintah Kabupaten Manggarai</option>
                                    <option value="5500">Pemerintah Kabupaten Toraja Utara</option>
                                    <option value="5516">Pemetintah Kota Palangka Raya</option>
                                    <option value="5569">Pemerintah Kabupaten Sabu RaiJua</option>
                                    <option value="5694">Pemerintah Provinsi Kaimantan Selatan</option>
                                    <option value="5697">Pemerintah Kabupaten Seram Bagian Timur</option>
                                    <option value="5756">Pemerintah Kabupaten Badung</option>
                                    <option value="5757">Pemerintah Kabupaten Penajam Paser Utara</option>
                                    <option value="5786">Pemerintah Kabupaten Pakpak Bharat</option>
                                    <option value="5806">Pemerintah Kabupaten Penajam Paser Utara</option>
                                    <option value="5807">Kabupaten Tanjung Jabung Barat</option>
                                    <option value="5832">Pemerintah Kabupaten Majene</option>
                                    <option value="5882">Pemerintah Kabupaten Nias Barat</option>
                                    <option value="5996">Pemerintah Kabupaten Bombana</option>
                                    <option value="5997">Pemerintah Kabupaten Lampung Selatan</option>
                                    <option value="5998">Pemerintah Kabupaten Maluku Barat Daya</option>
                                    <option value="6011">Pemerintah kabupaten deli serdang</option>
                                    <option value="6139">Pemerintah Kabupaten Kutai Barat</option>
                                    <option value="6140">Pemkab Kutai Barat</option>
                                    <option value="6157">Pemerintah Kabupaten Boalemo</option>
                                    <option value="6307">Pemerintah Kabupaten Bone</option>
                                    <option value="6336">Pemerintah Kabupaten OKI</option>
                                    <option value="6340">Pemerintah Kota Ternate</option>
                                    <option value="6392">Pemerintah Kabupaten Sungai Penuh</option>
                                    <option value="6762">Pemerintah Kabupaten Maros</option>
                                    <option value="6937">Pemerintah Kabupaten Mappi</option>
                                    <option value="6938">Pemerintah Kabupaten Bungo</option>
                                    <option value="6942">Pemerintah Kabupaten Muaro Jambi</option>
                                    <option value="6960">Pemerintah Kabupaten Kolaka</option>
                                    <option value="6962">Pemerintah Kabupaten Pasangkayu</option>
                                    <option value="7015">Pemerintah Kabupaten Kerinci</option>
                                    <option value="7072">Pemerintah Kota Kendari</option>
                                    <option value="7086">Pemerintah Kabupaten Bombana</option>
                                    <option value="7114">Anita.S.pd</option>
                                    <option value="7181">Admin Utama Hulu Sungai Utara</option>
                                    <option value="7406">Admin Utama Kabupaten Lahat</option>
                                    <option value="7416">admin</option>
                                    <option value="7418">admin kabupaten lahat</option>
                                    <option value="7419">test kabupaten lahat</option>
                                    <option value="7423">Test</option>
                                    <option value="7441">admin utama kota tomohon</option>
                                    <option value="7475">Pemerintah Kabupaten Nagekeo</option>
                                    <option value="7476">Dinas PU</option>
                                    <option value="7522">Admin Kabupaten Fakfak</option>
                                    <option value="7557">admin utama kabupaten konawe</option>
                                    <option value="7561">admin kabupaten konawe</option>
                                    <option value="7923">Dinas Kesehatan</option>
                                    <option value="7924">DInkes</option>
                                    <option value="8333">Amin Utama PPID Kab. Tojo Una-Una</option>
                                    <option value="8363">Admin Prov Sulbar</option>
                                    <option value="8395">admin kabupaten bombana</option>
                                </select>
                            </div>


                            <hr>

                            <button class="btn btn-primary btn-md w-100 mb-2" type="submit">Cari Dokumen</button>
                            <button class="btn btn-secondary btn-md w-100" id="btn-reset" type="button">Reset</button>
                        </form>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-circle rgba-blue">
                            <i class="fa fa-bar-chart text-primary" aria-hidden="true"></i>
                        </div>
                        <p class="text-default font-600 mb-0">Statistik</p>
                    </div>

                    <div class="card mb-4">
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                            <p class="text-default font-600 mb-0">Berkala</p>
                            <p class="mb-0">52579</p>
                        </div>

                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                            <p class="text-default font-600 mb-0">Serta Merta</p>
                            <p class="mb-0">8533</p>
                        </div>

                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                            <p class="text-default font-600 mb-0">Setiap Saat</p>
                            <p class="mb-0">26001</p>
                        </div>

                        <hr>

                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="text-primary font-600 mb-0">Total Informasi Publik</p>
                            <p class="mb-0">87113</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8 mb-4">
                    <div class="card card-md">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="mb-2">
                                <h6 class="text-capitalize head-title">Daftar Informasi Publik</h6>
                                <p class="head-sub-desc mb-0">Daftar dokumen informasi</p>
                            </div>

                            <div class="mb-2">
                                <a href="http://ppid.kemendagri.go.id/front/member/permohonan/ajukan" class="btn btn-primary btn-lg">Permohonan Informasi</a>
                            </div>
                        </div>

                        <hr>

                        <div class="table-responsive">
                            <table class="table table-document-custom">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul Dokumen Informasi</th>
                                        <th>Tampilkan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1.</td>
                                        <td>
                                            <div class="title">Surat Keputusan Mendagri Nomor 100-4672 Tahun 2020 tentang I... </div>
                                            <div class="subtitle">Badan Penelitian dan Pengembangan</div>
                                            <div class="small-text">22 March 2021 | Berkala | Regulasi</div>
                                        </td>
                                        <td class="align-middle"><a href="http://ppid.kemendagri.go.id/front/dokumen/detail/500098896" class="font-600">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2.</td>
                                        <td>
                                            <div class="title">Peraturan Daerah Nomor 9 Tahun 2019 Perubahan Atas Peraturan... </div>
                                            <div class="subtitle">Ditjen Bina Pembangunan Daerah</div>
                                            <div class="small-text">22 March 2021 | Berkala | Regulasi</div>
                                        </td>
                                        <td class="align-middle"><a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300098891" class="font-600">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3.</td>
                                        <td>
                                            <div class="title">Peraturan Daerah Nomor 9 Tahun 2019 Perubahan Atas Peraturan... </div>
                                            <div class="subtitle">Ditjen Bina Pembangunan Daerah</div>
                                            <div class="small-text">22 March 2021 | Berkala | Regulasi</div>
                                        </td>
                                        <td class="align-middle"><a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300098892" class="font-600">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4.</td>
                                        <td>
                                            <div class="title">Pembinaan dan Pengawasan Penyelenggaraan Peningkatan Kapasit... </div>
                                            <div class="subtitle">Ditjen Bina Pemerintahan Desa</div>
                                            <div class="small-text">23 February 2021 | Berkala | Regulasi</div>
                                        </td>
                                        <td class="align-middle"><a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300096877" class="font-600">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">5.</td>
                                        <td>
                                            <div class="title">Kepmendagri Nomor 118-8840 Tahun 2018 tentang Penetapan Peri... </div>
                                            <div class="subtitle">Ditjen Otonomi Daerah</div>
                                            <div class="small-text">04 February 2021 | Berkala | Regulasi</div>
                                        </td>
                                        <td class="align-middle"><a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300094654" class="font-600">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">6.</td>
                                        <td>
                                            <div class="title">Surat Lampu Rotari Satuan Polisi Pamong Praja </div>
                                            <div class="subtitle">Ditjen Bina Administrasi Kewilayahan</div>
                                            <div class="small-text">01 February 2021 | Berkala | Informasi Darurat</div>
                                        </td>
                                        <td class="align-middle"><a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300094504" class="font-600">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">7.</td>
                                        <td>
                                            <div class="title">SURAT MENTERI KEPADA DAERAH TENTANG BANTUAN KEUANGAN SULAWES... </div>
                                            <div class="subtitle">PPID Kementerian Dalam Negeri</div>
                                            <div class="small-text">20 January 2021 | Berkala | Informasi Darurat</div>
                                        </td>
                                        <td class="align-middle"><a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300093748" class="font-600">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">8.</td>
                                        <td>
                                            <div class="title">SURAT MENTERI KEPADA DAERAH TENTANG BANTUAN KEUANGAN SAAT B... </div>
                                            <div class="subtitle">Ditjen Bina Administrasi Kewilayahan</div>
                                            <div class="small-text">20 January 2021 | Berkala | Informasi Darurat</div>
                                        </td>
                                        <td class="align-middle"><a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300093747" class="font-600">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">9.</td>
                                        <td>
                                            <div class="title">Peraturan Pemerintah Nomor 2 Tahun 2021 tentang penyelengg... </div>
                                            <div class="subtitle">Ditjen Bina Administrasi Kewilayahan</div>
                                            <div class="small-text">20 January 2021 | Berkala | Regulasi</div>
                                        </td>
                                        <td class="align-middle"><a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300093746" class="font-600">Lihat</a></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">10.</td>
                                        <td>
                                            <div class="title">Permendagri No 104 Tahun 2019 </div>
                                            <div class="subtitle">PPID Kementerian Dalam Negeri</div>
                                            <div class="small-text">04 January 2021 | Berkala | Regulasi</div>
                                        </td>
                                        <td class="align-middle"><a href="http://ppid.kemendagri.go.id/front/dokumen/detail/500093198" class="font-600">Lihat</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end align-items-center mt-4">

                                <li class="page-item prev disabled"><a class="page-link">«</a></li>





                                <li class="page-item active"><a class="page-link">1</a></li>
                                <li class="page-item"><a class="page-link" href="http://ppid.kemendagri.go.id/front/dokumen?area=kemendagri&amp;category=1&amp;page=2">2</a></li>
                                <li class="page-item"><a class="page-link" href="http://ppid.kemendagri.go.id/front/dokumen?area=kemendagri&amp;category=1&amp;page=3">3</a></li>
                                <li class="page-item"><a class="page-link" href="http://ppid.kemendagri.go.id/front/dokumen?area=kemendagri&amp;category=1&amp;page=4">4</a></li>
                                <li class="page-item"><a class="page-link" href="http://ppid.kemendagri.go.id/front/dokumen?area=kemendagri&amp;category=1&amp;page=5">5</a></li>
                                <li class="page-item"><a class="page-link" href="http://ppid.kemendagri.go.id/front/dokumen?area=kemendagri&amp;category=1&amp;page=6">6</a></li>
                                <li class="page-item"><a class="page-link" href="http://ppid.kemendagri.go.id/front/dokumen?area=kemendagri&amp;category=1&amp;page=7">7</a></li>
                                <li class="page-item"><a class="page-link" href="http://ppid.kemendagri.go.id/front/dokumen?area=kemendagri&amp;category=1&amp;page=8">8</a></li>

                                <li class="page-item disabled"><a class="page-link">...</a></li>





                                <li class="page-item"><a class="page-link" href="http://ppid.kemendagri.go.id/front/dokumen?area=kemendagri&amp;category=1&amp;page=53">53</a></li>
                                <li class="page-item"><a class="page-link" href="http://ppid.kemendagri.go.id/front/dokumen?area=kemendagri&amp;category=1&amp;page=54">54</a></li>


                                <li class="page-item next"><a class="page-link" href="http://ppid.kemendagri.go.id/front/dokumen?area=kemendagri&amp;category=1&amp;page=2" rel="next">»</a></li>
                            </ul>
                        </nav>

                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>f
</div>
@endsection