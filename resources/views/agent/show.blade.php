@extends('layouts.app')

@section('content')
    <div class="brand">Dashboard / Agentic AI</div>
    <h1>{{ $tema }}</h1>
    <p class="meta">{{ $deskripsi }}</p>

    <div class="panel">
        <h3>Gambaran konsep</h3>
        <p class="meta">
            Platform ini dapat diarahkan untuk membantu akademik, menyusun target belajar, dan memberi rekomendasi tugas berbasis konteks mahasiswa.
        </p>
    </div>

    <div class="nav">
        <a href="{{ route('home') }}">Home</a>
        <a class="secondary" href="{{ route('mahasiswa.show', ['nrp' => '5025241118']) }}">Profil Mahasiswa</a>
    </div>
@endsection