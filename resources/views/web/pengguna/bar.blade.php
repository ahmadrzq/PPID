<div class="row justify-content-between">
    <div class="col-12 col-md-4 line-col line-far mt-2 mb-2">
        <h6 class="text-default mb-4 font-600">Informasi Pengguna</h6>
        <div class="d-flex flex-wrap">
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
                <a href="{{route('menu.index')}}" class="">
                    <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                        <i class="fas fa-tachometer-alt fa-3x"></i>
                    </div>
                    <p class="text-default">Dashboard</p>
                </a>
            </li>

            <li>
                <a href="{{route('menu.ajukan')}}" class="">
                    <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                        <i class="fas fa-edit fa-3x"></i>
                    </div>
                    <p class="text-default">Ajukan Permohonan</p>
                </a>
            </li>

            <li>
                <a href="{{route('menu.permohonan')}}" class="">
                    <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                        <i class="fas fa-database fa-3x"></i>
                    </div>
                    <p class="text-default">Permohonan Saya</p>
                </a>
            </li>

            <!-- <li>
                <a href="{{route('menu.keberatan')}}" class="">
                    <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                        <i class="fas fa-clipboard-list fa-3x"></i>
                    </div>
                    <p class="text-default">Keberatan Saya</p>
                </a>
            </li>

            <li>
                <a href="{{route('menu.dokumen')}}" class="">
                    <div class="icon-circle cirlce-xl rgba-blue mb-3 ml-auto mr-auto">
                        <i class="fas fa-file-alt fa-3x"></i>
                    </div>
                    <p class="text-default">Dokumen Saya</p>

                </a>
            </li> -->
        </ul>
    </div>
</div>