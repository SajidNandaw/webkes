<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // ini mengarah ke resources/views/home.blade.php
});

// kalau mau sekalian route ke menu navbar
Route::get('/tentang', function () {
    return view('tentang'); 
});

Route::get('/cari-dokter', function () {
    return view('cari-dokter'); 
});

Route::get('/konsultasi', function () {
    return view('konsultasi'); 
});

Route::get('/kontak', function () {
    return view('kontak'); 
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');
