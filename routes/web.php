<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/prodi', function () {
    return view('prodi');
});

Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/visi-misi', function () {
    return view('visi-misi');
});
 
Route::get('/login', function () {
    return view('login');
});