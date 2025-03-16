@extends('layouts.app')

@section('content')

<style>
    .btn-pastel {
        background-color: #FFC0CB; /* Pink pastel */
        color: white;
        border: none;
    }

    .btn-pastel:hover {
        background-color: #FFB6C1; /* Pink pastel sedikit lebih gelap saat hover */
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
</style>

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card p-4 shadow-lg" style="width: 400px;">
        <h3 class="text-center mb-3">Login</h3>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-pastel w-100">Login</button>
        </form>
    </div>
</div>
@endsection
