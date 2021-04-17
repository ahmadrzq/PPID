@extends('admin/layouts/master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Daftar Pengguna</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Pengguna</div>
            <div class="breadcrumb-item">Daftar Pengguna</div>
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
                <div class="form-group">
                    <a href="{{url('/user/cetak_pdf')}}" class="btn btn-primary" target="_blank"><i class="fas fa-file-pdf"></i> Cetak PDF</a>
                    <a href="{{route('dashboard.user.create')}}" class="btn btn-success"><i class="fas fa-user-plus"></i> Tambah User</a>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-action col-12">
                            <form>
                                <div class="form-row">
                                    <form action="/dashboard/user" method="get">
                                        <div class="form-row col-md-10 text-center">
                                            <div class="form-group col-md-3">
                                                <label>Berdasarkan ID</label>
                                                <input type="text" name="id" class="form-control text-center" style="height: 42px;" placeholder="ID Pengguna">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Berdasarkan Nama</label>
                                                <input type="text" name="name" class="form-control text-center" style="height: 42px;" placeholder="Nama Pengguna">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Berdasarkan Email</label>
                                                <input type="text" name="email" class="form-control text-center" style="height: 42px;" placeholder="Email Pengguna">
                                            </div>
                                            <!-- <div class="form-group col-md-3">
                                            <label>Berdasarkan Peran</label>                                            
                                            <select class="form-control text-center" name='role'>
                                            @foreach ($role as $rol)
                                                <option value="{{$rol->id}}">{{$rol->name}}</option>
                                            @endforeach
                                            </select>                                            
                                        </div> -->
                                        </div>
                                        <div class="form-group col-md-2">
                                            <br>
                                            <button class="btn btn-primary">Cari <i class="fas fa-search"></i></button>
                                            <!-- <button class="btn btn-secondary">Reset</button> -->
                                        </div>
                                    </form>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>ID</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                @foreach($users as $user => $hasil)
                                <tr>
                                    <td>{{ $user + $users->firstItem() }}</td>
                                    <td><a href="">{{$hasil->name}}</a></td>
                                    <td>{{$hasil->email}}</td>
                                    <td>{{implode(',', $hasil->roles()->get()->pluck('name')->toArray())}}</td>
                                    <td>{{$hasil->id}}</td>
                                    <td class="text-center" style="width: 15%;">
                                        <form action="{{route('dashboard.user.destroy', $hasil->id)}}" method="POST">
                                            {{method_field('DELETE')}}
                                            @csrf
                                            <a href="{{route('dashboard.user.show', $hasil->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection