@extends('layouts.app')

@section('title', 'Write Story')

@section('content')
<div class="container">
    <h2>Add Story Info</h2>

    <!-- Form Tambah Cerita -->
    <form action="{{ route('stories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf <!-- CSRF Protection -->

        <!-- Cover Cerita -->
        <div class="mb-3">
            <label class="form-label">Add a Cover</label>
            <input type="file" class="form-control" name="cover">
            <small class="text-muted">No file chosen</small>
        </div>

        <!-- Detail Cerita -->
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Untitled Story">
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="5" placeholder="Describe your story..."></textarea>
        </div>

        <!-- Karakter Utama -->
        <div class="mb-3">
            <label class="form-label">Main Characters</label>
            <input type="text" class="form-control" name="characters" placeholder="Character Name">
        </div>

        <!-- Pemilihan Kategori -->
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select class="form-select" name="category">
                <option value="">Select a category</option>
                <option value="fantasy">Fantasy</option>
                <option value="romance">Romance</option>
                <option value="horror">Horror</option>
                <option value="adventure">Adventure</option>
            </select>
        </div>

        <!-- Tags -->
        <div class="mb-3">
            <label class="form-label">Tags</label>
            <input type="text" class="form-control" name="tags" placeholder="Add a tag">
        </div>

        <!-- Target Audience -->
        <div class="mb-3">
            <label class="form-label">Target Audience</label>
            <select class="form-select" name="audience">
                <option value="general">General Audience</option>
                <option value="teen">Teen</option>
                <option value="mature">Mature</option>
            </select>
        </div>

        <!-- Bahasa -->
        <div class="mb-3">
            <label class="form-label">Language</label>
            <select class="form-select" name="language">
                <option value="english">English</option>
                <option value="indonesian">Indonesian</option>
            </select>
        </div>

        <!-- Hak Cipta -->
        <div class="mb-3">
            <label class="form-label">Copyright</label>
            <p>All Rights Reserved</p>
            <small class="text-muted">You do not allow your work to be used or adapted in any way without your permission.</small>
        </div>

        <!-- Rating -->
        <div class="mb-3">
            <label class="form-label">Rating</label>
            <select class="form-select" name="rating">
                <option value="general">General</option>
                <option value="mature">Mature</option>
            </select>
        </div>

        <!-- Button Publish -->
        <button type="submit" class="btn btn-primary">Publish Story</button>
    </form>
</div>
@endsection
