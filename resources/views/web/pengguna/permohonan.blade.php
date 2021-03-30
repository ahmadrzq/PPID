@extends('web/layouts/master')
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="http://ppid.kemendagri.go.id">Home</a></li>
                <li><a href="#">Permohonan Saya</a></li>
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
                            <a href="http://ppid.kemendagri.go.id/front/member/permohonan/data" class="active">
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
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="mb-2">
                    <h6 class="text-capitalize head-title">Permohonan Saya</h6>
                    <p class="head-sub-desc mb-0">Daftar permohonan informasi saya</p>
                </div>

                <div class="mb-2">
                    <a href="http://ppid.kemendagri.go.id/front/member/permohonan/ajukan" class="btn btn-primary btn-lg">Ajukan Permohonan</a>
                </div>
            </div>

            <hr>

            <div class="table-responsive">
                <table class="table table-document-custom">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Permohonan</th>
                            <th>Judul Permohonan</th>
                            <th style="text-align: center;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4" align="center">Tidak ada permohonan yang tersedia</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
    <div class="modal fade" id="AjukanKeberatanModal" tabindex="-1" role="dialog" aria-labelledby="AjukanKeberatanModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="http://ppid.kemendagri.go.id/front/member/keberatan/create" method="post" class="pengguna-form">
                    <input type="hidden" name="_token" value="phTZRSxVWUuhY1FW2mYMenlOMHJRU6Wft0gIiwNX">
                    <input type="hidden" name="kode_permohonan" id="kode_permohonan">
                    <div class="modal-body">
                        <h6 class="font-600">Ajukan Keberatan</h6>
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
                        <div class="form-group">
                            <label for="">Nomor Permohonan</label>
                            <input type="text" id="nomor" required="required" disabled="" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Judul Permohonan</label>
                            <input type="text" id="judul" required="required" disabled="" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Alasan Keberatan</label>
                            <select class="form-control" required="required" id="alasan" name="alasan">
                                <option value="">Pilih alasan keberatan</option>
                                <option value="1">Permohon Informasi Ditolak</option>
                                <option value="2">Informasi Berkala tidak disediakan</option>
                                <option value="3">Permintaan Informasi tidak ditanggapi</option>
                                <option value="4">Permintaan Informasi ditanggapi tidak sebagaimana yang diminta</option>
                                <option value="5">Permintaan Informasi tidak dipenuhi</option>
                                <option value="6">Biaya yang dikenakan tidak wajar</option>
                                <option value="7">Informasi yang disampaikan melebihi jangka waktu yang ditentukan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="deskripsi" id="deskripsi" required="required" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="resetForm()" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection