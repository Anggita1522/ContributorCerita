@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard</h2>
    <p>Selamat datang User, {{ Auth::user()->name }}!</p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>
@endsection
