<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Basic Routing untuk menampilkan output.
Route::get('/hallo', function (){
    return "Hallo Laravel, saya sedang belajar laravel";
});

// Routing dengan parameter
Route::get('/mobil/{param}', function($mobil){
    return "Ini adalah halaman detail mobil. Mobil yang kamu pilih adalah : " . $mobil;
});

Route::get('/motor/{nama?}', function($motor = 'honda'){
    return view('kendaraan.motor', compact('motor'));
});
