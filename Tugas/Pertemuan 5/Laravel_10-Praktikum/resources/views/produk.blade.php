@extends('layouts.app')

@section('title', 'Halaman Produk')

@section('content')

    <h1>Ini adalah halaman produk</h1>
    <p>Selamat datang, {{ $nama }}</p>

    <x-alert type="{{ $type }}">{{ $message }}</x-alert>
    
@endsection
