@extends('admin/layouts/master')
@section('content')
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA -->

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
                                    <div class="form-row col-md-10">
                                        <div class="form-group col-md-4">
                                            <label>Kategori</label>
                                            <select class="form-control">
                                                <option>Semua Kategori</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Jenis</label>
                                            <select class="form-control">
                                                <option>Semua Jenis</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Penerbit</label>
                                            <select class="form-control">
                                                <option>Semua Komponen</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <br>
                                        <button class="btn btn-primary">Cari <i class="fas fa-search"></i></button>
                                        <button class="btn btn-secondary">Reset</button>
                                    </div>
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
                            {{$dokumen->links()}}
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Jenis</label>
                    <select class="form-control">
                        <option>- Semua Jenis -</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control">
                        <option>- Semua Kategori -</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Penerbit</label>
                    <select class="form-control">
                        <option>PPID Kota Probolinggo</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label>Tanggal Awal</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group col-6">
                        <label>Tanggal Akhir</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-print"></i> Cetak Laporan</button>
            </div>
        </div>
    </div>
</div>
@endsection