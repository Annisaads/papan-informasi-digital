# Papan Informasi Digital PT. Semen Baturaja TBK

## Persyaratan
1. Install web server seperti Apache or Nginx
2. Install php 8.1 - 8.2
3. Install MySQL
4. Install composer

## Cara menjalankannya
- Clone repositori
 
      git clone https://github.com/Annisaads/papan-informasi-digital.git

- Pindah ke folder repo

      cd papan-informasi-digital
        
- Install semua dependensi menggunakan composer
        
      composer install

- Salin file env contoh dan lakukan perubahan konfigurasi yang diperlukan di file .env

      cp .env.example .env
        
- Generate key baru

      php artisan key:generate
        
- Jalankan migrasi database (Atur koneksi database di .env sebelum melakukan migrasi)

      php artisan migrate:fresh --seed

- Buat symbolic link

      php artisan storage:link
        
- Jalankan server di lokal

      php artisan serve

- Server saat ini berjalan di http://localhost:8000
