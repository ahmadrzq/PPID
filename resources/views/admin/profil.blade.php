@extends('admin/layouts/master')
@section('judul')
Profil
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Profil</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Profil</div>
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
        <h2 class="section-title">Hi, {{$user->name}}</h2>
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <form method="POST" action="{{route('profil.user.update', $user->id)}}">
                        @csrf
                        <div class="card-header">
                            <h4>Profil</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" readonly value="{{$user->name}}">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>NIK</label>
                                    <input type="text" class="form-control" readonly value="{{$user->nik}}">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" readonly value="{{$user->alamat}}">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Kota</label>
                                    <input type="text" class="form-control" readonly value="{{$user->kota}}">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Pos</label>
                                    <input type="text" class="form-control" readonly value="{{$user->pos}}">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" class="form-control" readonly value="{{$user->jenisKelamin}}">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" class="form-control" readonly value="{{$user->tanggalLahir}}">
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" readonly value="{{$user->tempatLahir}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-12">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 col-12">
                                    <button class="btn btn-primary">Ubah Password</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection