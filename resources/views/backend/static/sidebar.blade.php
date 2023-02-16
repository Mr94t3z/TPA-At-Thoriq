<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" style="height: 50px; margin-right: 5px;">
        </div>
        <div class="sidebar-brand-text">TPA At-Thoriq</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- For User -->
    <div class="sidebar-heading">
        User
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    {{-- If user-> roles == 1 --}}
    @if(Auth::user()->roles == 1)
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- For Administrator -->
    
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - Identitas Lembaga -->
    <li class="nav-item {{ Request::is('lembaga') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('lembaga') }}">
            <i class="fas fa-school"></i>
            <span>Identitas Lembaga</span>
        </a>
    </li>

    <!-- Nav Item - Manajemen User -->
    <li class="nav-item {{ request()->is('users', 'kepala-pendidikan', 'guru', 'siswa') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-users-cog"></i>
            <span>Kelola Pengguna</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manajemen:</h6>
                <a class="collapse-item" href="{{ url('users') }}">Data Users</a>
                <a class="collapse-item" href="{{ url('kepala-pendidikan') }}">Data Kepala Pendidikan</a>
                <a class="collapse-item" href="{{ url('guru') }}">Data Guru</a>
                <a class="collapse-item" href="{{ url('siswa') }}">Data Siswa Aktif</a>
            </div>
        </div>
    </li>    

    <!-- Nav Item - Sarana dan Prasarana -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-route"></i>
            <span>Sarana dan Prasarana</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manajemen:</h6>
                <a class="collapse-item" href="{{ url('luas-tanah') }}">Luas Tanah</a>
                <a class="collapse-item" href="{{ url('penggunaan-lahan') }}">Penggunaan Lahan</a>
                <a class="collapse-item" href="{{ url('pendukung') }}">Pendukung</a>
                <a class="collapse-item" href="{{ url('listrik-dan-internet') }}">Listrik dan Internet</a>
            </div>
        </div>
    </li>

    @endif
    <!-- End For Administrator -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
