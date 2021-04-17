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
                            <form action="{{url('dashboard/informasi/masuk')}}" method="get">
                                <div class="form-row">                                    
                                    <div class="form-row col-md-10">
                                        <div class="form-group col-md-3">
                                            <label>Judul Permohonan</label>
                                            <input name="judul" type="text" class="form-control" style="height: 42px;" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Tanggal Awal</label>
                                            <input name="awal" type="date" class="form-control" style="height: 42px;" >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Tanggal Akhir</label>
                                            <input name="akhir" type="date" class="form-control" style="height: 42px;" >
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <br>
                                        <button class="btn btn-primary">Cari <i class="fas fa-search"></i></button>
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
                                    <th>Komponen Yang Dituju</th>
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
                                    <td>{{$pmhn->dinas->nama}}</td>
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
                                    <td><a href="{{route('detail-info', $pmhn->id)}}"><i class="fas fa-folder-open"></i></a></td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection