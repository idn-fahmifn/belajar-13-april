<?php

use App\Http\Controllers\AgeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Basic Routing untuk menampilkan output.
Route::get('/hallo', function (){
    return "Hallo Laravel, saya sedang belajar laravel";
});

// Routing dengan parameter
// setiap routing dengan method get, post, put, patch dan delete wajib diberikan name.

Route::get('/mobil/{param}', function($mobil){
    return "Ini adalah halaman detail mobil. Mobil yang kamu pilih adalah : " . $mobil;
})->name('mobil');

Route::get('/motor/{nama?}', function($motor = 'honda'){
    return view('kendaraan.motor', compact('motor'));
})->name('motor');

Route::get('index-barang', [BarangController::class, 'halamanPertama'])->name('barang.index');
Route::get('create-barang', [BarangController::class,'create'])->name('barang.create');

// memanggil controller resource : 
Route::resource('item', ItemController::class);

// Halaman index dari umur
Route::get('form-umur', [AgeController::class, 'form'])->name('umur.form');
Route::get('success', [AgeController::class, 'success'])->name('umur.success');

// route untuk mengirim dengan method post
Route::post('send-umur', [AgeController::class, 'send'])->name('umur.send');



