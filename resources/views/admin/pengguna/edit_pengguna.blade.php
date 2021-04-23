@extends('admin/layouts/master')
@section('judul')
Edit Pengguna
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
        <h1>Edit Pengguna</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Pengguna</div>
            <div class="breadcrumb-item">Edit Pengguna</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group col-md-6">
                            <label>Nama Pengguna <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" value="amin">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email Pengguna <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" value="amin@amin.com">
                        </div>
                        <div class="form-group col-md-6">
                            <label>URL Pengguna</label>
                            <input type="text" class="form-control" value="amina">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Peran Pengguna <span style="color: red;">*</span></label>
                            <select class="form-control">
                                <option>Meja Informasi</option>
                                <option>Admin</option>
                                <option>Dokumentasi</option>
                                <option>Pimpinan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Password Pengguna <span style="color: red;">*</span></label>
                            <input type="password" class="form-control" value="1231312">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Konfirmasi Password Pengguna <span style="color: red;">*</span></label>
                            <input type="password" class="form-control" value="123123112">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Deskripsi Pengguna</label>
                            <div class="col-sm-12 col-md-12">
                                <textarea class="summernote">akqwoirhqorqwr</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <button class="btn btn-danger mr-1 mb-1"><i class="fas fa-arrow-left"></i> Batal</button>
                            <button class="btn btn-success mr-1 mb-1"><i class="fas fa-save"></i> Simpan</button>
                            <button class="btn btn-warning mr-1 mb-1"><i class="fas fa-trash"></i> Kosongkan</button>
                            <button class="btn btn-info"><i class="fas fa-key"></i> Ganti Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection