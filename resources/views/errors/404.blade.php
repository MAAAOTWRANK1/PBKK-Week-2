@extends('layouts.app')

@section('content')
    <div class="brand">404 Custom</div>
    <h1>Halaman tidak ditemukan</h1>
    <p class="meta">Rute yang Anda tuju tidak tersedia. Silakan kembali ke halaman utama atau pilih menu yang benar.</p>

    <div class="nav">
        <a href="{{ route('home') }}">Kembali ke Home</a>
        <a class="secondary" href="{{ route('agent.show') }}">Lihat Agent Default</a>
    </div>
@endsection