<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller {

    // Menampilkan halaman registrasi
    public function showRegisterForm() {
        return view('auth.register');
    }

    // Proses registrasi pengguna
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:50|unique:tbl_users,username',
            'email' => 'required|string|email|max:100|unique:tbl_users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password
            'role' => 'user',
            'status' => 'aktif',
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    // Menampilkan halaman login
    public function showLoginForm() {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Redirect berdasarkan role
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard'); // Admin ke /admin/dashboard
            } else {
                return redirect()->route('user.dashboard'); // User ke /user/dashboard
            }
        }

        return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }

    // Proses logout
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }
}
