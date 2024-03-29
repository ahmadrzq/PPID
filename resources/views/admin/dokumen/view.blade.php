@extends('admin/layouts/master')
@section('judul')
Semua Dokumen
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Semua Dokumen</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Dokumen Informasi Publik</div>
            <div class="breadcrumb-item">Permohonan Masuk</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <a href="{{route('tambah-dokumen')}}" class="btn btn-success"><i class="fas fa-plus-square"></i>Tambah Dokumen<a>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-print"></i> Cetak Laporan</button>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-action col-12">
                            <form>
                                <div class="form-row">
                                    <form action="/dashboard/dokumen/view" method="get">
                                        <div class="form-row col-md-10 text-center">
                                            <div class="form-group col-md-4">
                                            <label>Kategori</label>
                                                <select class="form-control" name="kategori">
                                                    <option value="">Pilih Kategori</option>
                                                @foreach ($kategori as $ktg)
                                                    <option value="{{ $ktg->id }}">{{$ktg->nama}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label>Jenis</label>
                                                <select class="form-control" name="jenis">
                                                    <option value="">Pilih Jenis</option>
                                                @foreach ($jenis as $jns)
                                                    <option value="{{ $jns->id }}">{{$jns->nama}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label>Penerbit</label>
                                                <select class="form-control" name="dinas">
                                                    <option value="">Pilih Dinas</option>
                                                @foreach ($dinas as $dn)
                                                    <option value="{{ $dn->id }}">{{$dn->nama}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <br>
                                            <button class="btn btn-primary float-left" >Cari <i class="fas fa-search"></i></button>
                                            <!-- <button class="btn btn-secondary">Reset</button> -->
                                        </div>
                                    </form>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Jenis</th>
                                    <th>Kategori</th>
                                    <th>Penerbit</th>
                                    <th colspan="3">Aksi</th>
                                </tr>
                                @foreach ($dokumen as $no => $dok)
                                <tr>
                                    <td>{{ ++$no }}</td>
                                    <td>{{$dok->judul}}</td>
                                    <td>{{$dok->jenis->nama}}</td>
                                    <td>{{$dok->kategori->nama}}</td>
                                    <td>{{$dok->dinas->nama}}</td>
                                    <td><a href="{{route('download-dokumen', $dok->id)}}"><i class="fas fa-download"></i></a></td>
                                    <td><a href="{{route('edit-dokumen', $dok->id)}}"><i class="fas fa-edit"></i></a></td>
                                    <td><a href="{{route('hapus-dokumen', $dok->id)}}"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </table>
                            
                        </div>
                    </div>
                    <!-- <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection