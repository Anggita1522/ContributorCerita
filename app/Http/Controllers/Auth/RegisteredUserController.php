<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:50|unique:tbl_users,username', // Gunakan username, bukan name
            'email' => 'required|string|email|max:100|unique:tbl_users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat user baru
        $user = User::create([
            'username' => $request->username, // Sesuai dengan struktur tabel
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // Default role
            'status' => 'aktif', // Default status
        ]);

        // Login user setelah registrasi
        Auth::login($user);

        // Redirect ke dashboard atau halaman lain setelah registrasi
        return redirect()->route('dashboard')->with('success', 'Registrasi berhasil!');
    }
}
