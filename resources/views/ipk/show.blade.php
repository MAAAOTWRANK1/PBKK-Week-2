@extends('layouts.app')

@section('content')
    <div class="brand">Dashboard / Kalkulator IPK</div>
    <h1>Hasil Perhitungan IP Semester</h1>
    <p class="meta">Rute ini menjumlahkan dua nilai IP dan menghitung rata-ratanya.</p>

    <div class="grid">
        <div class="panel">
            <div class="meta">IP 1</div>
            <div class="value">{{ number_format($ip1, 2) }}</div>
        </div>
        <div class="panel">
            <div class="meta">IP 2</div>
            <div class="value">{{ number_format($ip2, 2) }}</div>
        </div>
        <div class="panel">
            <div class="meta">Jumlah</div>
            <div class="value">{{ number_format($jumlah, 2) }}</div>
        </div>
        <div class="panel">
            <div class="meta">Rata-rata</div>
            <div class="value">{{ number_format($rataRata, 2) }}</div>
        </div>
    </div>

    <div class="nav">
        <a href="{{ route('home') }}">Home</a>
        <a class="secondary" href="{{ route('agent.show') }}">Agent Default</a>
    </div>
@endsection