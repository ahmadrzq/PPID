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
        <h1>Input Dokumen</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Dokumen Informasi Publik</div>
            <div class="breadcrumb-item">Input Dokumen</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label>Judul</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Kategori</label>
                                <select class="form-control">
                                    <option>Berkala</option>
                                    <option>Serta Merta</option>
                                    <option>Setiap Saat</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label class="">Kandungan Informasi</label>
                                <div class="col-sm-12 col-md-12">
                                    <textarea class="summernote"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <select class="form-control">
                                        <option>Profil Badan Publik</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control">
                                        <option>Audio</option>
                                        <option>Video</option>
                                        <option>Teks</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Filename</label>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Status Dokumen</label>
                                    <select class="form-control">
                                        <option>Draft</option>
                                        <option>Terbit</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label>Terbitkan Sebagai</label>
                                <select class="form-control">
                                    <option>PPID Kota Probolinggo</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <button class="btn btn-primary">Proses</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection