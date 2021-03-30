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
        <h1>Tambah Berita</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{url('dashboard')}}">Dashboard</a></div>
            <div class="breadcrumb-item"> <a href="{{route('berita.index')}}">Berita</a></div>
            <div class="breadcrumb-item">Tambah Berita</div>
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

                        <form action="{{route('berita.update', $berita->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="judul" value="{{$berita->judul}}">
                            </div>
                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" class="form-control" name="author" value="{{$berita->author}}">
                            </div>
                            <div class="form-group">
                                <label class="">Isi Berita</label>
                                <div class="col-sm-12 col-md-12">
                                    <textarea class="summernote" name="isi">{{$berita->isi}}</textarea>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label>File</label>
                                <input type="file" class="form-control">
                            </div> -->
                            <div class="form-group">
                                <button class="btn btn-primary">Update</button>
                                <a href="{{route('berita.index')}}" class="btn btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection