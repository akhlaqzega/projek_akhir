<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Service Motor Zega</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="boot/assets/img/favicon.png" rel="icon">
    <link href="boot/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Nunito:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="boot/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="boot/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="boot/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="boot/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="boot/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="boot/assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">Service Motor Zega</h1>
            </a>

            <nav id="navmenu" class="navmenu">
              
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="hero-bg">
                <img src="boot/assets/img/hero-bg-light.webp" alt="Hero Background" class="img-fluid">
            </div>
            <div class="container text-center">
                <div class="d-flex flex-column justify-content-center align-items-center" data-aos="fade-up">
                    <h1 class="mb-4 ">Selamat Datang di <span style="color: #007bff;">Service Motor Zega</span></h1>

                    <img src="boot/assets/img/p.jpeg" class="img-fluid hero-img rounded shadow" alt="Motor Hero"
                        data-aos="zoom-in" data-aos-delay="200" style="max-width: 600px;">

                    <a href="{{ route('pelanggan.index') }}" class="btn btn-primary btn-lg mt-4" data-aos="fade-up"
                        data-aos-delay="400">Mulai</a>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="boot/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="boot/assets/vendor/php-email-form/validate.js"></script>
        <script src="boot/assets/vendor/aos/aos.js"></script>
        <script src="boot/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="boot/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <!-- Main JS File -->
        <script src="boot/assets/js/main.js"></script>

    </main>
</body>

</html>
