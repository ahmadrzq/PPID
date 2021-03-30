@extends('web/layouts/master')
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

							<!-- <div class="row mb-2">
								<div class="col-12 col-sm-3">
									<p class="mb-0">NIK</p>
								</div>

								<div class="col-12 col-sm-9">
									<p class="text-default font-600 mb-0">3513042911990001</p>
								</div>
							</div> -->

							<div class="row mb-2">
								<div class="col-12 col-sm-3">
									<p class="mb-0">Alamat</p>
								</div>

								<div class="col-12 col-sm-9">
									<p class="text-default font-600 mb-0">{{$user->alamat}}</p>
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
									<a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#UbahPasswordModal"><i class="fa fa-pencil" aria-hidden="true"></i>
										Ubah Password</a>
								</div>
							</div>

							<div class="d-block d-sm-none">
								<div class="d-flex flex-wrap align-items-center justify-content-between">
									<h6 class="text-capitalize head-title mb-0"><i class="fa fa-lock mr-1 text-secondary" aria-hidden="true"></i></h6>
									<a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#UbahPasswordModal"><i class="fa fa-pencil" aria-hidden="true"></i></a>
								</div>
							</div>

							<hr>

							<div class="row mb-2">
								<div class="col-12 col-sm-3">
									<p class="mb-0">Password</p>
								</div>

								<div class="col-12 col-sm-9">
									<input type="password" class="form-control">
								</div>
							</div>
						</div>

						<hr>

						<div class="row">
							<div class="col-12 col-sm-3">
								<p class="mb-0">Terkahir Login</p>
							</div>

							<div class="col-12 col-sm-9">
								<p class="text-primary font-600 mb-0">
									25 March 2021 15:39
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection