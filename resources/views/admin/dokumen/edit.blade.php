@extends('admin/layouts/master')
@section('judul')
Edit Dokumen
@endsection
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
        <h1>Edit Dokumen</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Dokumen Informasi Publik</div>
            <div class="breadcrumb-item">Edit Dokumen</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <form action="{{route('update-dokumen', $dokumen->id)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-8">
                                <label>Judul</label>
                                <input name="judul" type="text" class="form-control" value="{{$dokumen->judul}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori_id">
                                @foreach ($kategori as $ktg)
                                    <option value="{{$ktg->id}}">{{$ktg->nama}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label class="">Kandungan Informasi</label>
                                <div class="col-sm-12 col-md-12">
                                    <textarea name="kandunganInfo" class="summernote">{{$dokumen->kandunganInfo}}</textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <select class="form-control" name="jenis_id">
                                    @foreach ($jenis as $jns)
                                        <option value="{{$jns->id}}">{{$jns->nama}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control" name="tipe_id">
                                    @foreach ($tipe as $tp)
                                        <option value="{{$tp->id}}">{{$tp->nama}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Filename</label>
                                    <input name="oldfile" type="text" class="form-control d-none" value="{{$dokumen->file}}">
                                    <input name="file" type="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea name="keterangan" class="form-control">{{$dokumen->keterangan}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Status Dokumen</label>
                                    <select class="form-control" name="status_dokumen_id">
                                    @foreach ($status_dokumen as $sd)
                                        <option value="{{$sd->id}}">{{$sd->nama}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label>Terbitkan Sebagai</label>
                                <select class="form-control" name="dinas_id">
                                @foreach ($dinas as $dn)
                                    <option value="{{$dn->id}}">{{$dn->nama}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <button class="btn btn-primary" type="submit">Proses</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection