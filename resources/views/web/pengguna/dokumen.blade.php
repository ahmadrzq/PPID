@extends('web/layouts/master')
@section('judul')
Dokumen
@endsection
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
  <div class="container">
    <div class="breadcrumb">
      <ul>
        <li><a href="http://ppid.kemendagri.go.id">Home</a></li>
        <li><a href="#">Dokumen Saya</a></li>
      </ul>
    </div>
  </div>
  <section class="content-blank blue-section">
    <div class="container">
      @include('web/pengguna/bar')
    </div>
  </section>
  <section class="content-blank dashboard-space">
    <div class="container">
      <h6 class="text-capitalize head-title">Dokumen Saya</h6>
      <p class="head-sub-desc mb-0">Daftar dokumen publik yang telah diunduh</p>

      <hr>

      <div class="table-responsive">
        <table class="table table-document-custom">
          <thead>
            <tr>
              <th>No.</th>
              <th>Judul Dokumen</th>
              <th>Waktu Unduh</th>
              <th><i class="fa fa-download text-white" aria-hidden="true"></i></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="4" align="center">Tidak ada dokumen yang tersedia</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>
</div>
@endsection