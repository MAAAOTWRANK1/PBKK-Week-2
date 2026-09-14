<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $highlights = [
        'Profil akademis terstruktur tanpa database.',
        'Named routes untuk navigasi internal yang rapi.',
        'Tema Agentic AI sebagai ide proyek akhir semester.',
    ];

    return view('home', [
        'highlights' => $highlights,
    ]);
})->name('home');

Route::get('/mahasiswa/{nrp}', function (string $nrp) {
    $profiles = [
        '5025241118' => [
            'nrp' => '5025241118',
            'nama' => 'Muhammad Adi Anugerah Arrahman',
            'tanggal_lahir' => '11 Oktober 2005',
            'no_hp' => '0895366639168',
            'prodi' => 'Teknik Informatika',
            'kampus' => 'Institut Teknologi Sepuluh Nopember',
        ],
        '5025241120' => [
            'nrp' => '5025241120',
            'nama' => 'Contoh Mahasiswa ITS',
            'tanggal_lahir' => '1 Januari 2005',
            'no_hp' => '081234567890',
            'prodi' => 'Teknik Informatika',
            'kampus' => 'Institut Teknologi Sepuluh Nopember',
        ],
    ];

    abort_if(! array_key_exists($nrp, $profiles), 404, 'Profil mahasiswa tidak ditemukan.');

    return view('mahasiswa.show', [
        'profile' => $profiles[$nrp],
    ]);
})->where('nrp', '\\d{10}')->name('mahasiswa.show');

Route::get('/agent/{tema?}', function (?string $tema = null) {
    $tema = $tema ?: 'General Assistant Agent';

    $temaDescriptions = [
        'General Assistant Agent' => 'Agen serbaguna untuk membantu studi, tugas, dan penjadwalan akademis.',
        'Academic Advisor Agent' => 'Agen yang merekomendasikan strategi belajar, target nilai, dan monitoring progres.',
        'Research Helper Agent' => 'Agen untuk membantu pencarian referensi, rangkuman jurnal, dan ide riset.',
    ];

    return view('agent.show', [
        'tema' => $tema,
        'deskripsi' => $temaDescriptions[$tema] ?? 'Tema kustom untuk eksplorasi ide platform Agentic AI akademis.',
    ]);
})->name('agent.show');

Route::get('/hitung-ipk/{ip1}/{ip2}', function (string $ip1, string $ip2) {
    $nilai1 = (float) $ip1;
    $nilai2 = (float) $ip2;
    $jumlah = $nilai1 + $nilai2;
    $rataRata = $jumlah / 2;

    return view('ipk.show', [
        'ip1' => $nilai1,
        'ip2' => $nilai2,
        'jumlah' => $jumlah,
        'rataRata' => $rataRata,
    ]);
})->name('ipk.calculate');

Route::prefix('dashboard')->group(function () {
    Route::get('/mahasiswa/{nrp}', function (string $nrp) {
        return redirect()->route('mahasiswa.show', ['nrp' => $nrp]);
    });

    Route::get('/agent/{tema?}', function (?string $tema = null) {
        $parameters = $tema ? ['tema' => $tema] : [];

        return redirect()->route('agent.show', $parameters);
    });

    Route::get('/hitung-ipk/{ip1}/{ip2}', function (string $ip1, string $ip2) {
        return redirect()->route('ipk.calculate', ['ip1' => $ip1, 'ip2' => $ip2]);
    });
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
