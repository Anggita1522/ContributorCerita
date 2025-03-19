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
    <div class="container d-flex flex-wrap align-items-center justify-content-between">
        <!-- Gambar dengan sudut rounded -->
        <div class="col-md-6">
            <img src="https://img2.storyblok.com/600x340/filters:focal(527x278:528x279):quality(90)/f/60990/1200x666/f77bdc027b/membaca-buku.jpg"
                 alt="Tentang WaatPosh"
                 class="img-fluid rounded-4 shadow-lg">
        </div>

        <!-- Konten teks tentang WaatPosh -->
        <div class="col-md-6 text-center text-md-start p-4">
            <h2 class="fw-bold">Tentang WaatPosh</h2>
            <p class="text-muted">
                WaatPosh adalah sebuah platform inovatif yang didedikasikan untuk para penulis dan pecinta literasi.
                Kami menyediakan tempat bagi para penulis dari berbagai latar belakang untuk berbagi cerita inspiratif,
                fiksi, puisi, hingga artikel berbasis penelitian.
            </p>
            <p class="text-muted">
                Dengan komunitas yang solid dan sistem penghargaan yang menarik, WaatPosh bukan hanya sekadar
                tempat berbagi tulisan, tetapi juga ruang bagi para kreator untuk mengembangkan keterampilan menulis
                dan membangun audiens mereka sendiri.
            </p>
            <p class="text-muted">
                Keunikan kami terletak pada fitur interaktif seperti pembaca dapat memberikan umpan balik secara langsung,
                mengikuti penulis favorit mereka, dan bahkan mendukung penulis melalui sistem donasi atau langganan premium.
            </p>
            <a href="#" class="btn btn-pastel mt-3">Pelajari Lebih Lanjut</a>
        </div>
    </div>
</div>





</body>
</html>
