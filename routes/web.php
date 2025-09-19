<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\DokterController;

// ==================== AUTH ====================

// Root diarahkan ke halaman register
Route::get('/', function () {
    return view('register');
})->name('register');

// Proses Register
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Form Login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Proses Login
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// ==================== HOME (hanya setelah login) ====================
Route::get('/home', function () {
    return view('home'); // pastikan ada file resources/views/home.blade.php
})->name('home')->middleware('auth');

// ==================== KONSULTASI ====================
// Form konsultasi (GET)
Route::get('/konsultasi', function () {
    return view('konsultasi');
})->name('konsultasi');

// Simpan data konsultasi (POST)
Route::post('/konsultasi', [KonsultasiController::class, 'store'])->name('konsultasi.post');

// ==================== HALAMAN LAIN ====================
Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
