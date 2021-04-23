@extends('web/layouts/master')
@section('judul')
Profil
@endsection
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
	<div class="container">
		<div class="breadcrumb">
			<ul>
				<li><a href="{{url('beranda')}}">Home</a></li>
				<li><a href="#">Akun Saya</a></li>
			</ul>
		</div>
	</div>

	<section class="content-blank blue-section">
		<div class="container">
			<h5 class="text-capitalize head-title">Akun Saya</h5>
			<p class="head-sub-desc">Data yang sudah didaftarkan tidak dapat diubah, anda hanya dapat mengubah password.</p>

			<div class="row">
				<div class="col-12 col-lg-12 mb-4">
					<div class="card card-md">

						<form action="{{route('pengguna.profil.update', $user->id)}}" method="POST">
						@csrf
							<div class="m-b-50">
								<div class="d-none d-sm-block">
									<div class="d-flex flex-wrap align-items-center justify-content-between">
										<h6 class="text-capitalize head-title mb-0"><i class="fa fa-user-circle mr-1 text-secondary" aria-hidden="true"></i>
											Informasi Pribadi</h6>

									</div>
								</div>

								<hr>
								<div class="row mb-2">
									<div class="col-12 col-sm-3">
										<p class="mb-0">Nama Lengkap</p>
									</div>

									<div class="col-12 col-sm-9">
										<p class="text-default font-600 mb-0">{{$user->name}}</p>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-12 col-sm-3">
										<p class="mb-0">NIK</p>
									</div>

									<div class="col-12 col-sm-9">
										<p class="text-default font-600 mb-0">{{$user->nik}}</p>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-12 col-sm-3">
										<p class="mb-0">Alamat</p>
									</div>

									<div class="col-12 col-sm-9">
										<p class="text-default font-600 mb-0">{{$user->alamat}}</p>
									</div>
								</div>
								<div class="row mb-2">
									<div class="col-12 col-sm-3">
										<p class="mb-0">Kota</p>
									</div>

									<div class="col-12 col-sm-9">
										<p class="text-default font-600 mb-0">{{$user->kota}}</p>
									</div>
								</div>
								<div class="row mb-2">
									<div class="col-12 col-sm-3">
										<p class="mb-0">Pos</p>
									</div>

									<div class="col-12 col-sm-9">
										<p class="text-default font-600 mb-0">{{$user->pos}}</p>
									</div>
								</div>
								<div class="row mb-2">
									<div class="col-12 col-sm-3">
										<p class="mb-0">Jenis Kelamin</p>
									</div>

									<div class="col-12 col-sm-9">
										<p class="text-default font-600 mb-0">{{$user->jenisKelamin}}</p>
									</div>
								</div>
								<div class="row mb-2">
									<div class="col-12 col-sm-3">
										<p class="mb-0">Tanggal Lahir</p>
									</div>

									<div class="col-12 col-sm-9">
										<p class="text-default font-600 mb-0">{{$user->tanggalLahir}}</p>
									</div>
								</div>
								<div class="row mb-2">
									<div class="col-12 col-sm-3">
										<p class="mb-0">Tempat Lahir</p>
									</div>

									<div class="col-12 col-sm-9">
										<p class="text-default font-600 mb-0">{{$user->tempatLahir}}</p>
									</div>
								</div>
							</div>

							<div class="m-b-50">
								<div class="d-none d-sm-block">
									<div class="d-flex flex-wrap align-items-center justify-content-between">
										<h6 class="text-capitalize head-title mb-0"><i class="fa fa-envelope mr-1 text-secondary" aria-hidden="true"></i> Email dan
											Telepon</h6>
									</div>
								</div>
								<hr>

								<div class="row mb-2">
									<div class="col-12 col-sm-3">
										<p class="mb-0">Email</p>
									</div>

									<div class="col-12 col-sm-9">
										<p class="text-default font-600 mb-0">{{$user->email}}</p>
									</div>
								</div>

								<div class="row mb-2">
									<div class="col-12 col-sm-3">
										<p class="mb-0">No. Kontak</p>
									</div>

									<div class="col-12 col-sm-9">
										<p class="text-default font-600 mb-0">{{$user->telepon}}</p>
									</div>
								</div>
							</div>

							<div class="m-b-2">
								<div class="d-none d-sm-block">
									<div class="d-flex flex-wrap align-items-center justify-content-between">
										<h6 class="text-capitalize head-title mb-0"><i class="fa fa-lock mr-1 text-secondary" aria-hidden="true"></i> Password</h6>
									</div>
								</div>

								<hr>
								<p class="mb-3">Jika ingin mengganti password, cukup dengan isikan dibawah ini dan klik ubah password, jika tidak ingin mengganti password, maka biarkan kosongi</p>

								<div class="row mb-2">
									<div class="col-12 col-sm-3">
										<p class="mb-0">Password</p>
									</div>

									<div class="col-12 col-sm-9">
										<input type="text" name="password" class="form-control">
									<button class="btn btn-primary btn-xs mt-3">Ubah Password</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection