@extends('web/layouts/master')
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
                            <table>
                            </table>
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