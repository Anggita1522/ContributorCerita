
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            padding-top: 30px;
            padding-left: 20px;
            padding-right: 20px;
            width: 250px;
        }

        .sidebar h3 {
            margin-bottom: 20px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.3);
            padding-bottom: 10px;
        }

        .sidebar a {
            color: #ffffff;
            font-size: 13px;
            display: flex;
            align-items: center;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 0.5rem;
            position: relative;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .sidebar i {
            margin-right: 10px;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="sidebar p-3">
            <h3 class="text-white">WaatPosh</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('dashboard') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-list"></i> Kategori
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.create') }}">
                        <i class="fas fa-plus"></i> Tambah Kategori
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#storyMenu">
                        <i class="fas fa-book-open"></i> Story
                    </a>
                    <div class="collapse" id="storyMenu">
                        <a class="collapse-item" href="#">
                            <i class="fas fa-eye"></i> Tampilkan Story
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#paymentMenu">
                        <i class="fas fa-credit-card"></i> Payment
                    </a>
                    <div class="collapse" id="paymentMenu">
                        <a class="collapse-item" href="#">
                            <i class="fas fa-eye"></i> Tampilkan Pembayaran
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#settingMenu">
                        <i class="fas fa-cog"></i> Setting
                    </a>
                    <div class="collapse" id="settingMenu">
                        <a class="collapse-item" href="#">
                            <i class="fas fa-user-circle"></i> Profile
                            <li class="nav-item">
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i> Log Out
    </a>
</li>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Tempat untuk konten -->
        <div class="content">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
