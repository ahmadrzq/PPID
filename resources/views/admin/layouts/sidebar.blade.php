<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{url('dashboard')}}">PPID Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('dashboard')}}">PPID</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="nav-item dropdown">
                <a href="{{route('profil.index')}}" class="nav-link "><i class="fas fa-id-card"></i><span>Profil PPID</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-database"></i><span>Permohonan Informasi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{url('dashboard/informasi/meja')}}">Meja Layanan</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/informasi/masuk')}}">Permohonan Masuk</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/informasi/view-proses')}}">Permohonan Diproses</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/informasi/view-selesai')}}">Permohonan Selesai</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/informasi/view-ditolak')}}">Permohonan Ditolak</a></li>
                    <!-- <li><a class="nav-link" href="{{url('dashboard/informasi/view-keberatan')}}">Keberatan</a></li> -->
                    <li><a class="nav-link" href="{{url('dashboard/informasi/view-permohonan')}}">Semua Permohonan</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/informasi/view-pemohon')}}">Data Pemohon</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Dokumen Informasi Publik</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{url('dashboard/dokumen/input')}}">Input Dokumen</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/dokumen/view')}}">Semua Dokumen</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/dokumen/draft')}}">Menunggu Persetujuan</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/dokumen/publish')}}">Dipublikasikan</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users-cog"></i><span>Pengguna</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('dashboard.user.index')}}">Daftar Pengguna</a></li>
                    <li><a class="nav-link" href="{{route('dashboard.user.create')}}">Tambah Pengguna</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Pengguna Publik</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="index-0.html">Daftar Pengguna Publik</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-newspaper"></i><span>Berita</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('berita.index')}}">List Berita</a></li>
                    <li><a class="nav-link" href="{{route('berita.create')}}">Tambah Berita</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>