<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard2') }}" class="brand-link">
        <img src="{{ asset('assets/img/logo/logo-web-bangunan2.png')}}" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
        <!-- <span class="brand-text font-weight-light">SIG Jalan PUPR Ptk</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> -->

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <br>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <!-- <li class="nav-header">EXAMPLES</li> -->
                <li class="nav-item">
                    <a href="{{ route('dashboard2') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('jalan.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jalan Umum</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('parent-jalan.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kondisi Jalan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Kegiatan 2020
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/charts/chartjs.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pembangunan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/flot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Peningkatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pemeliharaan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Kegiatan 2021
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/charts/chartjs.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pembangunan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/flot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rekonstruksi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Berkala</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Trotoar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <a href="{{ route('bangunan1.index') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Bangunan1
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('bangunan2.index') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Bangunan2
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('detail-bangunan.index') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Detail Bangunan
                        </p>
                    </a>
                </li>
                <li class="nav-item" hidden>
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Galery/Dokumen
                        </p>
                    </a>
                </li>
                <li class="nav-item" hidden>
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Layout Peta/download
                        </p>
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a href="{{ route('jalanKeseluruhan') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Jalan Keseluruhan
                        </p>
                    </a>
                </li> -->

                <li class="nav-item">
                    <a href="#" class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt text-info"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>