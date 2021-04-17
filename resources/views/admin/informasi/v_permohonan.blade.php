@extends('admin/layouts/master')
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
@endsection