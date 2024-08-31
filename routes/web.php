<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/pengalaman', function () {
    return view('pengalaman');
});

Route::get('/alatdankeahlian', function () {
    return view('alatdankeahlian');
});



