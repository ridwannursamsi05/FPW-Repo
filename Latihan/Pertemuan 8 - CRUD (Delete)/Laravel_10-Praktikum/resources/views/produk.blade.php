@extends('layouts.app')

@section('title', 'Halaman Produk')

@section('content')

    <h1>Ini adalah halaman produk</h1>
    <p>Selamat datang, {{ $nama }}</p>

    <div class="alert alert-{{ $alertType }}">
        {{ $alertMessage }}
    </div>

@endsection
