@extends('web/layouts/master')
@section('judul')
Profil
@endsection
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="{{url('beranda')}}">Home</a></li>
                <li><a href="">Profil</a></li>
            </ul>
        </div>
    </div>
    <section class="content-blank blue-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-4">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-circle">
                            <i class="fas fa-info-circle fa-2x"></i>
                        </div>
                        <p class="text-default font-600 mb-0">Informasi</p>
                    </div>

                    <ul class="nav tabs-vertical small-list without-primary flex-column" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="item active" id="informasi-profil-ppid-tab" data-toggle="tab" href="#InformasiProfilPPID_Tabs" role="tab" aria-controls="InformasiProfilPPID_Tabs" aria-selected="true">
                                <div class="head-icon">
                                    <div class="tabs-icon">
                                        <i class="fas fa-user-circle fa-2x"></i>
                                    </div>
                                </div>
                                <span>Profil PPID</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="item" id="informasi-profil-pejabat-tab" data-toggle="tab" href="#InformasiProfilPejabat_Tabs" role="tab" aria-controls="InformasiProfilPejabat_Tabs" aria-selected="true">
                                <div class="head-icon">
                                    <div class="tabs-icon">
                                        <i class="fas fa-user-circle fa-2x"></i>
                                    </div>
                                </div>
                                <span>Profil Pejabat Daerah</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="item" id="informasi-visi-tab" data-toggle="tab" href="#InformasiVisi_Tabs" role="tab" aria-controls="InformasiVisi_Tabs" aria-selected="false">
                                <div class="head-icon">
                                    <div class="tabs-icon">
                                        <i class="fas fa-bullseye fa-2x"></i>
                                    </div>
                                </div>
                                <span>Visi dan Misi</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="item" id="informasi-tupoksi-tab" data-toggle="tab" href="#InformasiTupoksi_Tabs" role="tab" aria-controls="InformasiTupoksi_Tabs" aria-selected="false">
                                <div class="head-icon">
                                    <div class="tabs-icon">
                                        <i class="fas fa-tasks fa-2x"></i>
                                    </div>
                                </div>
                                <span>Tupoksi</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="item" id="informasi-strukturPPID-tab" data-toggle="tab" href="#InformasiStrukturPPID_Tabs" role="tab" aria-controls="InformasiStrukturPPID_Tabs" aria-selected="false">
                                <div class="head-icon">
                                    <div class="tabs-icon">
                                        <i class="fas fa-columns fa-2x"></i>
                                    </div>
                                </div>
                                <span>Struktur Organisasi PPID</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="item" id="informasi-struktur-pemerintahan-tab" data-toggle="tab" href="#InformasiStrukturPemerintahan_Tabs" role="tab" aria-controls="InformasiStrukturPemerintahan_Tabs" aria-selected="false">
                                <div class="head-icon">
                                    <div class="tabs-icon">
                                        <i class="fas fa-sitemap fa-2x"></i>
                                    </div>
                                </div>
                                <span>Struktur Pemerintahan</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="item" id="informasi-sk-tab" data-toggle="tab" href="#InformasiSK_Tabs" role="tab" aria-controls="InformasiSK_Tabs" aria-selected="false">
                                <div class="head-icon">
                                    <div class="tabs-icon">
                                        <i class="fas fa-file-alt fa-2x"></i>
                                    </div>
                                </div>
                                <span>SK & SOP PPID</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="item" id="informasi-sekeretariatPPID-tab" data-toggle="tab" href="#InformasiSekretariatPPID_Tabs" role="tab" aria-controls="InformasiSekretariatPPID_Tabs" aria-selected="false">
                                <div class="head-icon">
                                    <div class="tabs-icon">
                                        <i class="fas fa-address-book fa-2x"></i>
                                    </div>
                                </div>
                                <span>Sekretariat PPID</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="item" id="informasi-maskot-tab" data-toggle="tab" href="#InformasiMaskot_Tabs" role="tab" aria-controls="InformasiMaskot_Tabs" aria-selected="false">
                                <div class="head-icon">
                                    <div class="tabs-icon">
                                        <i class="fas fa-home fa-2x"></i>
                                    </div>
                                </div>
                                <span>Maskot Kota</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="item" id="informasi-maklumat-tab" data-toggle="tab" href="#InformasiMaklumat_Tabs" role="tab" aria-controls="InformasiMaklumat_Tabs" aria-selected="false">
                                <div class="head-icon">
                                    <div class="tabs-icon">
                                        <i class="fas fa-handshake fa-2x"></i>
                                    </div>
                                </div>
                                <span>Maklumat Pelayanan</span>
                            </a>
                        </li>
                    </ul>
                </div>



                <div class="col-12 col-lg-8 mb-4">
                    <div class="tab-content" id="myTabContent">
                        @foreach($profils as $profil)
                        <div class="tab-pane fade show active" id="InformasiProfilPPID_Tabs" role="tabpanel" aria-labelledby="informasi-profil-ppid-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Profil PPID</span></div>
                            <div class="card card-md">
                                {!! $profil->profil_ppid !!}
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="InformasiProfilPejabat_Tabs" role="tabpanel" aria-labelledby="informasi-profil-pejabat-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Profil Pejabat</span></div>
                            <div class="card card-md">
                                <div class="table-responsive">
                                    <table class="table table-document-custom">
                                        <thead>
                                            <tr>
                                                <th>no</th>
                                                <th>opd</th>
                                                <th>alamat</th>
                                                <th>telepon</th>
                                                <th>kepala</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Bagian Umum</td>
                                                <td>Jl. Panglima Sudirman 19 Kota Probolinggo</td>
                                                <td>(0335) 421228  /  425743</td>
                                                <td>DENNY BAGUS ERWANTO, S.H., M.H.</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Bagian Pemerintah</td>
                                                <td>Jl. Panglima Sudirman 19 Kota Probolinggo</td>
                                                <td>(0335) 421921</td>
                                                <td>PUDI ADJI TJAHJO WAHONO, S.Sos, M.Si</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Bagian Perekonomian dan Pembangunan</td>
                                                <td>Jl. Panglima Sudirman 19 Kota Probolinggo</td>
                                                <td>(0335) 4438856 / 4494699</td>
                                                <td>Dra. HERI ASTUTI, M.Si.</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Bagian Hukum</td>
                                                <td>Jl. Panglima Sudirman 19 Kota Probolinggo</td>
                                                <td>(0335) 421830</td>
                                                <td>TITIK WIDAYAWATI, SH, M.Hum</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Bagian Kesejahteraan Rakyat</td>
                                                <td>Jl. Panglima Sudirman 19 Kota Probolinggo</td>
                                                <td>(0335) 4438981</td>
                                                <td>AGUS DWIWANTORO, S.STP., M.Si.</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Bagian Organisasi</td>
                                                <td>Jl. Panglima Sudirman 19 Kota Probolinggo</td>
                                                <td>(0335) 428993</td>
                                                <td>PRIJO DJATMIKO, S.Sos, M.M.</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Bagian Keuangan dan Sarana Prasarana</td>
                                                <td>Jl. Panglima Sudirman 19 Kota Probolinggo</td>
                                                <td>(0335) 436103 / 421540</td>
                                                <td>YULIUS HENDRA WASKITO, S.E., M.Si.</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Bagian Pengadaan Barang dan Jasa</td>
                                                <td>Jl. Panglima Sudirman 19 Kota Probolinggo</td>
                                                <td>(0335) 422439</td>
                                                <td>ANDUNG TJAHJONO, S.T., M.M.</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah</td>
                                                <td>Jl. Panglima Sudirman 19 Kota Probolinggo</td>
                                                <td>(0335) 428288</td>
                                                <td>WAWAN SOEGYANTONO, SE, MM</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Badan Perencanaan Pembangunan Daerah, Penelitian dan Pengembangan</td>
                                                <td>Jl. Soekarno-Hatta No. 52 Probolinggo</td>
                                                <td>(0335) 427232</td>
                                                <td>Drs. TARTIB GOENAWAN, M.Si</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Badan Penanggulangan Bencana Daerah</td>
                                                <td>Jl. Mastrip (Selatan Kantor Kecamatan Kedopok) Kota Probolinggo</td>
                                                <td>(0335) 429664 / 429661</td>
                                                <td>SUGITO PRASETYO, S.STP, MM</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Badan Kepegawaian dan Pengembangan SDM</td>
                                                <td>Jl. Mastrip No 120 Kota Probolinggo</td>
                                                <td>(0335) 425077 / 437004</td>
                                                <td>WAHONO ARIFIN, SH, MM</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Badan Kesatuan Bangsa dan Politik</td>
                                                <td>Jl. Mawar No. 39 Kota Probolinggo</td>
                                                <td>(0335) 426436</td>
                                                <td>Drs. ACHMAD SUDIYANTO, M.Si.</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Dinas Kependudukan dan Pencatatan Sipil</td>
                                                <td>Jl. Mastrip 03 Kota Probolinggo</td>
                                                <td>(0335) 4438894</td>
                                                <td>Drs. SUKAM, M.Si</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Dinas Pertanian, Ketahanan Pangan dan Perikanan</td>
                                                <td>Jl. Soekarno Hatta No. 265 Probolinggo</td>
                                                <td>(0335) 433191 / 421760</td>
                                                <td>Ir. YOYOK IMAM SISWAHYUDI, MM (Plt)</td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>Dinas Kesehatan, Pengendalian Penduduk, dan Keluarga Berencana</td>
                                                <td>Jl. Suroyo No 58 Kota Probolinggo</td>
                                                <td>(0335) 426877</td>
                                                <td>dr. NURUL HASANAH HIDAYATI (Plt)</td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>Dinas Koperasi, Usaha Mikro, Perdagangan dan Perindustrian</td>
                                                <td>Jl. Mastrip No 155 Kota Probolinggo</td>
                                                <td>(0335) 423053</td>
                                                <td>Ir. FITRIAWATI, M,M</td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>Dinas Perhubungan</td>
                                                <td>Jl. Suroyo No 17  Kota Probolinggo</td>
                                                <td>(0335) 433175</td>
                                                <td>AGUS EFENDI, S.Sos, M.Si</td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>Dinas Lingkungan Hidup</td>
                                                <td>Jl. Anggrek No. 15  Kota Probolinggo</td>
                                                <td>0335-421646</td>
                                                <td>Drs. RACHMA DETA ANTARIKSA, M.Si</td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>Dinas Penanaman Modal, PTSP, dan Tenaga Kerja</td>
                                                <td>Jl. Basuki Rahmat No. 44  Kota Probolinggo</td>
                                                <td>(0335) 426147 / 430758</td>
                                                <td>FATCHUR ROZI, SH, MM (Plt)</td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>Dinas Kepemudaan, Olahraga dan Pariwisata</td>
                                                <td>Jl. Soekarno Hatta No. 273  Kota Probolinggo</td>
                                                <td>(0335) 426653 / 429996</td>
                                                <td>Ir. BUDI KRISYANTO, M.Si</td>
                                            </tr>
                                            <tr>
                                                <td>22</td>
                                                <td>Dinas Sosial, Pemberdayaan Perempuan dan Perlindungan Anak</td>
                                                <td>Jl. Raya Dringu No. 13  Kota Probolinggo</td>
                                                <td>(0335) 421431</td>
                                                <td>REY SUWIGTYO, S.Sos, M.Si</td>
                                            </tr>
                                            <tr>
                                                <td>23</td>
                                                <td>Dinas Komunikasi dan Informatika</td>
                                                <td>Jl. Dr. Moch. Saleh No. 5 Kota Probolinggo</td>
                                                <td>(0335) 422135 / 420155</td>
                                                <td>PUJO AGUNG SATRIO, S.STP, M.Si</td>
                                            </tr>
                                            <tr>
                                                <td>24</td>
                                                <td>Dinas Perpustakaan dan Kearsipan</td>
                                                <td>Jl. Letjen Sutoyo No. 3  Kota Probolinggo</td>
                                                <td>(0335) 424224</td>
                                                <td>Drs. PAENI, M.H.</td>
                                            </tr>
                                            <tr>
                                                <td>25</td>
                                                <td>Dinas Pendidikan dan Kebudayaan</td>
                                                <td>Jl. Basuki Rahmad No. 20A  Kota Probolinggo</td>
                                                <td>(0335) 421160 / 425057</td>
                                                <td>Drs. MOCH. MASKUR, M.Pd.</td>
                                            </tr>
                                            <tr>
                                                <td>26</td>
                                                <td>Dinas Pekerjaan Umum, Penataan Ruang, Perumahan dan Kawasan Permukiman</td>
                                                <td>Jl. Hayam Wuruk no. 69  Kota Probolinggo</td>
                                                <td>(0335) 421481</td>
                                                <td>AGUS HARTADI, SH, M.Si</td>
                                            </tr>
                                            <tr>
                                                <td>27</td>
                                                <td>Kecamatan Mayangan</td>
                                                <td>Jl. Ikan Paus No. 34 Kota Probolinggo</td>
                                                <td>(0335) 421475</td>
                                                <td>MUHAMMAD ABAS, S.Sos, M.Si</td>
                                            </tr>
                                            <tr>
                                                <td>28</td>
                                                <td>Kecamatan Wonoasih</td>
                                                <td>Jl. Jeruk No 1 Wonoasih  Kota Probolinggo</td>
                                                <td>(0335) 424902 / 437700</td>
                                                <td>DEUS NAWANDI, S.STP, M.Si</td>
                                            </tr>
                                            <tr>
                                                <td>29</td>
                                                <td>Kecamatan Kademangan</td>
                                                <td>Jl. Brantas No. 247 Kota Probolinggo</td>
                                                <td>(0335) 423450</td>
                                                <td>GOFUR EFFENDY, S.T., M.Si.</td>
                                            </tr>
                                            <tr>
                                                <td>30</td>
                                                <td>Kecamatan Kedopok</td>
                                                <td>Jl. Mastrip No. 20 Kota Probolinggo</td>
                                                <td>(0335) 426601</td>
                                                <td>IMAM CAHYADI, S.Sos, M.Si</td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td>Kecamatan Kanigaran</td>
                                                <td>Jl. Slamet Riyadi Kota Probolinggo</td>
                                                <td>(0335) 427550 / 425771</td>
                                                <td>AGUS RIANTO, S.STP., M.Si.</td>
                                            </tr>
                                            <tr>
                                                <td>32</td>
                                                <td>Sekretariat Dewan</td>
                                                <td>Jl. Suroyo No. 27 Kota Probolinggo</td>
                                                <td>(0335) 433326</td>
                                                <td>Drs. TEGUH BAGUS SUJAWANTO, M.Pd</td>
                                            </tr>
                                            <tr>
                                                <td>33</td>
                                                <td>RSUD dr. Moch. Saleh</td>
                                                <td>Jl.Mayjen Panjaitan No.65  Kota Probolinggo</td>
                                                <td>(0335) 433119 / 432702</td>
                                                <td>dr. ABRAAR HS KUDDAH, M.Si.Med., Sp.B. (Plt)</td>
                                            </tr>
                                            <tr>
                                                <td>34</td>
                                                <td>Inspektorat</td>
                                                <td>Jl. Hayam Wuruk no. 69  Kota Probolinggo</td>
                                                <td>(0335) 429106</td>
                                                <td>Drs. TARTIB GOENAWAN, M.Si (Plt.)</td>
                                            </tr>
                                            <tr>
                                                <td>35</td>
                                                <td>Satuan Polisi Pamong Praja</td>
                                                <td>Jl.Hayam Wuruk No.2 Kota Probolinggo</td>
                                                <td>(0335) 420266</td>
                                                <td>AMAN SURYAMAN, AP, MM</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="InformasiVisi_Tabs" role="tabpanel" aria-labelledby="informasi-visi-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Visi dan Misi</span></div>
                            <div class="card card-md">
                                {!! $profil->visi_misi !!}
                            </div>
                        </div>

                        <div class="tab-pane fade" id="InformasiTupoksi_Tabs" role="tabpanel" aria-labelledby="informasi-tupoksi-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Tupoksi</span></div>
                            <div class="card card-md">
                                {!! $profil->tupoksi !!}
                            </div>
                        </div>

                        <div class="tab-pane fade" id="InformasiStrukturPPID_Tabs" role="tabpanel" aria-labelledby="informasi-strukturPPID-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Struktur Organisasi PPID</span></div>
                            <div class="card card-md">
                                <img src="{{ asset($profil->struktur_organisasi) }}" alt="">

                            </div>
                        </div>

                        <div class="tab-pane fade" id="InformasiStrukturPemerintahan_Tabs" role="tabpanel" aria-labelledby="informasi-struktur-pemerintahan-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Struktur Pemerintahan</span></div>
                            <div class="card card-md">
                                <img src="{{ asset($profil->struktur_pemerintahan) }}" alt="">
                            </div>
                        </div>

                        <div class="tab-pane fade" id="InformasiSK_Tabs" role="tabpanel" aria-labelledby="informasi-sk-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>SK & SOP PPID</span></div>
                            <div class="card card-md">
                                {!! $profil->sk !!}
                            </div>
                        </div>

                        <div class="tab-pane fade" id="InformasiSekretariatPPID_Tabs" role="tabpanel" aria-labelledby="informasi-sekeretariatPPID-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Sekretariat PPID</span></div>
                            <div class="card card-md">
                                {!! $profil->sekretariat_PPID !!}
                            </div>
                        </div>

                        <div class="tab-pane fade" id="InformasiMaskot_Tabs" role="tabpanel" aria-labelledby="informasi-maskot-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Maskot Kota</span></div>
                            <div class="card card-md">
                                {!! $profil->maskot !!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="InformasiMaklumat_Tabs" role="tabpanel" aria-labelledby="informasi-maklumat-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Maklumat Pelayanan</span></div>
                            <div class="card card-md">
                                <img src="{{ asset($profil->maklumat) }}" alt="">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection