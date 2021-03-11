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
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-database"></i><span>Permohonan Informasi</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{url('dashboard/informasi/meja')}}">Meja Layanan</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/informasi/masuk')}}">Permohonan Masuk</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/informasi/proses')}}">Permohonan Diproses</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/informasi/selesai')}}">Permohonan Selesai</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/informasi/ditolak')}}">Permohonan Ditolak</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/informasi/keberatan')}}">Keberatan</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/informasi/view')}}">Semua Permohonan</a></li>
                    <li><a class="nav-link" href="{{url('dashboard/informasi/datapemohon')}}">Data Pemohon</a></li>
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
                    <li><a class="nav-link" href="index-0.html">Daftar Pengguna</a></li>
                    <li><a class="nav-link" href="index.html">Tambah Pengguna</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>Pengguna Publik</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="index-0.html">Daftar Pengguna Publik</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>