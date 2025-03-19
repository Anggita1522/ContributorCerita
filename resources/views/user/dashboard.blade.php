@extends('layouts.user.app')

@section('content')
<div class="container">
    <h2>Dashboard User</h2>
    <p>Selamat datang, {{ Auth::user()->username }}!</p>
</div>
@endsection
