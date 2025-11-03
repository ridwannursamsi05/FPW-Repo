{{-- mirip inheritance ngambil dari utama.blade.php --}}
@extends('utama')

{{-- akses section harus di endsection --}}
{{-- section judul-menu --}}
@section('judul-menu')
{{-- isi --}}
<h1>Judul Menu</h1>
<p>Ini adalah tampilan dari judul menu user dengan id: {{$isi_data}}</p>
{{-- end isi --}}
@endsection
{{-- end section judul-menu --}}

{{-- start section isi-menu --}}
@section('isi-menu')
{{-- isi --}}
<h2>Isi Menu</h2>
<p>Ini adalah tampilan dari isi menu</p>

{{-- if --}}
@if ($isi_data > 12)
    <p>Data lebih dari 12</p>
@elseif ($isi_data > 20)
    <p>Isi data lebih dari 20</p>
@else
    <p>Isi data Kurang dari 12</p>
@endif
{{-- end if --}}

{{-- end isi --}}
@endsection
{{-- end section isi-menu --}}
