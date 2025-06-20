<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-bullhorn"></i>
        </div>
        <div class="sidebar-brand-text mx-3">lapor Desa</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{request()->is('admin/dahboard') ? 'active' : ''}}">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{request()->is('admin/resident*') ? 'active' : ''}}">
        <a class="nav-link" href="{{route('admin.resident.index')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Masyarakat</span></a>
    </li>

    <li class="nav-item {{request()->is('admin/category*') ? 'active' : ''}}">
        <a class="nav-link" href="{{route('admin.report-category.index')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Kategori</span></a>
    </li>

    <li class="nav-item {{request()->is('admin/category*') ? 'active' : ''}}">
        <a class="nav-link" href="{{route('admin.report.index')}}">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Data Laporan</span></a>
    </li>


</ul>
