@extends('layouts.app')

@section('title', 'UTS Database')

@section('content')
    <h2>Menu UTS Database</h2>
    <p>Ini adalah halaman khusus untuk UTS Database.</p>

    <p><a href="{{ route('uts.index') }}">← Kembali ke Menu</a></p>
@endsection
