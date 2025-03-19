<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin - WaatPosh')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40;
            padding: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.05);
        }

        .navbar-brand, .nav-link {
            color: white !important;
        }

        .sidebar {
            width: 250px;
            position: fixed;
            height: 100%;
            background-color: #212529;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 15px;
            display: block;
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            margin-left: 260px;
            padding: 20px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #343a40;
            color: #ffffff;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <!-- NAVBAR ADMIN -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
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

    <!-- SIDEBAR -->
    <div class="sidebar">
        <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
        <a href="{{ url('/admin/users') }}">Manage Users</a>
        <a href="{{ url('/admin/settings') }}">Settings</a>
    </div>

    <!-- CONTENT -->
    <div class="content">
        @yield('content')
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <p>&copy; 2025 Admin Panel - WaatPosh. Semua Hak Dilindungi.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
