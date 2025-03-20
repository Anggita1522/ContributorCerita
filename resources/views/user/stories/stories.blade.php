@extends('user.dashboard')

@section('title', 'My Stories')

@section('content')
<div class="container">
    <h1>My Stories</h1>
    <p>Ini adalah halaman daftar cerita yang telah Anda buat.</p>

    <!-- Grid untuk daftar cerita -->
    <div class="row mt-4">
        @for ($i = 0; $i < 6; $i++) <!-- Contoh: Menampilkan 6 cerita -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <!-- Cover Cerita -->
                    <img src="{{ asset('assets/images/cover-default.jpg') }}" class="card-img-top" alt="Cover Cerita">
                    
                    <div class="card-body">
                        <!-- Nama Cerita -->
                        <h5 class="card-title">Judul Cerita {{ $i + 1 }}</h5>

                        <!-- Status Cerita -->
                        <p class="text-muted">Status: <strong>Published</strong></p>

                        <!-- Rating Cerita -->
                        <p class="card-text">⭐ 4.5 / 5.0</p>

                        <!-- Kategori Cerita -->
                        <span class="badge bg-primary">Fantasi</span>
                        <span class="badge bg-success">Petualangan</span>

                        <!-- Jumlah Pembaca -->
                        <p class="mt-2 text-muted">👁️ 1,250 pembaca</p>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection
