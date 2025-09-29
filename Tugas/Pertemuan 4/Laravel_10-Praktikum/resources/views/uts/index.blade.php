@extends('layouts.app')

@section('title', 'Menu UTS')

@section('content')
    <h2>Konten</h2>
    <ul>
        <li>
        <a href="{{ route('uts.pemrograman-web') }}">UTS Pemrograman Web</a>
        </li>
        <li>
        <a href="{{ route('uts.database') }}">UTS Database</a>
        </li>
    </ul>
@endsection
