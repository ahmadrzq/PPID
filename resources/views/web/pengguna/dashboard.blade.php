@extends('web/layouts/master')
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="http://ppid.kemendagri.go.id">Home</a></li>
                <li><a href="#">Dashboard</a></li>
            </ul>
        </div>
    </div>
    <section class="content-blank blue-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-4 line-col line-far mt-2 mb-2">
                    <h6 class="text-default mb-4 font-600">Informasi Pengguna</h6>
                    <div class="d-flex flex-wrap">
                        <div class="img-circle circle-lg">
                            <img src="http://ppid.kemendagri.go.id/avatars/default.png" class="img-fluid mr-3" alt="">
                        </div>

                        <div class="profil-dashboard col-12 col-sm-8 p-0">
                            <div class="mb-2">
                                <span class="fs-12 text-secondary mb-1">{{$user->name}}</span>
                                <p class="text-default font-600">{{implode(',', $user->roles()->get()->pluck('name')->toArray())}}</p>
                            </div>

                            <div class="mb-2">
                                <span class="fs-12 text-secondary mb-1">Terakhir Login</span>
                                <p class="text-default font-600">25 March 2021 15:39</p>
                            </div>

                            <a href="{{route('pengguna.profil')}}" class="btn btn-primary btn-xs">Lihat Profil</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-7 mt-2 mb-2">
                    <h6 class="text-default mb-4 font-600">Fasilitas Saya</h6>
                    <ul class="menu-dashboard">
                        <li>
                            <a href="http://ppid.kemendagri.go.id/front/member/home" class="active">
                                <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                                    <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/dashboard.png" class="img-fluid" alt="" width="35">
                                </div>
                                <p class="text-default">Dashboard</p>
                            </a>
                        </li>

                        <li>
                            <a href="http://ppid.kemendagri.go.id/front/member/permohonan/ajukan" class="">
                                <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                                    <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/submission.png" class="img-fluid" alt="" width="35">
                                </div>
                                <p class="text-default">Ajukan Permohonan</p>
                            </a>
                        </li>

                        <li>
                            <a href="http://ppid.kemendagri.go.id/front/member/permohonan/data" class="">
                                <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                                    <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/message.png" class="img-fluid" alt="" width="35">
                                </div>
                                <p class="text-default">Permohonan Saya</p>
                            </a>
                        </li>

                        <li>
                            <a href="http://ppid.kemendagri.go.id/front/member/keberatan/data" class="">
                                <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                                    <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/rejected.png" class="img-fluid" alt="" width="35">
                                </div>
                                <p class="text-default">Keberatan Saya</p>
                            </a>
                        </li>

                        <li>
                            <a href="http://ppid.kemendagri.go.id/front/member/dokumen/riwayat" class="">
                                <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                                    <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/inbox.png" class="img-fluid" alt="" width="35">
                                </div>
                                <p class="text-default">Dokumen Saya</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="content-blank dashboard-space">

    </section>
</div>

@endsection