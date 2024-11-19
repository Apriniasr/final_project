<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('/Dashboard', function () {
    return view('/Akun/dashboard');
});
Route::get('/Kreasi', function () {
    return view('/Kreasi/kreasi');
});
Route::get('/Tentang-Kami', function () {
    return view('tentangkami');
});
Route::get('/Kelola-Sampah', function () {
    return view('/Kelola Sampah/kelolasampah');
});

Route::get('/signin', function () {
    return view('/Akun/signin');
});

Route::get('/login', function () {
    return view('/Akun/login');
});