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
                                    <label class="col-sm-3">Nomor Permohonan</label>
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
                                    <label class="col-sm-3">Nomor DIP</label>
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
                                        <!-- <label for="">Menunggu</label> -->
                                            @if($permohonan->status === 0 )
                                                <label for="">Menunggu dong</label>
                                            @elseif($permohonan->status === 1 )
                                                <label for="">Diterima</label>
                                            @elseif($permohonan->status === 2 )
                                                <label for="">Proses</label>
                                            @elseif($permohonan->status === 3 )
                                                <label for="">Ditolak</label>
                                            @endif
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
                                <!-- <div class="form-row">
                                    <label class="col-sm-3 col-md-4 col-lg-">HP</label>
                                    <label class="col-sm-1 col-md-1 col-lg-">:</label>
                                    <div class="col-sm-5">
                                        <label for="">01238123123</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <label class="col-sm-3 col-md-4 col-lg-">Email</label>
                                    <label class="col-sm-1 col-md-1 col-lg-">:</label>
                                    <div class="col-sm-5 col-md- col-lg-">
                                        <label for="">email@gmail.com</label>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning col-12" disabled>Keputusan PPID Diproses</button>
                    </div>
                    <div class="form-group">
                        <div class="form-group col-8">
                            <label>Lampirkan Dokumen Baru</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="form-group">
                        <label class="">Catatan/Keterangan Petugas</label>
                        <div class="col-sm-12 col-md-12">
                            <textarea class="summernote"></textarea>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Proses Permohonan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection