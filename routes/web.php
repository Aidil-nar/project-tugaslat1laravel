<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lat1Controller;
use App\Http\Controllers\AuthController; // Jangan lupa panggil AuthController di sini

Route::get('/', function () {
    return redirect('/login');

});

Route::get('/lat1', [Lat1Controller::class, 'index']);
Route::get('/lat2', [Lat1Controller::class, 'method2']);

// Debug route
Route::get('/debug', function () {
    return view('debug');
});

// --- RUTE UNTUK AUTENTIKASI ---

// 1. Halaman Login
Route::get('/login', [AuthController::class, 'login'])->name('login');

// 2. Proses Login
Route::post('/auth', [AuthController::class, 'auth']);

// 3. Halaman Registrasi
Route::get('/registration', [AuthController::class, 'registration']);

// 4. Proses Registrasi
Route::post('/register', [AuthController::class, 'register']);

// 5. Halaman Home
Route::get('/home', [AuthController::class, 'home']);

// 6. Proses Logout
Route::get('/logout', [AuthController::class, 'logout']);