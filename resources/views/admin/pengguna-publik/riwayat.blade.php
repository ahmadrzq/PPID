@extends('admin/layouts/master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Riwayat Dokumen</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Pengguna Publik</div>
            <div class="breadcrumb-item">Riwayat Dokumen</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</button>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Ringkasan</th>
                                    <th>Penanggungjawab Penerbitan</th>
                                    <th>Kode Dokumen</th>
                                    <th>Bentuk Informasi</th>
                                    <th>Jenis Infromasi</th>
                                    <th>Retensi Arsip</th>
                                    <th>Ukuran File</th>
                                    <th>Status Pemohon</th>
                                    <th>Feedback</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Jukni BOS 2021</td>
                                    <td>13 Maret 2021</td>
                                    <td>Pengadaan Barang dan Jasa</td>
                                    <td>Juknis BOS 2013 dikpora NTB</td>
                                    <td>bidang-dokumentasi</td>
                                    <td>dik-01</td>
                                    <td>Teks</td>
                                    <td>Berkala</td>
                                    <td>13 Maret 2021</td>
                                    <td>-</td>
                                    <td>Pasif</td>
                                    <td>-</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection