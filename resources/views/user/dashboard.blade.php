@extends('layouts.user.app')

@section('content')
<div class="container">
    <h2>Dashboard User</h2>
    <p>Selamat datang, {{ Auth::user()->username }}!</p>

    <!-- Grid untuk kotak cerita -->
    <div class="row mt-4">
        @for ($i = 0; $i < 6; $i++) <!-- Menampilkan 6 kotak cerita -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <!-- Cover Cerita -->
                    <img src="{{ asset('assets/images/cover-default.jpg') }}" class="card-img-top" alt="Cover Cerita">
                    
                    <div class="card-body">
                        <!-- Nama Cerita -->
                        <h5 class="card-title">Judul Cerita {{ $i + 1 }}</h5>

                        <!-- Rating Cerita -->
                        <p class="card-text">⭐ 4.5 / 5.0</p>

                        <!-- Kategori Cerita -->
                        <span class="badge bg-primary">Fantasi</span>
                        <span class="badge bg-success">Petualangan</span>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection
