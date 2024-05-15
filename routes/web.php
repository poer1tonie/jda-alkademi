<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/event', function () {
    return view('event');
});
