@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h2>Dashboard Admin</h2>
    <p>Selamat datang, {{ Auth::user()->name }}!</p>
</div>
@endsection
