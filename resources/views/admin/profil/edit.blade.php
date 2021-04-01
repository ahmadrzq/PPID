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
        <h1>Edit Profil</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{url('dashboard')}}">Dashboard</a></div>
            <div class="breadcrumb-item"> <a href="{{route('profil.index')}}">Profil</a></div>
            <div class="breadcrumb-item">Edit Profil</div>
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

                        <form action="{{route('profil.update', $profils->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                            <div class="col-12 col-sm-12 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="nav nav-pills" id="myTab3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" id="profil-ppid-tab" data-toggle="tab" href="#profilPPID" role="tab" aria-controls="profilPPID" aria-selected="true">Profil PPID</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profil-pejabat-tab" data-toggle="tab" href="#profilPejabat" role="tab" aria-controls="profilPejabat" aria-selected="true">Profil Pejabat Daerah</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="visi-tab" data-toggle="tab" href="#visi" role="tab" aria-controls="visi" aria-selected="true">Visi dan Misi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="tupoksi-tab" data-toggle="tab" href="#tupoksi" role="tab" aria-controls="tupoksi" aria-selected="true">Tupoksi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="struktur-organisasi-tab" data-toggle="tab" href="#strukturOrganisasi" role="tab" aria-controls="strukturOrganisasi" aria-selected="true">Struktur Organisasi PPID</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="struktur-pemerintahan-tab" data-toggle="tab" href="#strukturPemerintahan" role="tab" aria-controls="strukturPemerintahan" aria-selected="true">Struktur Pemerintahan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="sk-tab" data-toggle="tab" href="#sk" role="tab" aria-controls="sk" aria-selected="true">SK & SOP PPID</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="sekretariat-tab" data-toggle="tab" href="#sekretariat" role="tab" aria-controls="sekretariat" aria-selected="true">Sekretariat PPID</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="maskot-tab" data-toggle="tab" href="#maskot" role="tab" aria-controls="maskot" aria-selected="false">Maskot Kota</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="maklumat-tab" data-toggle="tab" href="#maklumat" role="tab" aria-controls="maklumat" aria-selected="false">Maklumat Pelayanan</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade active show" id="profilPPID" role="tabpanel" aria-labelledby="profil-ppid-tab">
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12">
                                                        <textarea class="summernote" name="profil_ppid">{{$profils->profil_ppid}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="visi" role="tabpanel" aria-labelledby="visi-tab">
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12">
                                                        <textarea class="summernote" name="visi_misi">{{$profils->visi_misi}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tupoksi" role="tabpanel" aria-labelledby="tupoksi-tab">
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12">
                                                        <textarea class="summernote" name="tupoksi">{{$profils->tupoksi}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="strukturOrganisasi" role="tabpanel" aria-labelledby="struktur-organisasi-tab">
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12">
                                                        <input type="file" name="struktur_organisasi" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="strukturPemerintahan" role="tabpanel" aria-labelledby="struktur-pemerintahan-tab">
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12">
                                                        <input type="file" name="struktur_pemerintahan" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="sk" role="tabpanel" aria-labelledby="sk-tab">
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12">
                                                        <textarea class="summernote" name="sk">{{$profils->sk}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="sekretariat" role="tabpanel" aria-labelledby="sekretariat-tab">
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12">
                                                        <textarea class="summernote" name="sekretariat_PPID">{{$profils->sekretariat_PPID}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="maskot" role="tabpanel" aria-labelledby="maskot-tab">
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12">
                                                        <textarea class="summernote" name="maskot">{{$profils->maskot}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="maklumat" role="tabpanel" aria-labelledby="maklumat-tab">
                                                <div class="form-group">
                                                    <div class="col-sm-12 col-md-12">
                                                        <input type="file" name="maklumat" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- <div class="form-group">
                                <label class="">Isi Berita</label>
                                <div class="col-sm-12 col-md-12">
                                    <textarea class="summernote" name="isi"></textarea>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <button class="btn btn-primary">Update</button>
                                <a href="{{route('profil.index')}}" class="btn btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection