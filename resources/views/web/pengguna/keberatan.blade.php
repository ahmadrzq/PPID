@extends('web/layouts/master')
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="http://ppid.kemendagri.go.id">Home</a></li>
                <li><a href="#">Keberatan Saya</a></li>
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
                            <a href="http://ppid.kemendagri.go.id/front/member/permohonan/ajukan" class="">
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
                            <a href="http://ppid.kemendagri.go.id/front/member/keberatan/data" class="active">
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
            <h6 class="text-capitalize head-title">Keberatan Saya</h6>
            <p class="head-sub-desc mb-0">Daftar keberatan yang telah diajukan</p>

            <hr>

            <div class="table-responsive">
                <table class="table table-document-custom">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Keberatan</th>
                            <th>Tanggal</th>
                            <th>Referensi Permohonan</th>
                            <th style="text-align: center;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
    <!-- Ajukan sengketa -->
    <div class="modal fade" id="AjukanSengketaModal" tabindex="-1" role="dialog" aria-labelledby="AjukanSengketaModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h6 class="font-600">Ajukan Sengketa?</h6>
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
                    <hr>
                    <p class="text-default mb-1">Ajukan Sengketa?</p>
                    <div [formgroup]="radioGroup">
                        <div class="d-flex align-items-center flex-wrap mb-2">
                            <label class="radio radio-custom p-l-30 mt-2 m-r-40">
                                <input type="radio" name="radio" [value]="1" formcontrolname="radio" onclick="AjukanKeberatan_Ya();">
                                <span class="title">Ya</span>
                                <span class="checkmark mt-2"></span>
                            </label>

                            <label class="radio radio-custom p-l-30 mt-2 m-r-40">
                                <input type="radio" name="radio" checked="" [value]="2" formcontrolname="radio" onclick="AjukanKeberatan_Tidak();">
                                <span class="title">Tidak</span>
                                <span class="checkmark mt-2"></span>
                            </label>
                        </div>
                    </div>
                    <input type="hidden" name="kode" id="kode">
                    <br>
                    <div id="DownloadDokumen_AjukanKeberatan" class="hide">
                        <p class="text-default mb-1">Silahkan ikuti link dibawah ini</p>
                        <div class="attachment-file d-flex align-items-center flex-wrap justify-content-between">
                            <p class="mb-0">
                                <a href="#" onclick="saveSengketa()" class="d-none d-sm-block">
                                    Ajukan Sengketa
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-primary">Tutup</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function saveSengketa(kode, judul) {
            let kd = $("#kode").val()
            window.open("http://ppid.kemendagri.go.id/front/member/sengketa/save/" + kd, "_blank")
            setInterval(function() {
                location.reload()
            }, 3000);

        }
    </script>
    <div class="modal fade" id="ModalSuccessKeberatan" tabindex="-1" role="dialog" aria-labelledby="LayananKepuasanMasyarakatModal" aria-hidden="true">
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