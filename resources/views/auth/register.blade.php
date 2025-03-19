@extends('layouts.app')

@section('content')
<style>
/* Font dan Background */
body {
    font-family: 'Poppins', sans-serif;
    background-image: url("{{ asset('assets/images/BGR.png') }}");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}

/* Tombol Pastel */
.btn-pastel {
    background-color: #FFC0CB; /* Pink pastel */
    color: rgb(248, 24, 162);
    border: none;
    font-weight: 600;
    font-size: 16px;
    transition: all 0.3s ease-in-out;
}

.btn-pastel:hover {
    background-color: #FFB6C1; /* Slightly darker pink pastel on hover */
    transform: scale(1.05);
}

/* Navbar */
.navbar {
    background-color: rgb(238, 161, 208);
    padding: 5px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.05);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.navbar-brand img {
    width: 80px;
}

.nav-link {
    font-weight: 600;
    font-size: 16px;
    color: #d27d8c !important;
    transition: all 0.3s;
    padding: 5px 10px;
}

.nav-link:hover {
    color: #ffb3c6 !important;
    text-decoration: underline;
}

/* Card Login */
.card {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    border-radius: 12px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
}

.card h3 {
    font-weight: 700;
    font-size: 25px;
    color: #d27d8c;
}

/* Form */
.form-label {
    font-weight: 600;
    font-size: 14px;
}

.form-control {
    border-radius: 8px;
}

/* Link */
.text-small {
    font-size: 14px;
    color: #d27d8c;
}

.text-small:hover {
    color: #ffb3c6;
}
</style>

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card p-4 shadow-lg" style="width: 400px;">
        <img src="{{ asset('assets/images/Logo.png') }}" alt="Image Description" class="img-fluid mb-3" style="max-height: 150px; width: auto;">
        <h3 class="text-center mb-3">Silahkan Register</h3>

        <!-- Pesan error jika ada kesalahan -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required value="{{ old('username') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-pastel w-100">Register</button>
        </form>

        <div class="text-center mt-3">
            <small>Sudah punya akun? <a href="{{ route('login') }}" class="text-decoration-none text-small">Login di sini</a></small>
        </div>
    </div>
</div>
@endsection