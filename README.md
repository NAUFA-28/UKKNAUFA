# UKKNAUFA

Aplikasi Sistem Peminjaman Alat berbasis Laravel.

## Fitur

* Login Admin, Petugas, dan Peminjam
* Manajemen Data Alat
* Manajemen Kategori
* Data Nasabah/Peminjam
* Transaksi Peminjaman
* Dashboard sesuai role pengguna

## Teknologi

* Laravel
* PHP
* MySQL
* Bootstrap

## Cara Menjalankan

1. Clone repository
2. Jalankan:

   ```bash
   composer install
   ```
3. Salin file `.env`

   ```bash
   cp .env.example .env
   ```
4. Generate key:

   ```bash
   php artisan key:generate
   ```
5. Jalankan migration:

   ```bash
   php artisan migrate
   ```
6. Jalankan server:

   ```bash
   php artisan serve
   ```

## Repository

Project UKKNAUFA untuk tugas UKK.
