<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span>Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="index">
                        <i data-feather="home" class="icon-dual"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i data-feather="home" class="icon-dual"></i> <span>Kasir</span>
                    </a>
                </li>
                </li> <!-- end Main Menu -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span>Master Data</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUsers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUsers">
                        <i data-feather="users" class="icon-dual"></i> <span>Pegawai</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarUsers">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="pegawai-hak-akses" class="nav-link">Hak Akses</a>
                            </li>
                            <li class="nav-item">
                                <a href="auth-signin-cover" class="nav-link">Data Pegawai</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                        <i data-feather="command" class="icon-dual"></i> <span>Produk</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProducts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="pages-starter" class="nav-link">Kategori</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-starter" class="nav-link">Satuan</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-starter" class="nav-link">Data Produk</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i data-feather="home" class="icon-dual"></i> <span>Pelanggan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i data-feather="home" class="icon-dual"></i> <span>Supplier</span>
                    </a>
                </li><!-- end Master Data -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span>Transaksi</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i data-feather="home" class="icon-dual"></i> <span>Pembelian</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i data-feather="home" class="icon-dual"></i> <span>Penjualan</span>
                    </a>
                </li><!-- end Transaksi -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span>Laporan</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i data-feather="home" class="icon-dual"></i> <span>Stok Produk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarTransaksi" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTransaksi">
                        <i data-feather="command" class="icon-dual"></i> <span>Transaksi</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTransaksi">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="pages-starter" class="nav-link">Pembelian</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-starter" class="nav-link">Penjualan</a>
                            </li>
                        </ul>
                    </div>
                </li><!-- end Laporan -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
