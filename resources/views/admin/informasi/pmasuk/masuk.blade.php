@extends('admin/layouts/master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Permohonan Masuk</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Permohonan Informasi</div>
            <div class="breadcrumb-item">Permohonan Masuk</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-action col-12">
                            <form>
                                <div class="form-row">
                                    <div class="form-row col-md-10">
                                        <div class="form-group col-md-3">
                                            <label>Judul Permohonan</label>
                                            <input type="text" class="form-control" style="height: 42px;">
                                        </div>
                                        <div class="form-group col-md-3" >
                                            <label>Komponen Tujuan</label>
                                            <select class="form-control">
                                                <option>opsi 1</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Tanggal Awal</label>
                                            <input type="date" class="form-control" style="height: 42px;">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Tanggal Akhir</label>
                                            <input type="date" class="form-control" style="height: 42px;">
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
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nomor</th>
                                    <th>Judul Permohonan</th>
                                    <th>Pemohon</th>
                                    <th>Komponen Tujuan</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                @foreach ($menunggu as $pmhn)
                                <tr>
                                    <td>{{$pmhn->id}}</td>
                                    <td>{{$pmhn->created_at->format('d F Y')}}</td>
                                    <td>{{$pmhn->kode}}</td>
                                    <td>{{$pmhn->judul}}</td>
                                    <td>{{$pmhn->nama}}</td>
                                    <td>Ditjen Otonomi Daerah</td>
                                    @if($pmhn->status === 0 )
                                        <td>
                                            <badge class="badge badge-info">Menunggu dong</badge>
                                        </td>
                                    @elseif($pmhn->status === 1 )
                                        <td>
                                            <badge class="badge badge-success">Diterima</badge>
                                        </td>
                                    @elseif($pmhn->status === 2 )
                                        <td>
                                            <badge class="badge badge-warning">Proses</badge>
                                        </td>
                                    @elseif($pmhn->status === 3 )
                                        <td>
                                            <badge class="badge badge-danger">Ditolak</badge>
                                        </td>
                                    @endif
                                    <td>not set</td>
                                    <td><a href="{{route('detail-info', $pmhn->id)}}"><i class="fas fa-folder-open"></i></a></td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection