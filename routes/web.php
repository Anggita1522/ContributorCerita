<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\StoryController;
use App\Http\Controllers\User\PaymentController;
use App\Http\Controllers\User\WithdrawController;


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

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // Redirect ke halaman welcome
})->name('logout');

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

Route::prefix('user')->middleware(['auth'])->group(function () {
    Route::get('/stories', [StoryController::class, 'index'])->name('stories.index');
    Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
    Route::get('/withdrawals', [WithdrawController::class, 'index'])->name('withdrawals.index');
});




Route::prefix('admin/categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store'); // Pastikan ini ada
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});