@extends('admin/layouts/master')
@section('judul')
Tambah Pengguna
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
        <h1>Tambah Pengguna</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Pengguna</div>
            <div class="breadcrumb-item">Tambah Pengguna</div>
        </div>
    </div>

    @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            {{$error}}
        </div>
    </div>
    @endforeach
    @endif



    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            {{Session('success')}}
        </div>
    </div>
    @endif

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{route('dashboard.user.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Nama Lengkap <span style="color: red;">*</span></label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>NIK <span style="color: red;">*</span></label>
                                    <input type="text" name="nik" value="{{ old('nik') }}" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Email <span style="color: red;">*</span></label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Telepon <span style="color: red;">*</span></label>
                                    <input type="text" name="telepon" value="{{ old('telepon') }}" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Alamat <span style="color: red;">*</span></label>
                                    <textarea style="height: 100px;" name="alamat" value="{{ old('alamat') }}" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kota <span style="color: red;">*</span></label>
                                    <input type="text" name="kota" value="{{ old('kota') }}" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Kode Pos <span style="color: red;">*</span></label>
                                    <input type="text" name="pos" value="{{ old('pos') }}" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jenis Kelamin <span style="color: red;">*</span></label>
                                    <select name="jenisKelamin" class="form-control" id="">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Tanggal Lahir <span style="color: red;">*</span></label>
                                    <input type="date" name="tanggalLahir" value="{{ old('tanggalLahir') }}" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tempat Lahir <span style="color: red;">*</span></label>
                                    <input type="text" name="tempatLahir" value="{{ old('tempatLahir') }}" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Role <span style="color: red;">*</span></label>
                                    <select name="role" class="form-control" id="">
                                        <option value="">Pilih Role</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Petugas</option>
                                        <option value="3">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <a href="{{route('dashboard.user.index')}}" class="btn btn-danger mr-1">Kembali</a>
                                <button class="btn btn-success">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection