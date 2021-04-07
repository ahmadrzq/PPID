@extends('admin/layouts/master')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Detail Pengguna</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Pengguna</div>
            <div class="breadcrumb-item">Detail Pengguna</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Nama Lengkap </label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label>NIK </label>
                                <input type="text" name="nik" value="{{ $user->nik }}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Email </label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Telepon </label>
                                <input type="text" name="telepon" value="{{ $user->telepon }}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Alamat </label>
                                <textarea style="height: 100px;" name="alamat"  class="form-control" disabled>{{$user->alamat}}</textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kota </label>
                                <input type="text" name="kota" value="{{ $user->kota }}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Kode Pos </label>
                                <input type="text" name="pos" value="{{ $user->pos }}" class="form-control" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jenis Kelamin </label>
                                <input type="text" name="jenisKelamin" value="{{ $user->jenisKelamin }}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Tanggal Lahir </label>
                                <input type="date" name="tanggalLahir" value="{{ $user->tanggalLahir }}" class="form-control" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tempat Lahir </label>
                                <input type="text" name="tempatLahir" value="{{ $user->tempatLahir }}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Role </label>
                                <input type="text" name="role" value="{{implode(',', $user->roles()->get()->pluck('name')->toArray())}}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <a href="{{route('dashboard.user.index')}}" class="btn btn-danger mr-1">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection