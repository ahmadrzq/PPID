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
        <h1>Berita</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Berita</div>
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
                    <a href="{{route('berita.create')}}" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Berita</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Author</th>
                                    <th>Isi</th>
                                    <th>Gambar</th>
                                    <th>Tanggal</th>
                                    <th></th>
                                </tr>
                                @foreach($berita as $result => $hasil)
                                <tr>
                                    <td>{{ $result + $berita->firstItem() }}</td>
                                    <td>{{$hasil->judul}}</td>
                                    <td>{{$hasil->author}}</td>
                                    <td>{{ str_limit($hasil->isi,50) }}</td>
                                    <td><img src="{{$hasil->image}}" alt="" style="width:100px;"></td>
                                    <td>{{ Carbon\Carbon::parse($hasil->created_at)->format("l, d M Y") }}</td>                                    
                                    <td class="text-center" style="width: 20%;">
                                        <form action="{{route('berita.destroy', $hasil->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="{{route('berita.edit', $hasil->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            {{$berita->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cetak Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Jenis</label>
                    <select class="form-control">
                        <option>- Semua Jenis -</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control">
                        <option>- Semua Kategori -</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Penerbit</label>
                    <select class="form-control">
                        <option>PPID Kota Probolinggo</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label>Tanggal Awal</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group col-6">
                        <label>Tanggal Akhir</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-print"></i> Cetak Laporan</button>
            </div>
        </div>
    </div>
</div>
@endsection