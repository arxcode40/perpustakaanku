# Apa itu PerpustakaanKu

PerpustakaanKu adalah sebuah aplikasi perpustakaan yang dibangun dan digunakan untuk memudahkan dalam mengelola data anggota, data buku, data rak, data peminjaman, data pengembalian, dan lain sebagainya.

**Persyaratan Sistem**

- Kerangka kerja: CodeIgniter 3
- Bahasa: PHP 8.x
- Basis data: MySQL
- Server: Laragon

**Panduan Instalasi**

1. Unduh dan instal aplikasi [Laragon](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe) di komputer.
2. Ekstrak file menggunakan aplikasi [WinRAR](https://www.win-rar.com/postdownload.html).
3. Salin folder **perpustakaanku**, lalu tempel ke folder **www**.
4. Klik tombol **Start All** pada Laragon.
5. Buka peramban, lalu buka alamat **localhost/phpmyadmin**.
6. Buat basis data baru dengan nama **perpustakaanku**.
7. Buka terminal di dalam proyek, ketikan `php index.php migrate && php index.php seeder`.
8. Jalankan proyek dengan ketik **https://perpustakaanku.test/**.
9. Masuk dengan nama pengguna: **administrator**, kata sandi: **Wasd123@** (Diwajibkan untuk membuat kata sandi baru).
10. Selesai.

**Fitur Aplikasi**
- Login Admin
- Dasbor Admin
- Data Anggota
- Data Buku
- Data Peminjaman
- Data Pengembalian
- Data Laporan (CSV, Excel, PDF, dan Cetak)
- Pengaturan Profil
- Pengaturan Aplikasi
- dan lainnya.