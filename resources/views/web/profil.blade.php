@extends('web/layouts/master')
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="http://ppid.kemendagri.go.id">Home</a></li>
                <li><a href="http://ppid.kemendagri.go.id/profil">Profil</a></li>
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
                            <a class="item active" id="informasi-profil-tab" data-toggle="tab" href="#InformasiProfil_Tabs" role="tab" aria-controls="InformasiProfil_Tabs" aria-selected="true">
                                <div class="head-icon">
                                    <div class="tabs-icon">
                                        <i class="fas fa-user-circle fa-2x"></i>
                                    </div>
                                </div>
                                <span>Profil</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="item" id="informasi-tugaswewenang-tab" data-toggle="tab" href="#InformasiTugasWewenang_Tabs" role="tab" aria-controls="InformasiTugasWewenang_Tabs" aria-selected="false">
                                <div class="head-icon">
                                    <div class="tabs-icon">
                                        <i class="fas fa-file-alt fa-2x"></i>
                                    </div>
                                </div>
                                <span>Tugas dan Wewenang</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="item" id="informasi-struktur-tab" data-toggle="tab" href="#InformasiStruktur_Tabs" role="tab" aria-controls="InformasiStruktur_Tabs" aria-selected="false">
                                <div class="head-icon">
                                    <div class="tabs-icon">
                                        <i class="fas fa-sitemap fa-2x"></i>
                                    </div>
                                </div>
                                <span>Struktur PPID</span>
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
                            <a class="item" id="informasi-tentangppid-tab" data-toggle="tab" href="#InformasiTentangPPID_Tabs" role="tab" aria-controls="InformasiTentangPPID_Tabs" aria-selected="false">
                                <div class="head-icon">
                                    <div class="tabs-icon">
                                        <i class="fas fa-users fa-2x"></i>
                                    </div>
                                </div>
                                <span>Regulasi Keterbukaan Informasi Publik</span>
                            </a>
                        </li>
                    </ul>
                </div>



                <div class="col-12 col-lg-8 mb-4">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="InformasiProfil_Tabs" role="tabpanel" aria-labelledby="informasi-profil-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Profil</span></div>
                            <div class="card card-md">

                            </div>
                        </div>

                        <div class="tab-pane fade" id="InformasiTugasWewenang_Tabs" role="tabpanel" aria-labelledby="informasi-tugaswewenang-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Tugas dan Wewenang</span></div>
                            <div class="card card-md">

                            </div>
                        </div>

                        <div class="tab-pane fade" id="InformasiStruktur_Tabs" role="tabpanel" aria-labelledby="informasi-struktur-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Struktur PPID</span></div>
                            <div class="card card-md">

                            </div>
                        </div>

                        <div class="tab-pane fade" id="InformasiVisi_Tabs" role="tabpanel" aria-labelledby="informasi-visi-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Visi dan Misi</span></div>
                            <div class="card card-md"></div>
                        </div>

                        <div class="tab-pane fade" id="InformasiTentangPPID_Tabs" role="tabpanel" aria-labelledby="informasi-tentangppid-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Regulasi Keterbukaan Informasi Publik</span></div>
                            <div class="card card-md">

                            </div>
                        </div>
                        <div class="tab-pane fade" id="RegulasiPPID_Tabs" role="tabpanel" aria-labelledby="regulasippid-tab">
                            <div class="heading-blue-rgba with-line mt-1 mb-4"><span>Regulasi Keterbukaan Informasi Publik</span></div>
                            <div class="card card-md">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection