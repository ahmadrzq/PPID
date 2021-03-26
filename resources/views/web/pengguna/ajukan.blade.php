@extends('web/layouts/master')
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="http://ppid.kemendagri.go.id">Home</a></li>
                <li><a href="#">Ajukan Permohonan</a></li>
            </ul>
        </div>
    </div>
    <section class="content-blank blue-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-4 line-col line-far mt-2 mb-2">
                    <h6 class="text-default mb-4 font-600">Informasi Pengguna</h6>
                    <div class="d-flex flex-wrap">
                        <div class="img-circle circle-lg">
                            <img src="http://ppid.kemendagri.go.id/avatars/default.png" class="img-fluid mr-3" alt="">
                        </div>

                        <div class="profil-dashboard col-12 col-sm-8 p-0">
                            <div class="mb-2">
                                <span class="fs-12 text-secondary mb-1">Ahmad Rizqi Isnain</span>
                                <p class="text-default font-600">publik</p>
                            </div>

                            <div class="mb-2">
                                <span class="fs-12 text-secondary mb-1">Terakhir Login</span>
                                <p class="text-default font-600">25 March 2021 15:39</p>
                            </div>

                            <a href="http://ppid.kemendagri.go.id/front/member/profile" class="btn btn-primary btn-xs">Lihat Profil</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-7 mt-2 mb-2">
                    <h6 class="text-default mb-4 font-600">Fasilitas Saya</h6>
                    <ul class="menu-dashboard">
                        <li>
                            <a href="http://ppid.kemendagri.go.id/front/member/home" class="">
                                <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                                    <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/dashboard.png" class="img-fluid" alt="" width="35">
                                </div>
                                <p class="text-default">Dashboard</p>
                            </a>
                        </li>

                        <li>
                            <a href="http://ppid.kemendagri.go.id/front/member/permohonan/ajukan" class="active">
                                <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                                    <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/submission.png" class="img-fluid" alt="" width="35">
                                </div>
                                <p class="text-default">Ajukan Permohonan</p>
                            </a>
                        </li>

                        <li>
                            <a href="http://ppid.kemendagri.go.id/front/member/permohonan/data" class="">
                                <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                                    <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/message.png" class="img-fluid" alt="" width="35">
                                </div>
                                <p class="text-default">Permohonan Saya</p>
                            </a>
                        </li>

                        <li>
                            <a href="http://ppid.kemendagri.go.id/front/member/keberatan/data" class="">
                                <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                                    <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/rejected.png" class="img-fluid" alt="" width="35">
                                </div>
                                <p class="text-default">Keberatan Saya</p>
                            </a>
                        </li>

                        <li>
                            <a href="http://ppid.kemendagri.go.id/front/member/dokumen/riwayat" class="">
                                <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                                    <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/inbox.png" class="img-fluid" alt="" width="35">
                                </div>
                                <p class="text-default">Dokumen Saya</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="content-blank dashboard-space">
        <div class="container">
            <form action="http://ppid.kemendagri.go.id/front/member/permohonan/ajukan" method="post" id="pengguna-form"><input type="hidden" name="_token" value="phTZRSxVWUuhY1FW2mYMenlOMHJRU6Wft0gIiwNX">
                <h5 class="text-capitalize head-title">Ajukan Permohonan</h5>
                <p class="head-sub-desc mb-0">Silahkan isi form berikut</p>
                <hr>
                <div class="row mb-3">
                    <div class="col-12 col-md-6 mb-3">
                        <div class="form-group"><label for="">Tujuan Permohonan</label> <select name="tujuan" class="form-control">
                                <option value="1">Kementerian Dalam Negeri</option>
                                <option value="2">Provinsi</option>
                                <option value="3">Kabupaten/Kota</option>
                            </select></div>
                    </div>
                    <div class="col-12 col-md-6 mb-3" style="display: none;">
                        <div class="form-group"><label class="text">Provinsi</label>
                            <div class="field-group"><select name="provinsi" class="form-control"></select></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3" style="display: none;">
                        <div class="form-group"><label class="text">Kota/Kab</label>
                            <div class="field-group"><select name="kabkota" class="form-control"></select></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <div class="form-group"><label for="">Komponen Yang Dituju</label> <select name="operasional" class="form-control">
                                <option value="">Pilih Komponen</option>
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
                            </select></div>
                    </div>
                </div>
                <h6 class="text-capitalize head-title">Informasi Permohonan Dokumen</h6> <br>
                <div class="form-group"><label for="">Judul Dokumen Informasi</label> <input type="text" value="" name="judul" maxlength="225" placeholder="" aria-describedby="helpId" class="form-control"></div>
                <div class="form-group"><label for="">Kandungan Informasi</label> <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea></div>
                <div class="form-group"><label for="">Tujuan Penggunaan Informasi</label> <textarea name="tujuan_informasi" id="" cols="30" rows="10" class="form-control"></textarea></div>
                <div class="d-flex justify-content-end"><button type="submit" class="btn btn-primary pengguna-form-button">Proses Permohonan</button></div>
            </form>
        </div>
    </section>

    <div class="modal fade" id="ModalSuccessPermohonan" tabindex="-1" role="dialog" aria-labelledby="LayananKepuasanMasyarakatModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="mpo-modal-close" data-dismiss="modal">
                        <svg width="14px" height="14px" viewBox="0 0 14 14">
                            <g id="Pusat" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-family="material" font-size="25" font-weight="normal">
                                <g id="Laporan-Pelayanan-Informasi-modal" transform="translate(-917.000000, -220.000000)" fill="#FFFFFF">
                                    <g id="Group-14" transform="translate(428.000000, 212.000000)">
                                        <g id="Group-4" transform="translate(481.000000, 0.000000)">
                                            <text id="close---material">
                                                <tspan x="3" y="24"></tspan>
                                            </text>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>

                    <div class="text-center mt-3 mb-3">
                        <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/analysis.png" class="img-fluid mb-4" alt="" width="90">
                        <p class="m-l-60 m-r-60"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection