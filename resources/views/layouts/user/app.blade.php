<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'User - WattPosh')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome (Ikon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fef3f7;
        }

        .wrapper {
            display: flex;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            transition: all 0.3s;
            position: fixed;
            left: 0;
            top: 0;
            color: white;
            padding-top: 20px;
        }

        .profile {
            text-align: center;
            padding: 15px 0;
        }

        .profile img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 3px solid #6c757d;
        }

        .profile p {
            margin-top: 10px;
            font-weight: bold;
        }

        .sidebar a {
            padding: 12px 20px;
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #495057;
            border-radius: 5px;
        }

        .sidebar i {
            margin-right: 10px;
        }

        /* Mode Sidebar Kecil */
        .wrapper.toggled .sidebar {
            width: 70px;
        }

        .wrapper.toggled .sidebar a span {
            display: none;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s;
            width: 100%;
        }

        .wrapper.toggled .content {
            margin-left: 70px;
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <!-- Profile Section -->
        <div class="profile text-center py-3">
            <img src="{{ asset('images/user-default.png') }}" class="rounded-circle" width="80" height="80" alt="User Profile">
            <p class="mt-2 fw-semibold">{{ Auth::user()->name }}</p>
        </div>

        <a href="{{ url('/user/dashboard') }}"><i class="fas fa-chart-line"></i><span> Dashboard</span></a>
        <a href="{{ url('/user/stories') }}"><i class="fas fa-book"></i><span> My Stories</span></a>
        <a href="{{ url('/user/payments') }}"><i class="fas fa-money-bill-wave"></i><span> Payments</span></a>
        <a href="{{ url('/user/withdrawals') }}"><i class="fas fa-university"></i><span> Withdrawals</span></a>
        <a href="{{ url('/user/favorites') }}"><i class="fas fa-heart"></i><span> Favorites</span></a>
        <a href="{{ url('/user/settings') }}"><i class="fas fa-cog"></i><span> Settings</span></a>
    </div>

    <!-- KONTEN -->
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </nav>

        <main class="container mt-4">
            @yield('content')
        </main>
    </div>
</div>

<!-- FOOTER -->
<footer class="footer text-center py-3 mt-4 bg-light">
    <p>&copy; 2025 WattPosh. Semua Hak Dilindungi.</p>
</footer>

<!-- Bootstrap & Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById("menu-toggle").addEventListener("click", function() {
        document.getElementById("wrapper").classList.toggle("toggled");
    });
</script>

</body>
</html>
