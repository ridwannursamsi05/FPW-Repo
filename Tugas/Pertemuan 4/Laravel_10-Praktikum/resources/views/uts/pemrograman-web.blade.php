@extends('layouts.app')

@section('title', 'UTS Pemrograman Web')

@section('content')
    <h2>Menu UTS Pemrograman Web</h2>
    <p>Ini adalah halaman khusus untuk UTS Pemrograman Web.</p>

    <p><a href="{{ route('uts.index') }}">← Kembali ke Menu</a></p>
@endsection
