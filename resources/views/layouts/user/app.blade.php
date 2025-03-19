<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'User - WaatPosh')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fef3f7;
        }

        .navbar {
            background-color: #fde2e4;
            padding: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.05);
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #fde2e4;
            color: #7d5a5a;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <!-- NAVBAR USER -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/user/dashboard') }}">WaatPosh</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/user/profile') }}">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/user/stories') }}">My Stories</a></li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <p>&copy; 2025 WaatPosh. Semua Hak Dilindungi.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
