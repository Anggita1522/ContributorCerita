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
            background: linear-gradient(to right, #fef3f7, #e9ecef);
            color: #333;
        }

        .wrapper {
            display: flex;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            position: fixed;
            left: 0;
            top: 0;
            color: white;
            padding-top: 20px;
            transition: all 0.3s;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
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
            transition: transform 0.3s;
        }

        .profile img:hover {
            transform: scale(1.1);
        }

        .profile p {
            margin-top: 10px;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .sidebar a {
            padding: 12px 20px;
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            transition: 0.3s;
            border-radius: 5px;
            margin: 5px 0;
            position: relative;
        }

        .sidebar a:hover {
            background: #495057;
        }

        .sidebar a::after {
            content: '';
            position: absolute;
            width: 5px;
            height: 100%;
            background: transparent;
            left: 0;
            top: 0;
            transition: background 0.3s;
        }

        .sidebar a:hover::after {
            background: #007bff;
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

        /* Navbar */
        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        .footer {
            background-color: #f8f9fa;
            border-top: 1px solid #e9ecef;
        }

        /* Button styles */
        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        main {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="wrapper" id="wrapper">
    <!-- SIDEBAR -->
    <div class="sidebar">
        <!-- Logo Section -->
        <div class="profile text-center py-3">
            <img src="{{ asset('assets/images/Logo.png') }}" width="100" height="100" alt="Company Logo">
            <p class="mt-2 fw-semibold">{{ Auth::user()->name }}</p>
        </div>

        <a href="{{ url('/user/dashboard') }}"><i class="fas fa-chart-line"></i><span> Dashboard</span></a>
        <a href="{{ url('/user/stories') }}"><i class="fas fa-book"></i><span> My Stories</span></a>
        <a href="{{ url('/user/payments') }}"><i class="fas fa-money-bill-wave"></i><span> Payments</span></a>
        <a href="{{ url('/user/withdrawals') }}"><i class="fas fa-university"></i><span> Withdrawals</span></a>
        <a href="{{ url('/user/favorites') }}"><i class="fas fa-heart"></i><span> Favorites</span></a>
    </div>

    <!-- KONTEN -->
    <div class="content">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom px-3">
            <div class="container-fluid">
                <!-- Tombol Sidebar -->
                <button class="btn btn-primary" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Dropdown Profil di Navbar -->
                <div class="dropdown ms-auto">
                    <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown">
                        <img src="{{ Auth::user()->profile_picture ? asset('storage/profile/' . Auth::user()->profile_picture) : asset('assets/images/default-profile.png') }}" class="rounded-circle border" width="40" height="40" alt="Profile">
                        <span class="ms-2 d-none d-sm-inline">{{ Auth::user()->name }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                        <li><a class="dropdown-item" href="{{ url('/user/profile') }}"><i class="fas fa-user-edit me-2"></i> Edit Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('/user/settings') }}"><i class="fas fa-cog me-2"></i> Settings</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger"><i class="fas fa-sign-out-alt me-2"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- MAIN CONTENT -->
        <main class="container mt-4">
            @yield('content')
        </main>

        <!-- FOOTER -->
        <footer class="footer text-center py-3 mt-4">
            <p>&copy; 2025 WattPosh. Semua Hak Dilindungi.</p>
        </footer>
    </div>
</div>

<!-- Bootstrap & Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById("menu-toggle").addEventListener("click", function() {
        document.getElementById("wrapper").classList.toggle("toggled");
    });
</script>
