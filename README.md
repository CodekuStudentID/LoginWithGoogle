<h2 align="center">Login With Google Account</h2>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel Socialite

Laravel Socialite adalah package resmi Laravel yang digunakan untuk mempermudah proses autentikasi OAuth dengan layanan pihak ketiga seperti Google, Facebook, GitHub, dan lainnya. Dengan Socialite, kamu bisa mengintegrasikan fitur "Login dengan Google" atau platform lain ke dalam aplikasi Laravel tanpa harus menulis kode OAuth dari nol. Package ini menangani proses redirect, callback, dan pengambilan data user secara otomatis, sehingga kamu hanya perlu fokus pada logika login atau registrasi di aplikasimu.


## Install Laravel Socialite 

```bash 
composer require laravel/socialite
```

# Config Akun cloud
1. buat akun
2. buat project baru
3. ambil screet_id, client_id, redirect_url

# config laravel
1. tambahkan alias di config/service.php
2. buat file config/socialite.php tambahkan client_id, screet_id, redirect_url dari file .env
3. jangan lupa config file .env
4. buat 2 controller
5. 2 route yang satunya disamakan dengan url redirect_url di google cloud kita
6. tambahkan ke view


## testing

```bash
php artisan serve
```


