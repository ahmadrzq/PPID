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
                <form action="{{route('input-info')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama</label>
                            <input name="nama" type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kode Dokumen</label>
                            <input name="kode" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Nomor Kartu Identitas</label>
                            <input name="nik" type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="jenisKelamin">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Judul Informasi Publik</label>
                            <input name="judul" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Tempat Lahir</label>
                            <input name="tempatLahir" type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Tanggal Lahir</label>
                            <input name="tanggalLahir" type="date" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Alamat</label><br>
                            <label></label>
                            <textarea name="alamat" class="form-control" style=" height: 100px;"></textarea>
                        </div>
                        <div class="form-group col-md-6" col-md-6>
                        <label>Kandungan informasi yang dibutuhkan</label><br>
                            <label>Tujuan penggunaan informasi</label>
                            <textarea name="tujuanInformasi" class="form-control" style="height: 100px;"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Kota</label>
                            <input name="kota" type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Pos</label>
                            <input name="pos" type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Provinsi</label>
                            <select class="form-control" name="provinsi">
                            @foreach ($provinsi as $pvs)
                            <option value="{{$pvs->id}}">{{$pvs->nama}}</option>   
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                        
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Telepon</label>
                            <input name="telepon" type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection