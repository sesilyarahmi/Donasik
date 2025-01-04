<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DONASIK - Platform Donasi Kemanusiaan Indonesia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-primary fs-2" href="#">DONASIK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger text-white" href="/">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten utama -->
    <div class="container mt-5 pt-5"> <!-- Menambahkan pt-5 agar konten tidak tertutup navbar -->
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5 mt-5"> <!-- Menambahkan mt-5 agar footer tidak menutupi konten -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h4>DONASIK</h4>
                    <p>Platform donasi online terpercaya untuk membantu sesama. Bergabunglah dalam misi kemanusiaan kami.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Kontak</h5>
                    <p>Email: info@donasik.com</p>
                    <p>Telepon: (021) 1234-5678</p>
                    <p>Alamat: Jakarta, Indonesia</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Ikuti Kami</h5>
                    <a href="#" class="text-white me-3">Facebook</a>
                    <a href="#" class="text-white me-3">Twitter</a>
                    <a href="#" class="text-white">Instagram</a>
                </div>
            </div>
            <div class="border-top border-secondary mt-4 pt-3 text-center">
                <p>&copy; 2025 DONASIK. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
