<div class="fixed-top">
    <!-- Navbar Menu Desktop -->
    <nav class="navbar navbar-expand-lg desktop-navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand brand-area pt-0" href="http://ppid.kemendagri.go.id">
                    <img src="{{asset('web/images/logokota.png')}}" alt="" class="img-fluid logo-home">
                    <div class="brand-text">
                        <div class="subtitle">PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI</div>
                        <div class="title">KOTA PROBOLINGGO</div>
                        <div class="address">Jl. Dr. Moch Saleh No. 5 Probolinggo</div>
                    </div>
                </a>
            </div>
            <div id="ShowMenuMobile" class="navbar-toggler">
                <i class="fa fa-bars text-white" aria-hidden="true"></i>
            </div>

            <div class="collapse navbar-collapse justify-content-end" id="navbarDesktop">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="http://ppid.kemendagri.go.id">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://ppid.kemendagri.go.id/profil">Profil</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="http://ppid.kemendagri.go.id/front/member/permohonan/ajukan">Permohonan Informasi</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="http://ppid.kemendagri.go.id/front/member/permohonan/ajukan">Berita</a>
                    </li>
                </ul>
                <ul class="navbar-nav nav-line">
                    <li class="nav-item ">
                        <a class="nav-link" href="http://ppid.kemendagri.go.id/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link search-icon-btn" href="javascript:void(0)">
                            <i class="fa fa-search search-circle" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                <!-- <ul class="navbar-nav nav-line">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu Saya
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="http://ppid.kemendagri.go.id/front/member/home"><i class="fa fa-database mr-2" aria-hidden="true"></i> Dashboard</a>
                            <a class="dropdown-item" href="http://ppid.kemendagri.go.id/front/member/profile"><i class="fa fa-user-circle mr-2" aria-hidden="true"></i> Akun Saya</a>
                            <a class="dropdown-item" href="http://ppid.kemendagri.go.id/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off mr-2" aria-hidden="true"></i> Logout</a>
                            <form id="logout-form" action="http://ppid.kemendagri.go.id/logout" method="POST" style="display: none;"><input type="hidden" name="_token" value="phTZRSxVWUuhY1FW2mYMenlOMHJRU6Wft0gIiwNX"></form>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link search-icon-btn" href="javascript:void(0)">
                            <i class="fa fa-search search-circle" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul> -->
            </div>
        </div>
    </nav>

    <!-- Sidebar Menu Mobile -->
    <div id="mySidenav" class="sidenav">
        <div class="container-fluid">
            <div class="closebtn text-gold" id="CloseMenuMobile">
                <svg width="15" height="15" viewBox="0 0 16 16">
                    <path fill="#FFF" fill-rule="evenodd" d="M16 1.622L9.622 8 16 14.378 14.378 16 8 9.622 1.622 16 0 14.378 6.378 8 0 1.622 1.622 0 8 6.378 14.378 0z">
                    </path>
                </svg>
            </div>

            <div class="mt-5 mb-3 text-center">
                <img src="{{asset('web/images/logo.png')}}" width="40" class="img-fluid" alt="">
                <div class="brand-text brand-mobile">
                    <div class="subtitle">PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI</div>
                    <div class="title">KEMENTERIAN DALAM NEGERI</div>
                    <div class="address">JALAN MERDEKA UTARA NO 7 GAMBIR JAKARTA PUSAT, 021-3843222</div>
                </div>
            </div>

            <ul class="navbar-nav-mobile m-t-40">
                <li class="">
                    <a href="http://ppid.kemendagri.go.id">Beranda</a>
                </li>
                <li class="active">
                    <a href="http://ppid.kemendagri.go.id/profil">Profil</a>
                </li>
                <li class="">
                    <a href="http://ppid.kemendagri.go.id/front/member/permohonan/ajukan">Permohonan Informasi</a>
                </li>
            </ul>

            <hr>

            <div class="d-flex-center">
                <p class="mb-0"><a href="http://ppid.kemendagri.go.id/login" class="text-white text-uppercase">Login</a></p>
                <div class="text-white mr-3 ml-3">|</div>
                <a class="search-icon-btn" href="javascript:void(0)">
                    <p class="mb-0"><i class="fa fa-search text-white" aria-hidden="true"></i></p>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Show Search Bar -->
<div id="BlockSearchForm" class="off">
    <div id="search" class="open">
        <div class="container h-100">
            <button data-widget="remove" id="RemoveClass" class="close" type="button">
                <svg width="15" height="15" viewBox="0 0 16 16">
                    <path fill="#333" fill-rule="evenodd" d="M16 1.622L9.622 8 16 14.378 14.378 16 8 9.622 1.622 16 0 14.378 6.378 8 0 1.622 1.622 0 8 6.378 14.378 0z">
                    </path>
                </svg>
            </button>

            <div class="row h-100">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <form action="http://ppid.kemendagri.go.id/front/dokumen/search" method="GET" class="form-search-section">
                        <h5 class="text-default font-600">Cari Dokumen dan Informasi</h5>
                        <input type="text" name="search" value="" id="term">
                        <input type="hidden" name="category" value="1" />
                        <input type="hidden" name="area" value="kemendagri" />
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                <i class="fa fa-search mr-1" aria-hidden="true"></i> Cari
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>