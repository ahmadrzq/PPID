@extends('admin/layouts/master')
@section('judul')
Riwayat Pengguna
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Pengguna Publik</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Pengguna Publik</div>
            <div class="breadcrumb-item">Daftar Pengguna Publik</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <button class="btn btn-primary"><i class="fas fa-file-pdf"></i> Ekspor PDF</button>
                    <button class="btn btn-success"><i class="fas fa-user-plus"></i> Tambah</button>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-action col-12">
                            <form>
                                <div class="form-row">
                                    <div class="form-row col-md-10 text-center">
                                        <div class="form-group col-md-3">
                                            <label>Berdasarkan ID</label>
                                            <input type="text" class="form-control text-center" style="height: 42px;" placeholder="ID Pengguna">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Berdasarkan Nama</label>
                                            <input type="text" class="form-control text-center" style="height: 42px;" placeholder="Nama Pengguna">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Berdasarkan alamat</label>
                                            <input type="text" class="form-control text-center" style="height: 42px;" placeholder="Alamat Pengguna">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Berdasarkan Jenis</label>
                                            <select class="form-control text-center">
                                                <option value="">Semua Jenis</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <br>
                                        <button class="btn btn-primary">Cari <i class="fas fa-search"></i></button>
                                        <button class="btn btn-secondary">Reset</button>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Identitas</th>
                                    <th>Nama Lengkap/Organisasi</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Telepon(mobile)</th>
                                    <th>Jenis</th>
                                    <th>Scan Identitas</th>
                                    <th>Riwayat Dokumen</th>
                                    <th>Permintaan Informasi</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>12313123</td>
                                    <td>Akatsuki</td>
                                    <td>Desa Kirigakure</td>
                                    <td>janis@gmail.com</td>
                                    <td>01923123112</td>
                                    <td>Individual</td>
                                    <td>Scan Identitas</td>
                                    <td><button class="btn btn-success"><i class="fas fa-list"></i> Riwayat Dokumen</button></td>
                                    <td><button class="btn btn-success"><i class="fas fa-list"></i> Permintaan Informasi</button></td>
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