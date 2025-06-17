
# Lapor Desa

Aplikasi web Lapor Desa adalah platform yang direka untuk memudahkan pelaporan masalah atau aduan oleh warga desa kepada kerajaan desa tempatan. Dengan aplikasi ini, warga dapat dengan mudah menyampaikan keluhan, cadangan, atau maklumat penting lain yang kemudiannya boleh ditindaklanjuti oleh pihak berkuasa desa.




## Ciri-Ciri Utama

Berikut adalah beberapa fitur utama yang ditawarkan oleh aplikasi Lapor Desa:

- Pelaporan Aduan: Warga dapat membuat laporan baharu dengan mudah, melampirkan butiran seperti jenis aduan, lokasi, penerangan, dan bukti gambar.

- Pemantauan Status Laporan: Pengguna boleh memantau status terkini laporan mereka secara real-time (contohnya, "Menunggu Pengesahan", "Dalam Proses", "Selesai", "Ditolak").

- Pengurusan Aduan (Admin Desa): Admin desa mempunyai akses untuk melihat, mengesahkan, mengurus, dan mengambil tindakan ke atas semua laporan yang diterima.

- Notifikasi Interaktif: Sistem notifikasi akan memberitahu pengguna tentang kemas kini status laporan mereka.

- Sistem Pengesahan Pengguna: Pengguna dapat mendaftar dan log masuk sebagai warga atau admin desa untuk mengakses fitur yang relevan.


## Teknologi yang Digunakan

- Backend Framework: Laravel (PHP Framework)
- Database: PostgreSQL
- Frontend: Blade Laravel (Untuk tampilan dasar)



## Installation

Ikuti langkah-langkah di bawah untuk memasang dan menjalankan aplikasi Lapor Desa secara tempatan:

1. Klon Repositori:
```bash
git clone https://github.com/Orin10120/Lapor_Desa_project.git
cd lapor-desa
```

2. Pasang Composer:
```bash
composer install
```

3. Buat File ```.env ```:
Salin file konfigurasi contoh ```.env.example``` menjadi ```.env ```:
```bash
cp .env.example .env
```

4. Konfigurasi database:
Buka fail ```.env ``` dan sesuaikan tetapan database PostgreSQL anda:
menjadi ```.env ```:
```bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nama_database_anda # Ganti dengan nama database PostgreSQL Anda
DB_USERNAME=username_anda     # Ganti dengan username PostgreSQL Anda
DB_PASSWORD=password_anda     # Ganti dengan password PostgreSQL Anda
```

5. Jalankan key generate
Ini akan menghasilkan kunci unik untuk aplikasi Laravel Anda:
```bash
php artisan key:generate
```

6. Jalankan Migrate
Perintah ini akan membuat tabel-tabel yang diperlukan di database Anda berdasarkan migrasi Laravel:
```bash
php artisan migrate
```

7. Jalankan Seeder (Opsional):
Jika Anda memiliki data awal atau data dummy yang ingin dimuat ke database, jalankan seeder:
```bash
php artisan db:seed
```

8. Jalankan Storage
jalankan perintah ini untuk membuat symlink ke folder penyimpanan publik:
```bash
php artisan storage:link
```

9. Jalankan aplikasi
```bash
php artisan serve
```
Aplikasi Lapor Desa kini tersedia di ```http://127.0.0.1:8000 ```.

    
## ERD Diagram
Berikut adalah representasi ERD untuk aplikasi Lapor Desa. Dokumen Diagram ini menunjukkan entiti-entiti utama dan hubungan antara mereka dalam pangkalan data.

[ERD Diagram](https://drive.google.com/file/d/16vmwMigzxyvQsNY6TXptKrjbNmUoRoJ5/view?usp=sharing)

