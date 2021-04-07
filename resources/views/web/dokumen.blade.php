@extends('web/layouts/master')
@section('content')
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $(".reset-btn").click(function(){
        $("#myForm").trigger("reset");
    });
});
</script> -->
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
                        <form action="/dokumen" method="get">
                        @csrf
                            <div class="form-group">
                                <label for="">Kategori</label>
                                <select class="form-control" name="kategori">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($kategori as $ktg)
                                        <option value="{{ $ktg->id }}">{{$ktg->nama}}</option>
                                    @endforeach
                                </select>                            
                            </div>

                            <div class="form-group">
                                <label for="">Judul</label>
                                <input type="text" name="judul" class="form-control" aria-describedby="helpId">
                            </div>

                            <div class="form-group">
                                <label for="">Jenis</label>
                                <select class="form-control" name="jenis">
                                    <option value="">Pilih Jenis</option>
                                    @foreach ($jenis as $jns)
                                        <option value="{{ $jns->id }}">{{$jns->nama}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Komponen</label>
                                <select class="form-control" name="dinas">
                                    <option value="">Pilih Dinas</option>
                                    @foreach ($dinas as $dn)
                                        <option value="{{ $dn->id }}">{{$dn->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <hr>
                            <button class="btn btn-primary btn-md w-100 mb-2" type="submit">Cari Dokumen</button>
                            <!-- <button class="btn btn-secondary btn-md w-100" type="submit">Reset</button> -->
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
                            <p class="mb-0">{{$berkala}}</p>
                        </div>

                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                            <p class="text-default font-600 mb-0">Serta Merta</p>
                            <p class="mb-0">{{$sertamerta}}</p>
                        </div>

                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
                            <p class="text-default font-600 mb-0">Setiap Saat</p>
                            <p class="mb-0">{{$setiapsaat}}</p>
                        </div>

                        <hr>

                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <p class="text-primary font-600 mb-0">Total Informasi Publik</p>
                            <p class="mb-0">{{$total}}</p>
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
                                <a href="{{route('tambah-info')}}" class="btn btn-primary btn-lg">Permohonan Informasi</a>
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
                                @foreach ($dokumen as $no => $dok)
                                    <tr>
                                        <td scope="row">{{ ++$no }}</td>
                                        <td>
                                            <div class="title">{{$dok->judul}}</div>
                                            <div class="subtitle">{{$dok->dinas->nama}}</div>
                                            <div class="small-text">{{$dok->created_at->format('d F Y')}} | {{$dok->kategori->nama}} | {{$dok->jenis->nama}}</div>
                                        </td>
                                        <td class="align-middle"><a href="http://ppid.kemendagri.go.id/front/dokumen/detail/500098896" class="font-600">Lihat</a></td>
                                    </tr>
                                @endforeach                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- <nav aria-label="Page navigation example">
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
                        </nav> -->

                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>f
</div>
@endsection