<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Route Register
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Route Login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Redirect Dashboard Berdasarkan Role
Route::get('/dashboard', function () {
    if (Auth::user()->role === 'admin') {
        return redirect('/admin/dashboard');
    } else {
        return redirect('/user/dashboard');
    }
})->middleware(['auth'])->name('dashboard');

// Dashboard User
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth'])->name('user.dashboard');

// Dashboard Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('admin.dashboard');

// Route untuk Admin Categories
Route::resource('categories', CategoryController::class);

Route::prefix('admin')->group(function () {
    // Halaman form tambah kategori
    Route::get('/categories/create', [CategoryController::class, 'create'])
        ->name('admin.categories.create');

    // Menyimpan kategori baru
    Route::post('/categories/store', [CategoryController::class, 'store'])
        ->name('admin.categories.store');
});