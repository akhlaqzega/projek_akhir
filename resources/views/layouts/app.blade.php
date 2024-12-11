<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Motor</title>
    <link rel="shortcut icon" type="image/png" href="/modern/src/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="/modern/src/assets/css/styles.min.css" />
</head>

<body>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-center">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="/modern/src/assets/images/logos/yah.jpeg" width="130" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('pelanggan.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-users"></i>
                                </span>
                                <span class="hide-menu">Data Pelanggan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('kendaraan.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-car"></i>
                                </span>
                                <span class="hide-menu">Data Kendaraan</span>
                            </a>
                        </li>


                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('daftar-service.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-list"></i>
                                </span>
                                <span class="hide-menu">Daftar Service</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('service.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-settings"></i>
                                </span>
                                <span class="hide-menu">Data Service</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('pembayaran.index') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-wallet"></i>
                                </span>
                                <span class="hide-menu">Pembayaran Service</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- Sidebar End -->

        <!-- Main wrapper -->
        <div class="body-wrapper">
            <div class="container-fluid mt-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="modern/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="modern/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="modern/src/assets/js/sidebarmenu.js"></script>
    <script src="modern/src/assets/js/app.min.js"></script>
    <script src="modern/src/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="modern/src/assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="modern/src/assets/js/dashboard.js"></script>
</body>

</html>
