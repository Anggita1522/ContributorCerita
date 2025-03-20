@extends('layouts.admin.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container">
    <h2>Dashboard Admin</h2>
    <p>Selamat datang, {{ Auth::user()->name }}!</p>

    <div class="row mt-4">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Jumlah User</h5>
                    <p class="card-text">100</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Admin</h5>
                    <p class="card-text">10</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">User Aktif</h5>
                    <p class="card-text">90</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
