<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DebugController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialiteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/debug-socialite', function () {
    // return config('services.google');
    //  return 'debug route works';
    dd([
        'CLIENT_ID' => env('CLIENT_ID'),
        'CLIENT_SECRET' => env('CLIENT_SECRET'),
        'REDIRECT_URL' => env('REDIRECT_URL'),
        'config_google' => config('services.google'),
    ]);
});


Route::get('/debug-google-socialite', [DebugController::class, 'debug'])->name('debug.index');

Route::get('/login-with-google', [SocialiteController::class, 'index'])->name('socialite.index');
Route::get('/login/google', [SocialiteController::class, 'redirect'])->name('socialite.redirect');
Route::get('/auth/callback', [SocialiteController::class, 'callback'])->name('socialite.callback');

require __DIR__.'/auth.php';
