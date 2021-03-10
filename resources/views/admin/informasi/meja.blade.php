@extends('admin/layouts/master')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Meja Layanan</h1>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kode Dokumen</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>Kartu Identitas</label>
                            <select class="form-control">
                                <option>KTP</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Nomor Kartu Identitas</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-2">
                            <label>Jenis Kelamin</label>
                            <select class="form-control">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Judul Informasi Publik</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Alamat</label><br>
                            <label></label>
                            <textarea class="form-control" style=" height: 100px;"></textarea>
                        </div>
                        <div class="form-group col-md-6" col-md-6>
                        <label>Kandungan informasi yang dibutuhkan</label><br>
                            <label>Tujuan penggunaan informasi</label>
                            <textarea class="form-control" style="height: 100px;"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Kota</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Pos</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Provinsi</label>
                            <select class="form-control">
                                <option>Bali</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                        
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Telepon</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>No HP</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection