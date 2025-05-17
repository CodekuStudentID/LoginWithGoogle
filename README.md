<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:


# Laravel Google Login with Socialite

Implementasi Login menggunakan akun Google dengan Laravel Socialite.

## 🎯 Fitur
- Login menggunakan akun Google.
- Otomatis membuat user baru atau update jika sudah ada.
- Login dan redirect ke dashboard.
- Disimpan ke database SQLite.

---

## 🧱 Tech Stack
- Laravel 12.x
- Laravel Socialite
- SQLite (bisa diganti MySQL/MariaDB)
- PHP 8.3+
- Google Developer Console (OAuth 2.0)

---

## 🔧 Setup Proyek

### 1. Clone repo & install dependencies

```bash
git clone https://github.com/username/nama-project.git
cd nama-project
composer install
cp .env.example .env
php artisan key:generate

```


2. Setup database
Gunakan SQLite (default .env):

```bash
DB_CONNECTION=sqlite
```

3. Kemudian Jalankan Migrasi 

```bash
php artisan migrate
```

4. Instalasi Socialite

```bash
composer require laravel/socialite
```
