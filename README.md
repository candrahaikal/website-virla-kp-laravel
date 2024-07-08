### Cara Install
1. Download ZIP code di atas
2. Ekstrak
3. Buka folder project dan jalankan terminal Visual Studio Code
4. Pada file .env.example rename menjadi .env
5. Ketikkan perintah 'php artisan key:generate'
6. Pada line 22 .env set DB_CONNECTION=mysql
7. Pada line 23 - 27 hapus tanda #
8. Pada line 25 DB_DATABASE ubah nama sesuai yang diinginkan
9. Ketikkan perintah 'composer install'
10. Ketikkan perintah 'php artisan migrate' jika muncul pesan untuk membuat database baru ketik 'yes'
11. Ketikkan perintah 'php artisan serve'
12. Buka di 127.0.0.1:8000
13. Jalankan terminal (tanpa close terminal php artisan di atas)
14. Ketikkan perintah 'npm i'
15. Ketikkan perintah 'npm run dev'
