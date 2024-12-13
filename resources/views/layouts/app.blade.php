<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Motor</title>
    <link rel="shortcut icon" type="image/png" href="/modern/src/assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="/modern/src/assets/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
</head>

<body>
    <!-- Body Wrapper -->
  
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-center mt-3">
                    <a href="/home" class="text-nowrap logo-img">
                        <img src="/modern/src/assets/images/logos/p.jpeg" width="160" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/home" aria-expanded="false">
                                <span>
                                    <i class="ti ti-home"></i>
                                </span>
                                <span class="hide-menu">Home</span>
                            </a>
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
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 500, // Durasi animasi dalam milidetik
            once: true      // Animasi hanya diputar sekali (true) atau berulang (false)
        });
    </script>
    
</body>

</html>
