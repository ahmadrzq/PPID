@extends('admin/layouts/master')
@section('judul')
Tambah Slider
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Tambah Slider</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{url('dashboard')}}">Dashboard</a></div>
            <div class="breadcrumb-item"> <a href="{{route('slider.index')}}">Slider</a></div>
            <div class="breadcrumb-item">Tambah Slider</div>
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

                        <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Thumbnail</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Tambah</button>
                                <a href="{{route('slider.index')}}" class="btn btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection