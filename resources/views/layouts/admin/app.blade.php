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
            padding-top: 30px; /* Increased spacing at the top */
            padding-left: 20px; /* Increased left padding */
            padding-right: 20px; /* Increased right padding */
            width: 250px; /* Set a fixed width for the sidebar */
        }

        .sidebar h3 {
            margin-bottom: 20px; /* Space between SB Admin title and the menu */
            border-bottom: 2px solid rgba(255, 255, 255, 0.3); /* Separator below the title */
            padding-bottom: 10px; /* Padding below the title */
        }

        .sidebar a {
            color: #ffffff;
            font-size: 13px; /* Font size set to 13px */
            display: flex; /* Use flex to align icon and text */
            align-items: center; /* Center icons vertically with text */
            padding: 10px; /* Padding for menu items */
            margin-bottom: 5px; /* Space between menu items */
            border-radius: 0.5rem; /* Rounded corners */
            position: relative; /* For positioning the separator */
            text-decoration: none; /* Remove underline from links */
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.1); /* Background color on hover */
        }

        /* Separator line */
        .sidebar a + a::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 1px;
            background-color: rgba(255, 255, 255, 0.3); /* Color of the separator */
            z-index: -1; /* Behind the text */
        }

        .header-bg {
            background: linear-gradient(90deg, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
            color: white;
        }

        .card {
            border-radius: 1rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .chart-container {
            position: relative;
            margin: auto;
            height: 40vh;
            width: 100%;
        }

        .pending-requests {
            background-color: #fff;
            border-radius: 0.5rem;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar i {
            margin-right: 10px; /* Space between icon and text */
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <nav class="sidebar p-3">
            <h3 class="text-white">WaatPosh</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="fas fa-fw fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#categoryMenu" role="button" aria-expanded="false" aria-controls="categoryMenu">
                        <i class="fas fa-list"></i> Kategori
                    </a>
                    <div class="collapse" id="categoryMenu">
                        <a class="collapse-item" href="#">
                            <i class="fas fa-plus"></i> Tambah Kategori
                        </a>
                        <a class="collapse-item" href="#">
                            <i class="fas fa-eye"></i> Tampilkan Kategori
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#storyMenu" role="button" aria-expanded="false" aria-controls="storyMenu">
                        <i class="fas fa-book-open"></i> Story
                    </a>
                    <div class="collapse" id="storyMenu">
                        <a class="collapse-item" href="#">
                            <i class="fas fa-eye"></i> Tampilkan Story
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#paymentMenu" role="button" aria-expanded="false" aria-controls="paymentMenu">
                        <i class="fas fa-credit-card"></i> Payment
                    </a>
                    <div class="collapse" id="paymentMenu">
                        <a class="collapse-item" href="#">
                            <i class="fas fa-eye"></i> Tampilkan Pembayaran
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#settingMenu" role="button" aria-expanded="false" aria-controls="settingMenu">
                        <i class="fas fa-cog"></i> Setting
                    </a>
                    <div class="collapse" id="settingMenu">
                        <a class="collapse-item" href="#">
                            <i class="fas fa-user-circle"></i> Profile
                        </a>
                        <a class="collapse-item" href="#">
                            <i class="fas fa-sign-out-alt"></i> Log Out
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <header class="d-flex justify-content-between align-items-center p-3 header-bg">
                <h1>Dashboard</h1>
                <div>
                    <a href="#" class="btn btn-light">
                        <i class="fas fa-user-circle"></i> Profile
                    </a>
                </div>
            </header>

            <div class="row mt-4">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah User</h5>
                            <p class="card-text">FFFF</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Admin</h5>
                            <p class="card-text">FFFF</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">User/Actif</h5>
                            <p class="card-text">FFFF</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tambahkan konten lainnya di sini jika diperlukan -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>