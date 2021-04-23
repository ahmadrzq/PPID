@extends('admin/layouts/master')
@section('judul')
Lihat Permohonan
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Lihat Permohonan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Permohonan Informasi</div>
            <div class="breadcrumb-item">Permohonan Masuk</div>
            <div class="breadcrumb-item">Lihat Permohonan</div>
        </div>
    </div>

    <div class="section-body">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-row">
                        <div class="card col-xs-12 col-md-8 col-lg-8">
                            <div class="card-body">
                                <div class="form-row">
                                    <label class="col-sm-3">Id</label>
                                    <label class="col-sm-1">:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{$permohonan->id}}</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3">Tanggal</label>
                                    <label class="col-sm-1">:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{$permohonan->created_at->format('d F Y')}}</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3">Jatuh Tempo</label>
                                    <label class="col-sm-1">:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{$permohonan->created_at->addDays(7)->format('d F Y')}}</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3">Nomor Registrasi</label>
                                    <label class="col-sm-1">:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{$permohonan->kode}}</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3">Judul Permohonan</label>
                                    <label class="col-sm-1">:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{$permohonan->judul}}</label>
                                    </div>
                                </div>
                                <!-- <div class="form-row">
                                    <label class="col-sm-3">Kandungan Informasi</label>
                                    <label class="col-sm-1">:</label>
                                    <div class="col-sm-8">
                                        <label for="">Laporan keuangan Ditjen Otonomii Daerah Kemendagri Tahun 2015</label>
                                    </div>
                                </div> -->
                                <div class="form-row">
                                    <label class="col-sm-3">Tujuan Penggunaan</label>
                                    <label class="col-sm-1">:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{$permohonan->tujuanInformasi}}</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3">Status</label>
                                    <label class="col-sm-1">:</label>
                                    <div class="col-sm-8">
                                        <label for="">Diproses</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3">Lampiran Data</label>
                                    <label class="col-sm-1">:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{$permohonan->file}}</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3">Cataan Petugas</label>
                                    <label class="col-sm-1">:</label>
                                    <div class="col-sm-8">
                                        <label for="">{!! $permohonan->catatan !!}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card col-xs-12 col-md-4 col-lg-4">
                            <div class="card-header">
                                <h5>Data Pemohon</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <label class="col-sm-3 col-md-4 col-lg-">Nama</label>
                                    <label class="col-sm-1 col-md-1 col-lg-">:</label>
                                    <div class="col-sm-5">
                                        <label for="">{{$permohonan->nama}}</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3 col-md-4 col-lg-">Alamat</label>
                                    <label class="col-sm-1 col-md-1 col-lg-">:</label>
                                    <div class="col-sm-5">
                                        <label for="">{{$permohonan->alamat}}</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3 col-md-4 col-lg-">Telepon</label>
                                    <label class="col-sm-1 col-md-1 col-lg-">:</label>
                                    <div class="col-sm-5">
                                        <label for="">{{$permohonan->telepon}}</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3 col-md-4 col-lg-">Email</label>
                                    <label class="col-sm-1 col-md-1 col-lg-">:</label>
                                    <div class="col-sm-5 col-md- col-lg-">
                                        <label for="">{{$permohonan->email}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <a href="{{route('permohonan.pdf', $permohonan)}}" class="btn btn-success mr-1" target="_blank"><i class="fas fa-file-pdf"></i> Bukti Permohonan</a>
                        <a href="{{route('diterima.pdf', $permohonan)}}" class="btn btn-primary" target="_blank"><i class="fas fa-file-pdf"></i> Bukti Proses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection