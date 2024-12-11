<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Motor</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Navbar custom */
        .navbar {
            background-color: #4CAF50;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .nav-link:hover {
            color: #FFD700 !important;
        }
        .navbar-toggler-icon {
            background-color: white;
        }
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }

        /* Styling navbar items */
        .navbar-nav .nav-item {
            margin-right: 20px;
        }

        .navbar-nav .nav-link {
            font-size: 16px;
            font-weight: 500;
        }

        .navbar-nav .nav-item:last-child {
            margin-right: 0;
        }

        /* Hover effect for nav items */
        .nav-item:hover {
            background-color: #3e8e41;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Service Motor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pelanggan.index') }}">Data Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pembayaran.index') }}">Pembayaran Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kendaraan.index') }}">Data Kendaraan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('daftar-service.index') }}">Daftar Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('service.index') }}">Data Service</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
