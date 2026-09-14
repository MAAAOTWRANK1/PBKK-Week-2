@extends('layouts.app')

@section('content')
    <div class="brand">Dashboard / Profil Mahasiswa</div>
    <h1>Profil lengkap {{ $profile['nama'] }}</h1>
    <p class="meta">Data ditampilkan dari route parameter <strong>NRP</strong> dan divalidasi dengan regex 10 digit.</p>

    <div class="grid">
        <div class="panel">
            <div class="meta">NRP</div>
            <div class="value">{{ $profile['nrp'] }}</div>
        </div>
        <div class="panel">
            <div class="meta">Tanggal Lahir</div>
            <div class="value" style="font-size: 1.1rem;">{{ $profile['tanggal_lahir'] }}</div>
        </div>
        <div class="panel">
            <div class="meta">Nomor HP</div>
            <div class="value" style="font-size: 1.1rem;">{{ $profile['no_hp'] }}</div>
        </div>
        <div class="panel">
            <div class="meta">Program Studi</div>
            <div class="value" style="font-size: 1.1rem;">{{ $profile['prodi'] }}</div>
        </div>
    </div>

    <p class="footer">{{ $profile['nama'] }} belajar di {{ $profile['kampus'] }}.</p>

    <div class="nav">
        <a href="{{ route('home') }}">Kembali ke Home</a>
        <a class="secondary" href="{{ route('agent.show', ['tema' => 'Academic Advisor Agent']) }}">Lihat Ide Agent</a>
    </div>
@endsection