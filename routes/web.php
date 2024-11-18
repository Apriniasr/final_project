<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('/Dashboard', function () {
    return view('/Dashboard/dashboard');
});
Route::get('/Kreasi', function () {
    return view('/Dashboard/kreasi');
});
Route::get('/Tentang-Kami', function () {
    return view('/Dashboard/tentangkami');
});
Route::get('/Kelola-Sampah', function () {
    return view('/Dashboard/kelolasampah');
});
