@extends('admin/layouts/master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Slider</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Slider</div>
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
                    <a href="{{route('slider.create')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Slide Gambar</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($slider as $result => $hasil)
                                <tr>
                                    <td>{{ $result + $slider->firstItem() }}</td>
                                    <td><img src="{{$hasil->gambar}}" alt="" style="width:100px;"></td>
                                    <td class="text-center" style="width: 20%;">
                                        <form action="{{route('slider.destroy', $hasil->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="{{route('slider.edit', $hasil->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            {{$slider->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection