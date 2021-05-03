@extends('admin/layouts/master')
@section('judul')
Semua Permohonan
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Semua Permohonan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Permohonan Informasi</div>
            <div class="breadcrumb-item">Semua Permohonan</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-print"></i> Cetak Laporan</button>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Registrasi</th>
                                    <th>Judul Informasi</th>
                                    <th>Status</th>
                                    <th>Komponen Yang Dituju</th>
                                    <th></th>
                                </tr>
                                @foreach ($permohonan as $result => $pmhn)
                                <tr>
                                    <td>{{$pmhn->id}}</td>
                                    <td><label for="">{{$pmhn->kode}}<br><small><i class="fas fa-calendar-week"></i> {{$pmhn->created_at->format('d-m-Y')}} </small> </label>
                                    </td>
                                    <td><label for="">{{$pmhn->judul}}<br><small><i class="fas fa-user"></i> {{$pmhn->nama}} </small> </label>
                                    </td>
                                    @if($pmhn->status === 0 )
                                    <td>
                                        <badge class="badge badge-info">Menunggu</badge>
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
                                    <td>{{$pmhn->dinas->nama}}</td>
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
            <form action="{{url('/informasi/cetak_pdf')}}" method="get">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" required>
                            <option value="">- Pilih Status -</option>
                            <option value="0">Menunggu</option>
                            <option value="1">Diterima</option>
                            <option value="2">Diproses</option>
                            <option value="3">Ditolak</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label>Tanggal Awal</label>
                            <input type="date" class="form-control" name="awal" required>
                        </div>
                        <div class="form-group col-6">
                            <label>Tanggal Akhir</label>
                            <input type="date" class="form-control" name="akhir" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-print"></i> Cetak Laporan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection