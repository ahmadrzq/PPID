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
            @include('web/pengguna/bar')
        </div>
    </section>
    <section class="content-blank dashboard-space">
        <div class="container">
            <h5 class="text-capitalize head-title">Ajukan Permohonan</h5>
            <p class="head-sub-desc mb-0">Silahkan isi form berikut</p>
            <hr>
            <form action="{{route('menu.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <div class="col-12 col-md-6 mb-3">
                        <div class="form-group">
                            <label for="">Tujuan Permohonan</label>
                            <select name="dinas" class="form-control">
                                <option value="">Pilih Tujuan</option>
                                @foreach($dinas as $result)
                                <option value="{{$result->id}}">{{$result->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <h6 class="text-capitalize head-title">Informasi Permohonan Dokumen</h6> <br>
                <div class="form-group">
                    <label for="">Judul Dokumen Informasi</label>
                    <input type="text" value="" name="judul" placeholder="" aria-describedby="helpId" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tujuan Penggunaan Informasi</label>
                    <textarea name="tujuanInformasi" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary pengguna-form-button">Proses Permohonan</button>
                </div>
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