<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WaatPosh - Kontributor Cerita</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fef3f7;
            scroll-behavior: smooth;
        }

        /* Navbar */
        .navbar {
            background-color: #fde2e4;
            padding: 5px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.05);
        }
        .navbar-brand img {
            width: 80px;
        }
        .nav-link {
            font-weight: 600;
            color: #d27d8c !important;
            transition: all 0.3s;
            padding: 5px 10px;
        }
        .nav-link:hover {
            color: #ffb3c6 !important;
            text-decoration: underline;
        }

        /* Header */
        .header {
            background: linear-gradient(to right, #ffd6e0, #f8c3d4);
            color: #7d5a5a;
            text-align: center;
            padding: 100px 20px;
            border-radius: 0 0 50px 50px;
        }
        .header h1 {
            font-size: 3.5rem;
            font-weight: 700;
        }
        .header p {
            font-size: 1.3rem;
            margin-top: 10px;
            font-weight: 500;
        }
        .btn-header {
            background-color: #ffb3c6;
            color: white;
            padding: 15px 30px;
            font-weight: 600;
            border-radius: 30px;
            text-transform: uppercase;
            border: none;
            transition: all 0.3s;
        }
        .btn-header:hover {
            background-color: #f29caa;
            transform: scale(1.05);
        }

        /* Button Custom */
        .btn-pastel {
            background-color: #ffb3c6;
            color: white;
            font-weight: 600;
            border-radius: 20px;
            padding: 8px 16px;
            border: none;
            transition: all 0.3s;
        }
        .btn-pastel:hover {
            background-color: #f29caa;
            transform: scale(1.05);
        }

        /* Sections */
        .section {
            padding: 80px 20px;
            margin: 40px auto;
            text-align: center;
        }
        .bg-light-pastel {
            background-color: #ffe5ec;
        }
        .bg-gray {
            background-color: #fce4ec;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="WaatPosh Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang WaatPosh</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#komunitas">Komunitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#program">Program Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn btn-pastel btn-sm me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-pastel btn-sm">Register</a>
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <header class="header">
        <h1>Kontributor WaatPosh</h1>
        <p>Bergabung menjadi penulis di WaatPosh dan dapatkan penghasilan tambahan!</p>
        <a href="#" class="btn btn-header">Gabung Sekarang</a>
    </header>

    <!-- TENTANG WAATPOSH -->
    <div id="tentang" class="section">
        <div class="content-wrapper">
            <img src="assets/images/tentang-waatposh.png" alt="Tentang WaatPosh">
            <div>
                <h2>Tentang WaatPosh</h2>
                <p>WaatPosh adalah platform bagi penulis untuk berbagi cerita inspiratif dan pengalaman unik. Bergabunglah dalam komunitas kreatif dan berbagi kisahmu.</p>
            </div>
        </div>
    </div>

    <!-- PROGRAM KONTRIBUTOR -->
    <div id="program" class="section bg-gray">
        <h2>Apa Itu Program Kontributor?</h2>
        <p>Program ini memberi kesempatan bagi penulis untuk mendapatkan eksposur lebih luas dan penghasilan dari tulisan mereka.</p>
    </div>

    <!-- MANFAAT -->
    <div id="manfaat" class="section bg-light-pastel">
        <h2>Manfaat Menjadi Kontributor</h2>
        <div class="manfaat-container">
            <div class="manfaat-item">
                <img src="assets/images/icon-hobi.png" alt="Hobi">
                <p>Menyalurkan hobi menulis</p>
            </div>
            <div class="manfaat-item">
                <img src="assets/images/icon-pengetahuan.png" alt="Pengetahuan">
                <p>Menambah wawasan dan empati</p>
            </div>
        </div>
    </div>

    <!-- KOMUNITAS -->
    <div id="komunitas" class="section">
        <h2>Komunitas WaatPosh</h2>
        <p>Bergabung dengan komunitas penulis dan pembaca yang mendukung satu sama lain.</p>
    </div>

    <!-- KONTAK -->
    <div id="kontak" class="section bg-gray">
        <h2>Kontak Kami</h2>
        <p>Email: support@waatposh.com</p>
    </div>

</body>
</html>
