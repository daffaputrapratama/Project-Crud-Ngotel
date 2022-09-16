Buat Run Project Laravel tinggal ketik : php artisan serve

Tapi di GIT ga akan semua depedensi bisa dipush dan dipull, dan biasanya error terjadi, so, lakuin ini dulu:

1. composer install 
Biar download depedensi php/laravel yang hilang, terus lakuin php artisan serve.

2. npm install(opsional)
Kalau masih error juga, lakuin npm install. karna ada depedensi boostrap yang hilang.

3. php artisan serve 
kalau udah composer intall baru php artisan serve.

4. npm run dev(opsional)
masih ga jalan juga? coba di terminal baru npm run dev buat compile depedensi style atau bootsrapnya.
