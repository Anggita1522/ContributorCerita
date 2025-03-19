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

<!-- PROGRAM KONTRIBUTOR -->
<div id="program" class="section bg-gray">
    <div class="container d-flex flex-wrap align-items-center justify-content-between">
        <div class="col-md-6 text-center text-md-start p-4">
            <h2 class="fw-bold">Apa Itu Program Kontributor?</h2>
            <p class="text-muted">
                Program Kontributor WaatPosh adalah peluang bagi para penulis untuk memperluas jangkauan karya mereka dan mendapatkan
                apresiasi yang layak. Dengan bergabung, Anda dapat menulis berbagai cerita, opini, maupun artikel yang bisa dibaca oleh
                ribuan orang di seluruh dunia.
            </p>
            <p class="text-muted">
                Program ini tidak hanya memberikan kesempatan eksposur, tetapi juga memungkinkan penulis untuk mendapatkan
                penghasilan dari tulisan mereka melalui sistem royalti, sponsor, atau langganan premium.
            </p>
            <a href="#" class="btn btn-pastel mt-3">Daftar Sekarang</a>
        </div>
        <div class="col-md-6">
            <img src="https://storyblok-cdn.ef.com/f/60990/1200x666/5793276192/ef-blog-18mei.jpg"
                 alt="Program Kontributor"
                 class="img-fluid rounded-4 shadow-lg">
        </div>
    </div>
</div>

<!-- MANFAAT MENJADI KONTRIBUTOR -->
<div id="manfaat" class="section bg-light-pastel">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Manfaat Menjadi Kontributor</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-3 rounded-4 shadow-sm">
                    <img src="https://storyblok-cdn.ef.com/f/60990/1200x666/5793276192/ef-blog-18mei.jpg"
                         alt="Hobi Menulis" class="img-fluid rounded-4">
                    <p class="mt-3 fw-semibold">Menyalurkan hobi menulis</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 rounded-4 shadow-sm">
                    <img src="https://img2.storyblok.com/1200x600/filters:focal(606x204:607x205):quality(90)/f/60990/1200x666/0d4dc9dfbd/ef-blog-8september.jpg"
                         alt="Menambah Pengetahuan" class="img-fluid rounded-4">
                    <p class="mt-3 fw-semibold">Menambah wawasan dan empati</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 rounded-4 shadow-sm">
                    <img src="https://img2.storyblok.com/1200x600/filters:focal(527x278:528x279):quality(90)/f/60990/1200x666/f77bdc027b/membaca-buku.jpg"
                         alt="Mendapatkan Penghasilan" class="img-fluid rounded-4">
                    <p class="mt-3 fw-semibold">Berpeluang mendapatkan penghasilan</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- KOMUNITAS -->
<div id="komunitas" class="section bg-light-pastel">
    <div class="container">
        <div class="row align-items-center">
            <!-- Gambar Komunitas -->
            <div class="col-md-6 text-center">
                <img src="https://png.pngtree.com/png-clipart/20221026/original/pngtree-cartoon-male-female-group-happy-for-company-class-study-congratulation-png-image_8728288.png"
                     alt="Komunitas WaatPosh" class="img-fluid rounded-4 shadow">
            </div>

            <!-- Teks & Ikon Sosial -->
            <div class="col-md-6 text-center text-md-start">
                <h2 class="fw-bold">Komunitas WaatPosh</h2>
                <p class="text-muted">
                    Bergabunglah dengan komunitas penulis dan pembaca di WaatPosh yang saling mendukung.
                    Dapatkan kesempatan untuk berkolaborasi, berdiskusi, dan mengembangkan keterampilan menulis bersama.
                </p>

                <!-- Ikon Media Sosial -->
                <div class="social-icons mt-3">
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-discord"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a>
                </div>

                <!-- Tombol -->
                <a href="#" class="btn btn-pastel mt-4">Gabung Komunitas</a>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan ini di bagian <head> untuk FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<!-- Tambahkan ini di file CSS -->
<style>
    /* Section Styling */
    .bg-light-pastel {
        background-color: #ffe5ec;
        padding: 80px 20px;
    }

    /* Gambar */
    .img-fluid {
        max-width: 90%;
        height: auto;
    }

    /* Sosial Media */
    .social-icons {
        display: flex;
        justify-content: center;
        gap: 15px;
    }
    .social-link {
        font-size: 24px;
        color: #555;
        transition: 0.3s;
    }
    .social-link:hover {
        color: #007bff;
        transform: scale(1.2);
    }

    /* Tombol */
    .btn-pastel {
        background-color: #ffb3c6;
        color: white;
        font-weight: 600;
        border-radius: 20px;
        padding: 10px 20px;
        border: none;
        transition: 0.3s;
    }
    .btn-pastel:hover {
        background-color: #f29caa;
        transform: scale(1.05);
    }
</style>



<!-- KONTAK KAMI - DESAIN MODERN -->
<section id="kontak" class="section bg-gray">
    <div class="container">
        <h2 class="mb-4 fw-bold text-start">Kontak Kami</h2>
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <img src="https://lsp-ijji.com/public/img/contact.png" alt="Kontak Kami" class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-lg-6 order-lg-1 text-start">
                <p>Jika Anda memiliki pertanyaan atau ingin menghubungi kami, jangan ragu untuk mengirimkan pesan!</p>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control rounded-pill" placeholder="Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control rounded-pill" placeholder="Email Anda" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control rounded-3" rows="4" placeholder="Pesan Anda" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-pastel rounded-pill">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-center mt-5 py-3 bg-light">
    <p>&copy; 2025 WaatPosh. Semua Hak Cipta Dilindungi.</p>
</footer>

</body>
</html>
