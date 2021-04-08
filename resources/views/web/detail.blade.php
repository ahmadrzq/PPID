@extends('web/layouts/master')
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="/beranda">Home</a></li>
                <li><a href="#">Dokumen</a></li>
                <li><a href="#">{{$dokumen->judul}}</a></li>
            </ul>
        </div>
    </div>

    <section class="content-blank blue-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8 mb-4">
          <div class="card card-md">
            <div class="d-flex mb-1">
              <div class="d-none d-sm-block head-icon m-t-3">
                <div class="icon-circle rgba-blue m-r-20">
                  <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/inbox.png" class="img-fluid" alt="" width="18">
                </div>
              </div>
              <div>
                <span class="fs-13 text-secondary mb-0">Detail Dokumen</span>
                <p class="text-primary font-600 mb-0">{{$dokumen->judul}}</p>
              </div>
            </div>

            <hr>

            <div class="row m-b-15">
              <div class="col-12 col-sm-3">
                <p class="mb-0">Nomor Dokumen</p>
              </div>

              <div class="col-12 col-sm-9">
                <p class="text-default font-600 mb-0">{{$dokumen->id}}</p>
              </div>
            </div>

            <div class="row m-b-15">
              <div class="col-12 col-sm-3">
                <p class="mb-0">Tanggal Publish</p>
              </div>

              <div class="col-12 col-sm-9">
                <p class="text-default font-600 mb-0">
                {{$dokumen->created_at->format('d F Y')}}</p>
              </div>
            </div>

            <div class="row m-b-15">
              <div class="col-12 col-sm-3">
                <p class="mb-0">Jenis Informasi</p>
              </div>

              <div class="col-12 col-sm-9">
                <p class="text-default font-600 mb-0">{{$dokumen->jenis->nama}}</p>
              </div>
            </div>

            <div class="row m-b-15">
              <div class="col-12 col-sm-3">
                <p class="mb-0">Kategori Dokumen</p>
              </div>

              <div class="col-12 col-sm-9">
                <p class="text-default font-600 mb-0">{{$dokumen->kategori->nama}}</p>
              </div>
            </div>

            <div class="row m-b-15">
              <div class="col-12 col-sm-3">
                <p class="mb-0">Tipe Dokumen</p>
              </div>

              <div class="col-12 col-sm-9">
                                <p class="text-default font-600 mb-0">{{$dokumen->tipe->nama}}</p>
              </div>
            </div>

            <div class="row m-b-15">
              <div class="col-12 col-sm-3">
                <p class="mb-0">Penerbit</p>
              </div>

              <div class="col-12 col-sm-9">
                <p class="text-default font-600 mb-0">Badan Penelitian dan Pengembangan</p>
              </div>
            </div>

            <hr>
            <div class="d-flex justify-content-end">
                    <a href="{{route('download-dok', $dokumen->id)}}" class="btn btn-primary">
                  <i class="fa fa-download mr-1" aria-hidden="true"></i> Download File
                </a>
                          </div>

          </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
          <div class="d-flex align-items-center mb-4">
            <div class="icon-circle rgba-blue">
              <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/contract.png" class="img-fluid" alt="" width="20">
            </div>
            <p class="text-default font-600 mb-0">Kandungan Informasi</p>
          </div>

          <div class="card mb-4">
            <p class="mb-0">{{$dokumen->kandunganInfo}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection