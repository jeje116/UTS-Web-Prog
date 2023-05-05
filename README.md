Description
--------------------------------------
Projek Ujian Tengah Semester Mata Kuliah Web Programming.

Installation
--------------------------------------
1. Pastikan node.js dan laravel sudah tersedia

2. Menjalankan laravel
    - Install composer
      ```
      composer install
      ```
      
    - Ubah file .env.example menjadi .env
    - jika terdapat error "key not generated" atau "500|server error" pada web
      ```
      php artisan key:generate
      ```

    - Jalankan Laravel
      ```
      php artisan serve
      ```
3. Menjalankan seed dan migration
    - migration
      ```
      php artisan migrate
      ```
    - migration
      ```
      php artisan db:seed
      ```
   
