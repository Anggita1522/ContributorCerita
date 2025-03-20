<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        return view('user.stories.stories');
    }

    public function create()
    {
        return view('user.stories.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan ke database (contoh sederhana, sesuaikan dengan model Story jika ada)
        // Story::create($request->all());

        return redirect()->route('stories.index')->with('success', 'Story created successfully!');
    }
}
