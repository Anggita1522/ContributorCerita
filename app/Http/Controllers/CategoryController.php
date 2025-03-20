<?php

namespace App\Http\Controllers;

use App\Models\Category; // Pastikan ini ada
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Method untuk menampilkan form create kategori
    public function create()
    {
        return view('admin.categories.create'); // Arahkan ke file Blade yang benar
    }

    // Method untuk menyimpan data kategori ke database
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        Category::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.categories.create')->with('success', 'Kategori berhasil ditambahkan.');
    }
}
