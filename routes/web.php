<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // ini mengarah ke resources/views/home.blade.php
});

Route::get('/about', function () {
    return view('about'); 
});

Route::get('/caridokter', function () {
    return view('caridokter'); 
});

Route::get('/konsultasi', function () {
    return view('konsultasi'); 
});

Route::get('/contact', function () {
    return view('contact'); 
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');
