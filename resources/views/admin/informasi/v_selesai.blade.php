@extends('admin/layouts/master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Permohonan Selesai</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Permohonan Informasi</div>
            <div class="breadcrumb-item">Permohonan selesai</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Nomor</th>
                                    <th>Judul Informasi</th>
                                    <th>Status</th>
                                    <th>Petugas</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><label for="">12313123123 <br><i class="fas fa-calendar-week"></i> 12 November 2021</label>
                                    </td>
                                    <td><label for="">Laporan Kinerja <br><i class="fas fa-user"></i>Yayan <i class="fas fa-shield-alt"></i>PPID Kota Probolinggo</label>
                                    </td>
                                    <td>Selesai</td>
                                    <td>not set</td>
                                    <td><a href=""><i class="fas fa-folder-open"></i></a></td>
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