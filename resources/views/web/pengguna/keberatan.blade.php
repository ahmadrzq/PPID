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
            @include('web/pengguna/bar')
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