@extends('layouts.app')

@section('content')
    <div class="brand">Institut Teknologi Sepuluh Nopember</div>
    <h1>Selamat datang di profil akademis saya</h1>
    <p class="meta">
        Halaman ini dibuat sebagai sandbox routing Laravel untuk tugas PBKK Pertemuan 2.
        Semua navigasi memakai named routes agar mudah dipresentasikan dan dipelihara.
    </p>

    <div class="nav">
        <a href="{{ route('mahasiswa.show', ['nrp' => '5025241118']) }}">Lihat Profil Mahasiswa</a>
        <a href="{{ route('agent.show') }}">Ide Agentic AI</a>
        <a class="secondary" href="{{ route('ipk.calculate', ['ip1' => 3.5, 'ip2' => 3.75]) }}">Hitung IPK</a>
    </div>

    <h2 style="margin-top: 28px;">Sorotan</h2>
    <ul>
        @foreach ($highlights as $highlight)
            <li>{{ $highlight }}</li>
        @endforeach
    </ul>
@endsection