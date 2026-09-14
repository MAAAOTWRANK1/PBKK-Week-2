# Laporan PBKK Pertemuan 2

## Identitas Proyek

- Mata kuliah: Pemrograman Berbasis Kerangka Kerja (PBKK)
- Topik: Instalasi dan Routing Laravel
- Bentuk tugas: Tugas mandiri
- nama/nrp : Muhammad Adi Anugerah Arrahman / 5025241118
## Tujuan

Proyek ini dibuat untuk mempraktikkan instalasi Laravel dan implementasi routing dasar secara terstruktur, termasuk named routes, parameter wajib dan opsional, route grouping, fallback route, serta tampilan Blade sederhana.

## Deskripsi Aplikasi

Aplikasi yang dibangun adalah profile akademis statis berbasis Laravel. Seluruh data ditampilkan langsung dari route dan view tanpa database aktif pada fitur utama.

Fitur utama yang dibuat:

- Halaman home dengan sambutan ITS.
- Halaman profil mahasiswa berdasarkan NRP.
- Halaman ide platform Agentic AI dengan parameter opsional.
- Kalkulator sederhana untuk menjumlah dan merata-ratakan dua nilai IP.
- Alias route di bawah prefix `/dashboard`.
- Custom 404 fallback route.

## Data Utama Mahasiswa

- NRP: 5025241118
- Nama: Muhammad Adi Anugerah Arrahman
- Tanggal lahir: 11 Oktober 2005
- Nomor HP: 0895366639168

## Implementasi Routing

Rute yang digunakan dalam aplikasi:

| Route | Nama Route | Keterangan |
|---|---|---|
| `/` | `home` | Halaman utama |
| `/mahasiswa/{nrp}` | `mahasiswa.show` | Profil mahasiswa dengan validasi 10 digit |
| `/agent/{tema?}` | `agent.show` | Ide platform Agentic AI |
| `/hitung-ipk/{ip1}/{ip2}` | `ipk.calculate` | Hitung jumlah dan rata-rata IP |
| `/dashboard/...` | alias | Redirect ke rute utama |

## Struktur File Penting

- `routes/web.php` - definisi seluruh route
- `resources/views/layouts/app.blade.php` - layout utama
- `resources/views/home.blade.php` - tampilan halaman home
- `resources/views/mahasiswa/show.blade.php` - tampilan profil mahasiswa
- `resources/views/agent/show.blade.php` - tampilan ide Agentic AI
- `resources/views/ipk/show.blade.php` - tampilan kalkulator IPK
- `resources/views/errors/404.blade.php` - tampilan 404 custom

## Cara Menjalankan

1. Pastikan PHP 8.3+ dan Composer tersedia.
2. Buka folder project.
3. Jalankan server Laravel:

```bash
php artisan serve
```

4. Akses aplikasi melalui:

```text
http://127.0.0.1:8000
```

## Catatan Teknis

- Semua navigasi internal memakai helper `route()`.
- Route mahasiswa memakai regex agar hanya menerima NRP 10 digit.
- Session dan cache diset ke driver file supaya aplikasi bisa berjalan tanpa tabel database.
- File SQLite kosong disediakan untuk menjaga koneksi default Laravel tetap valid.

## Kesimpulan

Proyek ini berhasil memenuhi kebutuhan tugas PBKK Pertemuan 2 karena sudah menampilkan routing Laravel yang rapi, parameter route yang sesuai, named routes, grouping, dan fallback route. Struktur yang dibuat juga cukup sederhana untuk didemokan di kelas.
