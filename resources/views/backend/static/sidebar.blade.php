<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
        </div>
        <div class="sidebar-brand-text mx-3">TPA At-Thoriq</div>
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

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- For Administrator -->
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - Identitas Lembaga -->
    <li class="nav-item {{ Request::is('lembaga') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('lembaga') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Identitas Lembaga</span>
        </a>
    </li>

    <!-- Nav Item - Manajemen User -->
    <li class="nav-item {{ request()->is('users', 'kepala-pendidikan', 'guru', 'siswa') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data Pengguna</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manajemen:</h6>
                <a class="collapse-item" href="{{ url('users') }}">Users</a>
                <a class="collapse-item" href="{{ url('kepala-pendidikan') }}">Kepala Pendidikan</a>
                <a class="collapse-item" href="{{ url('guru') }}">Guru</a>
                <a class="collapse-item" href="{{ url('siswa') }}">Siswa/Santri Aktif</a>
            </div>
        </div>
    </li>    

    <!-- Nav Item - Sarana dan Prasarana -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-table"></i>
            <span>Sarana dan Prasarana</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manajemen:</h6>
                <a class="collapse-item" href="utilities-color.html">Luas Tanah</a>
                <a class="collapse-item" href="utilities-other.html">Penggunaan Lahan</a>
                <a class="collapse-item" href="utilities-border.html">Sarpras Pendukung</a>
                <a class="collapse-item" href="utilities-animation.html">Listrik dan Internet</a>
            </div>
        </div>
    </li>

    {{-- <!-- Nav Item - Guru -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Manajemen Guru</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
